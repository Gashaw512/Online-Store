<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function stores(){
        return view('admin.store');
    }
    public function adminAdd(){
        return view('admin.add');
    }
    public function showCustomer(){
        $data=User::all();
        return view('admin.customerList', compact('data'));
    }
    public function showProduct(){
        $data=Product::all();
        return view('admin.productList', compact('data'));
    }
    public function delateProduct($id){
        $data=Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product delated Succes fully');

    }
}
