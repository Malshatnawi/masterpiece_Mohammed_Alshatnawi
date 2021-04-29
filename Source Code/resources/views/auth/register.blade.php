@extends('layouts.index_layout')

@section('content')



  <!-- My Account Section Start -->
  <div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="noticed">
                        <div class="main-part">                           
                            <div class="method-account">
                                <h2 class="login mb-4">Register</h2>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

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

                            <div class="form-group row">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" placeholder="Password Confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div> 
                            </div>   

                                        
                                    
                                    <!-- <input type="email mb-30" name="text" placeholder="E-mail" required="">
                                    <input type="text" name="text" placeholder="Password" required=""> -->
                                    <button type="submit" class="readon submit-btn">Register</button>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="users">Already have an account? <a href="{{ route('login') }}">Sign In</a></div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My Account Section End --> 




      











            

        
        </div> 
        <!-- Main content End --> 

       









        
@endsection
