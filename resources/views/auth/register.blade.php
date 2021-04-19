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
        <div class="modal container">
          <h3>Register</h3>
          <form method="POST" action="{{ route('register') }}">
            @csrf

          <div class="f-row">
            <input type="text" placeholder=" Entrer votre nom" class="form-control @error('name') is-invalid @enderror" name="name"  required  />
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
           @enderror
          </div>

          <div class="f-row">
            <input type="email" placeholder=" Entrer votre email" class="form-control @error('email') is-invalid @enderror" name="email"  required />
            @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
            @enderror
          </div>

          <div class="f-row">
            <input type="date" placeholder="Entrer votre  date de naissance" class="form-control @error('date_naissance') is-invalid @enderror" style="font-size:13px;"name="date_naissance"  required  />
            @error('date_naissance')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror
          </div>
          

          <div class="f-row">
            <input type="text" placeholder="Entrer la civilité" class="form-control @error('civilite') is-invalid @enderror" name="civilite"  required  />
            @error('civilite')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

          <div class="f-row">
            <input type="password" placeholder=" password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
            @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      </span>
            @enderror
          </div>
          
          <div class="f-row">
            <input type="password" placeholder="Retype password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
          </div>
          <div class="f-row">
            <input  type="hidden" class="form-control" name="cuisinier"  value = 'cuisinier'>
          </div>
            

         
          <div class="f-row bwrap ">
            <input type="submit" value="register" />
          </div>
         
            <p>Already have an account yet? <a href="login.html">Log in.</a></p>

          
          
        </div>
      </section>
      <!--//content-->
    </div>
    <!--//row-->
  </div>
  <!--//wrap-->
</main>
<!--//main-->

</section>      
  
@endsection
