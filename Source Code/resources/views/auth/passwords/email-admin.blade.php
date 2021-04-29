


@extends('layouts.index_layout')

@section('content')


		

        <!-- My Account Section Start -->
    		<div class="rs-login pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="noticed">
                        <div class="main-part">                           
                            <div class="method-account">
                                <h2 class="login mb-4">Admin Reset Password</h2>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                <form  method="POST" action="{{ route('admin.password.email') }}">
                                @csrf



                            <div class="form-group row">
                                <!-- <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label> -->

                                <div class="col-md-12">
                                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           
                                <!-- <label for="password" class="col-md-4 col-form-label text-md-right">Password</label> -->

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                </div>
                            

                                        
                                    
                                    

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- My Account Section End --> 





@endsection
