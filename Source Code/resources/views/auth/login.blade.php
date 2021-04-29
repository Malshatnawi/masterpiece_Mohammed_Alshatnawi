@extends('layouts.index_layout')

@section('content')


		

        <!-- My Account Section Start -->
    		<div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="noticed">
                        <div class="main-part">                           
                            <div class="method-account">
                                <h2 class="login mb-4">Login</h2>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                            <div class="form-group row">
                                <!-- <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label> -->

                                <div class="col-md-12">
                                    <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <!-- <label for="password" class="col-md-4 col-form-label text-md-right">Password</label> -->

                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                                        
                                    
                                    <!-- <input type="email mb-30" name="text" placeholder="E-mail" required="">
                                    <input type="text" name="text" placeholder="Password" required=""> -->
                                    <button type="submit" class="readon submit-btn">login</button>
                                    <div>
                                        <a href="{{ route('password.request') }}" class="text-gray">
                                            <small>{{ __('Forgot Your Password?') }}</small>
                                        </a>
                                    </div>
                                    <div class="last-password">
                                        <p>Not registered? <a href="{{ route('register') }}">Create an account</a></p>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My Account Section End --> 





@endsection
