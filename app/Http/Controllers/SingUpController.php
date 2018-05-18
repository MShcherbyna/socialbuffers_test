<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SingUpController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return view('auth.sing_up');
        } else {
            return redirect('/home');
        }
        
    }
}
