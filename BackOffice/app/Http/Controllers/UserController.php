<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request){

        $email = $request->input('email');
        $password = $request->input('password');
        $result = User::take(1)->get();
        if ($result[0]->email == $email && $result[0]->password == $password) {
            $request->session()->put('user', $result[0]);
            return redirect()->route('liste'); ;
        }
        else{
            return view('index');
        }

    }
}
