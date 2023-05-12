{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
 --}}





 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>SignUp</title>
</head>
<style>
            @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');

        *{
            font-family: 'Poppins', sans-serif;
        }
        .wrapper{
            background-image: url("images/3.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: center;

        }





        .main{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .rowss {
            width: 900px;
            height: 550px;
            border-radius: 25px;
            background: rgba(255,255,255,255);

            box-shadow: 5px 5px 10px 1px rgba(0,0,0,0.2);
        }
        .side-image{
            background-image: url("images/1.png");
            background-position: center;
            background-size: 100%;
            background-repeat: no-repeat;
            position: center;
            padding: 0 10px 0 10px;
        }
        img{
            width: 35px;
            position: absolute;
            top: 30px;
            left: 30px;
        }
        .text{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .text p{
            color: #fff;
            font-size: 18px;
        }
        i{
            font-weight: 400;
            font-size: 15px;
        }
        .right{
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .input-box{
            width: 300px;
            box-sizing: border-box;
        }
        .input-box header{
            font-weight: 700;
            font-size: 40px;
            text-align: center;
            margin-bottom: 25px;
        }
        .input-field{
            display: flex;
            flex-direction: column;
            position: relative;

        }
        .input{
            height: 45px;
            width: 100%;
            background: transparent;
            border: 1px  #000;

            border-bottom: 1px solid rgba(0,0,0,0.2);
            outline: none;
            margin-bottom: 10px;
            color: #40414a;
        }
        .input-box .input-field label{
            position: absolute;
            top: 10px;
            left: 10px;
            pointer-events: none;
            transition: .5s;
        }
        .input-field .input:focus ~ label{
            top: -10px;
            font-size: 13px;
        }
        .input-field .input:valid ~ label{
            top: -10px;
            font-size: 13px;
            color: #109e12;
        }



        .input-field .input:focus, .input-field .input:valid{
            border-bottom: 1px solid #743ae1;
        }
        .submit{
            border: none;
            outline: none;
            height: 40px;
            background: #ececec;
            border-radius: 5px;
            transition: .4s;
        }
        .submit:hover{
            background: rgba(37, 95, 156,0.9);
            color: #fff;
        }
        .signin{
            text-align: center;
            font-size: small;
            margin-top: 25px;
        }
        span a{
            text-decoration: none;
            font-weight: 700;
            color: #000;
            transition: .5s;
        }
        span a:hover{
            text-decoration: underline;
            color: #000;
        }
        @media only screen and (max-width: 768px){
            .side-image{
                border-radius: 10px 10px 0 0;
            }
            img{
                width: 35px;
                position: absolute;
                top: 20px;
                left: 47%;
            }
            .text{
                position: absolute;
                top: 70%;
                text-align: center;
            }
            .text p,i{
                font-size: 17px;
            }
            .rowss {
                max-width: 420px;
                width: 100%;
            }
        }


</style>



<x-validation-errors class="mb-4" />

<body>
    <div class="wrapper">

        <div class="container main h-100">

            <div class="rowss row">
                <div class="col-md-6 side-image">
                </div>
                <div class="col-md-6 right">




        <form method="POST" action="{{ route('register') }}">
            @csrf
                     <div class="input-box">

                        <header>SignUp</header>


                    <div class="form-outline mb-2">
                        <input type="text" id="email" placeholder="first name" :value="old('firstname
                        ')"   name="firstname" required class="form-control form-control"/>
                    </div>


                        <div class="form-outline mb-2">

                        <input type="text" id="email" placeholder="last name" :value="old('lastname')"   name="lastname" required class="form-control form-control"/>
                      </div>

                      <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="email" id="email" placeholder="Email"  autocomplete="off"  :value="old('email')" name="email"  required class="form-control form-control" />
                      </div>







                          <div class="form-outline mb-2">

                            <input type="password" id="password" class="form-control form-control" placeholder="Password" name="password"   required/>
                          </div>


                          <div class="form-outline mb-3">

                            <input type="password" id="password" name="password_confirmation" placeholder="Confirm Password"  required class="form-control form-control" />
                          </div>





                      </div>
                       <div class="form-outline mb-2">

                        <select  id="phonenumber"  name="country"  class="form-control form-control " />
                                <option value="1" >select 1</option>
                                <option value="2" >select 2</option>
                                <option value="3" >select 3</option>
                                <option value="4" >select 4</option>
                                <option value="5" >select 5</option>


                        </select>




                      </div>


                        <div class="form-outline mb-2">
                        <input type="tel" id="phonenumber"  name="phone" :value="old('phone')" placeholder="PhoneNumber" class="form-control form-control" />
                      </div>

                        <div class="form-outline mb-2">

                        <input type="text" id="email" placeholder="address"  id="name" :value="old('address')"  name="address" required class="form-control form-control"/>
                      </div>


                        <div class="input-field">
                            <input type="submit" name="submit" value="Register" class="submit" >

                        </div>
                        <div class="signin">
                            <span>Already have an account? <a href="{{url('login')}}">Log in here</a></span>
                        </div>

@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif


                    </form>
                     <?php
        if(isset($errors)){
            if(!empty($errors)){
                foreach($errors as $msg){
                    echo $msg . "<br>";
                }
            }
        }
    ?>







                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
