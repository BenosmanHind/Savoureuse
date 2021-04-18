@extends('layouts.front')
@section('content')

<!--main-->
<main class="main" role="main">
    <!--wrap-->
    <div class="wrap clearfix">
        <!--row-->
        <div class="row">
        <!--content-->
            <section class="content center full-width">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="modal container">
                    <h3>Login</h3>
                    <div class="f-row">
                        
                        <input type="text" placeholder="Votre email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                    </div>

                    <div class="f-row">
                        <input type="password" placeholder="Votre mot de passe"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    
                    <div class="f-row">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        <label>Remember me next time</label>
                    </div>
                    
                    <div class="f-row bwrap">
                        <input type="submit" value="login" />
                    </div>
                    <p><a href="#">Forgotten password?</a></p>
                    <p>Dont have an account yet? <a href="register.html">Sign up.</a></p>
                </div>
            </section>
            <!--//content-->
        </div>
        <!--//row-->
    </div>
    <!--//wrap-->
</main>
<!--//main-->
@endsection