@extends('layouts.front')
@section('content')

<main class="main" role="main">
    <!--wrap-->
    <div class="wrap clearfix">
       
        
        <!--row-->
        <div class="row">
           
            
          
            <!--content-->
            <section class="content full-width d-flex justify-content-center">

                <div class="col-md-8 mt-3">
                    <div class="card">
                        <div class="card-header bg-success text-white">{{ __('Enregistrement avec succes') }}</div>
        
                            <div class="card-body">
                            Vous allez attendre la confirmation de votre compte !
                                
                                    
                            
                            </div>
                        </div>
                     </div>
                </div>
                

                
            <!--//content-->
        </div>
        <!--//row-->
    </div>
    <!--//wrap-->
</main>

@endsection
