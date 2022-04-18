<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use BaconQrCode\Renderer\Path\Move;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
   
    public function add_product(Request $request)
    {
        //  $test=$request->file('product_image')->extension();
        // dd($test);
        //dd($request->hasfile('product_image'));
        //dd($request->all());
        // $newImageName=time().'-'. $request->name .'.'. $request->product_image->extension();
        // $request->product_image->move(public_path('images'),  $newImageName) ;
            //  dd($test);

        // $request->validate([
        //     'name'=>'required',
        //     'quantity'=>'required|integer|min:0',
        //     'price'=>'required|numeric|between:0,99.99',
        //     'product_image'=>'required|mimes:jpg, png, jpeng|max: 5064'
        // ]);
        
        $product = new Product();
        if($request->hasfile('product_image')){
            $newImageName=time().'-'. $request->name .'.'. $request->product_image->extension();
            $request->product_image->move(public_path('uploads'),  $newImageName) ;
            $product->product_image = $newImageName;
        
        }
        else{
            $product->product_image='';
        }
        

        $product->name = $request->input('name');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        $product->category = $request->input('category');

      
        $product->save();
        // return redirect()->back()->with('message', 'Product added success fully');
        $data=Product::all();
        return view('user.home',compact('data'));
        // return redirect()->route('list.category')->with('flash_message_success','Category added Successfully !');
    }

    public function updateView(){
        // $data=Product::find($id);
        // return view('products.updateView', compact('data'));
        return view('products.updateView');
    }
}
