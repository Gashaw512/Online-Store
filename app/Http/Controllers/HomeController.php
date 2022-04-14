<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->userType == '0') {
                return view('user.home');
                // return 'Hi user';
            }
            else{
                return view('admin.home');
                // return 'Hi Admin';
               
            }
        } else {
            return redirect()->back();
        }
    }
    public function index(){
        return view('user.home');
        }
}
