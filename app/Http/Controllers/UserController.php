<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            //'email' => 'required|string|email|max:255|unique:users',
            'address' => 'required|string',
            //'mobile' => 'required|string|max:15|unique:users',
            //'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function edit()
    {
        $user = Auth::user();
        return view('pages.editProfile', compact('user'));
    }

    public function update(Request $request)
    {
        $this->validator($request->all())->validate();

        User::where('id', Auth::id())
                ->update([
                    'name' => $request->name,
                    'address' => $request->address
                ]);

        return redirect(route('home').'#profile');

        /*return response()->json([
            'result' => 'success',
            'redirect' => $this->redirectPath()
        ]);*/
    }
}
