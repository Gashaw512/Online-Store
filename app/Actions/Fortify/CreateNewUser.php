<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
    
        // if (Auth::id() == '1'){

            Validator::make($input, [
                'fname' => ['required', 'string', 'max:255'],
                'lname' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            ])->validate();

        return User::create([
            'first_name' => $input['fname'],
            'last_name' => $input['lname'],
            'userType' => $input['userType'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        
        // else{

        //     Validator::make($input, [
        //         'fname' => ['required', 'string', 'max:255'],
        //         'lname' => ['required', 'string', 'max:255'],
        //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //         'password' => $this->passwordRules(),
        //         'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        //     ])->validate();

        // return User::create([
        //     'first_name' => $input['fname'],
        //     'last_name' => $input['lname'],
        //     'email' => $input['email'],
        //     'password' => Hash::make($input['password']),
        // ]);

        // }
            
    }
}
