<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function viewCloth(){
        $data=Product::all();
        return view('user.categoryView.cloth',compact('data'));
    }
    public function viewElectronic(){
        $data=Product::all();
        return view('user.categoryView.electronic',compact('data'));
    }
    public function viewShoes(){
        $data=Product::all();
        return view('user.categoryView.shoes',compact('data'));
    }
    public function viewWatches(){
        $data=Product::all();
        return view('user.categoryView.shoes',compact('data'));
    }
    public function viewJewellery(){
        $data=Product::all();
        return view('user.categoryView.jewellery',compact('data'));
    }
    public function viewSport(){
        $data=Product::all();
        return view('user.categoryView.sport',compact('data'));
    }
    public function viewKids(){
        $data=Product::all();
        return view('user.categoryView.kid',compact('data'));
    }
}
