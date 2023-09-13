<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- bootstarp -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            .right-column {
                background: url('/assets/img/programming.jpg') no-repeat center center;
                background-size: cover;
                min-height: 100vh; /* Ensure the left column covers the entire viewport height */
            }
            .log {
                font-size: 30px;
                font-weight: bold;
                text-align: center;
            }
            .or {
                text-align: center;
                color: gray;
                padding-bottom: 7px;
            }
            .btn-google {
                border: 1px solid #e7e7e7; /* Green */
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">    
                <div class="col-md-5">

                    <x-guest-layout>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <p class="log">Login</p><br>
                                <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="mt-4 row">
                                    <div class="col-md-6">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    <div class="col-md-6 d-flex justify-content-end">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    
                                </div>

                                <!-- <div class="flex items-center justify-content-start mt-4">
                                    <a href="http://127.0.0.1:8000/register">
                                    <x-primary-button class="mr-5 bg-primary">
                                        {{ __('CREATE ACCOUNT') }}
                                    </x-primary-button>
                                    <button type="button" class="btn btn-secondary">Primary</button>
                                    </a>
                                    <x-primary-button class="mr-5">
                                        {{ __('Log in') }}
                                    </x-primary-button>
                                </div> -->
                                    <br>
                                        <div class="d-grid gap-4 d-md-flex">
                                        <a href="/register">
                                        <button class="btn bg-primary text-light" type="button" style="font-size: 13px;">CREATE ACCOUNT</button>
                                        </a>
                                        <button class="btn bg-dark text-light" type="submit" style="font-size: 13px;">LOG IN</button>
                                </div>
                                
                            </form>
                        <!-- Google sign up -->
                            <div>
                                <p class="or">or</p>
                                <a href="{{ url('auth/google') }}" class="btn btn-google d-flex justify-content-center align-items-center" style="font-weight: bold;">
                                    <img src="/assets/img/GoogleLogo.png" alt="" style="width: 18px;">
                                    &nbsp;&nbsp;&nbsp;Sign up with Google
                                </a>
                            </div>
                    </x-guest-layout>
                </div>
                <div class="col-md-7 right-column"></div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
