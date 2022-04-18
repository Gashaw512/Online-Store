<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .title {
            color: black;
            font-size: 25px;
            padding-top: 50px;
        }

        .main-warapper {
            text-align: center;
            justify-content: center;
        }
    </style>

</head>

<body class="">
    <div class="wrapper ">

    
        @include('admin.sidebar')

        <div class="main-panel" id="main-panel">
            @include('admin.navbar')


            <div class="panel-header panel-header-sm">
            </div>
            <div class="content" class="main-warapper container" >
                <h1 class="title" style=" text-align:center;">Add User</h1>
                <div>
                    {{-- @include('auth.register') --}}



                    <x-guest-layout>
                        <x-jet-authentication-card>
                            <x-jet-validation-errors class="mb-4" />
                    
                            <form action="{{url('/register')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                    
                                <div>
                                    <x-jet-label for="fname" value="{{ __('First Name') }}" />
                                    <x-jet-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')"
                                        required autofocus autocomplete="fname" />
                                </div>
                    
                                <div>
                                    <x-jet-label for="lname" value="{{ __('Last Name') }}" />
                                    <x-jet-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')"
                                        required autofocus autocomplete="lname" />
                                </div>
                    
                                <div class="mt-4">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                        required />
                                </div>
                    
                                <div class="mt-4">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                        autocomplete="new-password" />
                                </div>
                    
                                <div class="mt-4">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
                                </div>
                    
                                @if(Auth::id())       
                                @if(Auth::user()->userType == '1')
                                <div class="mt-4">
                                    <div>
                                        <x-jet-label for="userType" value="{{ __('User Type'  ) }}" />
                                        <x-jet-input id="userType" class="block mt-1 w-full" type="number" name="userType"
                                            :value="old('userType')" required autofocus autocomplete="userType" min="0" max="1"
                                            placeholder="Write only 0 ( Standard user ) or 1 ( Admin )" />
                                    </div>
                                </div>
                    
                                @endif
                                @endif
                    
                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms" />
                    
                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                                    class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of
                                                    Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                                    class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                                    Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                                @endif
                    
                                <div class="flex items-center justify-end mt-4">
                                    
                                    @if(!Auth::id())
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                    @endif
                                    <x-jet-button class="ml-4">
                                        {{ __('Register') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </x-jet-authentication-card>
                    </x-guest-layout>





                </div>
            </div>
            @include('admin.footer')
        </div>

    </div>
    <!--   Core JS Files   -->
    @include('admin.script')
</body>

</html>