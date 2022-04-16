<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->userType == '0') {

                $data=Product::all();
                return view('user.home',compact('data'));
                // return view('user.home');
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
        if(Auth::id()){
            return redirect('home');
        }
        else{
            $data=Product::all();
            return view('user.home',compact('data'));
        }
        
        }
}
