{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
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
    <title>login</title>
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









<body>
    <div class="wrapper">

        <div class="container main h-100">

            <div class="rowss row">

                <div class="col-md-6 right">

        <form method="POST" action="{{ route('login') }}">
            @csrf
                     <div class="input-box">

                        <header>Login</header>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="email" id="email" placeholder="Email"  name="email" :value="old('email')" required autofocus autocomplete="username" class="form-control form-control" />
                      </div>


                          <div class="form-outline mb-3">

                            <input type="password" id="password" class="form-control form-control" placeholder="Password" name="password" required autocomplete="current-password"/>
                          </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>



                        <div class="input-field mb-3">
                            <input type="submit" name="submit" value="login" class="submit" >

                        </div>
                        <div class="signup">
                            <span>i didn't  have an account? <a href="{{url('register')}}"> Creat one here </a></span>
                        </div>

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

                            <div class="col-md-6 side-image">
                </div></div>
        </div>


    </div>
</body>
</html>
