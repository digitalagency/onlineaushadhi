<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class PagesController extends Controller
{
    public function index()
    {
        $registeredThisWeek = User::countRegisteredThisWeek()->count();
        $registeredThisWeek = $registeredThisWeek > 3 ? 5 * $registeredThisWeek : 7;

        $happyClients = getNumForHumans(1100 + User::count());

        $gaVisitors = 50;
        $featured = Product::where('display_in', 'like', '%featured%')->get();
        $topselling = Product::where('display_in', 'like', '%top_selling%')->get();
        $diabetes_hypertension = Product::where('display_in', 'like', '%diabetes_hypertension%')->get();
        //print_r($topselling);
        return view('pages.index', compact('registeredThisWeek', 'happyClients', 'gaVisitors', 'featured','topselling','diabetes_hypertension'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function product()
    {
        return view('pages.product');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function returnPolicies()
    {
        return view('pages.return');
    }

    public function firstAidKit()
    {
        return view('pages.firstAidKit');
    }

    public function diabetesCare()
    {
        return view('pages.diabetescare');
    }

    public function medicalDevices()
    {
        return view('pages.medicaldevices');
    }

    public function uploadPrescription(Request $request)
    {
        if ($request->session()->has('prescriptions')) {
            $request->session()->forget('prescriptions');
        }
        
        return view('pages.uploadPrescription');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function service()
    {
        return view('pages.service');
    }
    
    public function thanks()
    {
        return view('pages.thanks');
    }

    public function prescriptionThanks()
    {
        return view('pages.prescriptionThanks');
    }
}
