


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('public/admin/css/base.css')}}" rel="stylesheet" />
    <link href="{{asset('public/admin/css/app.css')}}" rel="stylesheet" />
    
</head>
<body class="background">

<div class="container">
    <div class="row justify-content-center positioning">
        <div class="col-md-8 centering">
            <div class="card card card-signin my-5">
                <div class="card-body">

                <div class="logo text-center">
				<img src="{{asset('public/admin/image/final-logo.png')}}" />
			</div>
            <h5 class="card-title text-center">Login </h5>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-signin">
                          

                            <div class="form-label-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" placeholder="Email address" required autocomplete="email" autofocus>
                                <label for="email" class="">{{ __('E-Mail Address') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            

                            <div class="form-label-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                <label for="password" class="">{{ __('Password') }}</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="login-btn-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>


