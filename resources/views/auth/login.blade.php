@extends('layouts.app')

@section('auth')

 <div class="container">
                <div class="login-container">
                    <div class="row justify-content-center row align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="card login-box">
                                <div class="card-body">
                                    <h5 class="card-title">{{ __('Login') }}</h5>
                                    
                     <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                          
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="custom-control custom-checkbox form-group">
                         <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">  {{ __('Remember Me') }}</label>
                         </div>



                      

                        <div class="form-group">
                           
                                <button type="submit" class="btn btn-primary float-right waves-effect waves-light">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                           
                        </div>
                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
