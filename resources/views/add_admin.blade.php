@extends('layouts.dashboard-admin')

@section('content')


    
        <div class="container-fluid col-md-6 pt-5 "  id="app">
    
        
          <!-- general form elements -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Merci de remplir les champs</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{url('admins')}}">
              @csrf
              <div class="card-body" id="hiddens">



                <div class="form-group">
                  <label for="exampleInputTitre">Nom</label>
                  <div >
                      
                      <input id="name" placeholder="Entrer le nom" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required >

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>

                 <div class="form-group">
                  <label for="exampleInputTitre">Email</label>
                  <div >
                      
                      <input id="email" placeholder="Entrer l'email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required >

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputTitre">Date de naissance</label>
                    <div >
                        
                        <input id="date" placeholder="Entrer la date de naissance" type="date" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance"  required >
  
                        @error('date_naissance')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTitre">Civilité</label>
                    <div >
                        
                        <input id="civilite" placeholder="Entrer la civilité" type="text" class="form-control @error('civilite') is-invalid @enderror" name="civilite"  required >
  
                        @error('civilite')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                 <div class="form-group">
                  
                  <div >
                      
                      <input  type="hidden" class="form-control" name="cuisinier"  value = 'cuisinier'>

                     
                  </div>
                </div> 
                   

                      <div class="form-group">
                          <label for="password">{{ __('Password') }}</label>

                          <div>
                              <input id="password" placeholder="Saisir mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="password-confirm">{{ __('Confirm Password') }}</label>

                          <div>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                      </div>


              
                 <div class="card-footer">
                <button type="submit" class="btn btn-success pl-4 pr-4">Ajouter</button>
              </div>
            </form>
          </div>
                  
      
  
@endsection
