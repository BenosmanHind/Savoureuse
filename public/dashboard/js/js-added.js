$(document).ready(function(){

    var ingrt =  '<div class="row item-ing" id="">'+
           ' <div class="col-md-4">'+
                '<label>Produit</label>'+
                '<select class="custom-select">'+
                '@foreach ($produits as $produit)'+
                '<option value={{$produit->id}}>{{$produit->name}}</option>'+
                '@endforeach'+
            
                '</select>'+
            '</div>'+
           ' <div class="col-md-2">'+
                '<label>Quantité</label>'+
                '<input type="number" class="form-control" placeholder="00">'+
            '</div>'+
            '<div class=" col-md-2">'+
                '<label >Unité</label>'+
                '<select class="custom-select">'+
                '<option>Grs</option>'+
                '<option>Litre</option>'+
                '</select>'+
            '</div>'+
        '</div>';
        var j = 1;
    $(".btn-add").click(function(){
        j++;
      $( ".ingredient-section" ).append(ingrt);
    });

    $(".btn-remove").click(function(){
        $(".item-ing:last-child").remove();
    });

    var i = 1 ;

    $(".btn-add-step").click(function(){
        
         i++;
         var step = '<div class="row step">'+
                '<div class="col-md-8">'+
                    '<label >Etape '+ i +'</label>'+
                    '<input name="step'+i+'" type="string" class="form-control" placeholder="Description">'+
                '</div>'+
            '</div>';
         $(".etape-section" ).append(step);
    });

    $(".btn-remove-step").click(function(){
         
         if(i>1){
            $(".step:last-child").remove();
            i--;
         }
    });

    $(".submitBtn").click(function(){  
        var inputnbr = '<input name="nbr" type="hidden" value="'+i+'" >';
        var inputingrd = '<input name="nbringrd" type="hidden" value="'+j+'" >';
        $("#form-recette" ).append(inputnbr );
        $("#form-recette" ).append(inputingrd );
        $("#form-recette").submit(); // Submit the form
    });


  });