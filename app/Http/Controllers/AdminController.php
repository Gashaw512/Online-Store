<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;




class AdminController extends Controller implements CreatesNewUsers
{

    // use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

     return User::create([
            'first_name' => $input['fname'],
            'last_name' => $input['lname'], 
            'userType' => $input['userType'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
       
    }



    // public function addUser(Request $request)
    // {
    //     Validator::make($request, [
    //         'fname' => ['required', 'string', 'max:255'],
    //         'lname' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => $this->passwordRules(),
    //         'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
    //     ])->validate();



    //     $user = new User();

    //     $user->first_name = $request->input('fname');
    //     $user->last_name = $request->input('lname');
    //     $user->userType = $request->input('userType');
    //     $user->email = $request->input('email');
    //     $user->password = Hash::make($request->input('password'));
    //     dd($user);
    // }
    public function stores()
    {
        return view('admin.store');
    }
    public function adminAdd()
    {
        return view('admin.add');
    }
    public function showCustomer()
    {
        $data = User::all();
        return view('admin.customerList', compact('data'));
    }
    public function showProduct()
    {
        $data = Product::all();
        return view('admin.productList', compact('data'));
    }
    public function delateProduct($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product delated Succes fully');
    }
}
