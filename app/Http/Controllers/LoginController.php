<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(UserFormRequest $request){
        $data = $request->validated();
        $credentials = ['phone' => $data['phone'], 'password' => $data['password']];
        if(Auth::attempt($credentials)){
            $user = auth()->user();
            if ($user->type === 'admin') {
                return redirect()->to('/dashboard/users');
            } else{
                return redirect()->to('/');
            }
        }
        else {
            return redirect()->back()->withErrors(['error' => 'Email or password invalid']);
        }
    }
}
