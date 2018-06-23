<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUploadRequest;
use App\Mail\PrescriptionReceived;
use App\Prescription;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UploadController extends Controller
{

    public function upload(ImageUploadRequest $request)
    {
        $filename = $request->file('prescription')->store('prescriptions');

        $this->setPrescriptionRequestTime($request);

        if ($this->confirmClearPrescriptionSession($request)) {
            $this->clearPrescriptionSession($request);
        }

        if ($request->session()->has('prescriptions')) {
            $request->session()->push('prescriptions', $filename);
        } else {
            $request->session()->put('prescriptions', [$filename]);
        }

        $request->session()->save();

        return response()->json(['success' => true, 'session' => $request->session()->all()]);
    }

    public function setPrescriptionRequestTime(Request $request)
    {
        if (!$request->session()->has('prescriptionRequestTime')) {
            $request->session()->put('prescriptionRequestTime', $request->get('prescriptionRequestTime  '));
        }
    }

    public function clearPrescriptionSession(Request $request)
    {
        $request->session()->forget('prescriptions');
    }
    
    public function confirmClearPrescriptionSession(Request $request)
    {
        if ($request->session()->has('prescriptionRequestTime')
            && $request->session()->get('prescriptionRequestTime') != $request->get('prescriptionRequestTime')) {
            return true;
        }
        
        return false;
    }

    public function store(Request $request)
    {
        if (!$request->session()->has('prescriptions')) {
            return redirect(route('prescription'));
        }

        $data = [];
        foreach ($request->session()->get('prescriptions') as $prescription) {
            $data[] = [
                'client_id' => Auth::user()->id,
                'date' => Carbon::now()->format('Y-m-d'),
                'image_name' => $prescription,
                'image_path' => $prescription
            ];
        }

        Prescription::insert($data);

        // send email

        Mail::to(env('MAIL_COMPANY_ADDRESS', 'pharmacist@onlineaushadhi.com'))
            ->send(new PrescriptionReceived($prescription));

        $request->session()->forget('prescriptions');
        $request->session()->forget('prescriptionRequest');

        return redirect(route('pages.prescriptionsThanks'));
        //return redirect(route('home').'#prescriptions')->with('status', 'Prescription uploaded successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hasPermissions = request()->user()->prescriptions->contains($id);

        if ($hasPermissions) {
            Prescription::find($id)->delete();
        }
        
        return redirect(route('home').'#prescriptions')->withSuccessMessage('Prescription has been removed!');
    }
}
