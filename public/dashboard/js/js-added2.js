
$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function(){
    var inpt;
    var options= "";

    $.ajax({
        url:'/get-products',
        method : 'GET',
        async: false,
        success:function(response){
            for(var i=0 ; i<response.length ; i++){
               
                options +=  '<option value = "'+ response[i].id +'">'+ response[i].name+'</option>';
            }
            
        },
        error:function(){
            alert("Un probleme !!")
        }


    });
    
 
    var j = parseInt($('#nbritt').val());
    var k = parseInt(j);
  
  
    var nm = 'id' + k;

       
    $(".btn-add").click(function(){
        j = j+1;
         k = k+1;
        

         var ingrt =  '<div class="row item-ing" id="'+k+'">'+
         ' <div class="col-md-4">'+
              '<label>Produit</label>'+
              '<select name="produit'+k+'" class="custom-select">'+
              options+
              '</select>'+ 
             
          '</div>'+
         ' <div class="col-md-2">'+
              '<label>Quantité</label>'+
              '<input type="number" name="quantite'+k+'" class="form-control" placeholder="00">'+
             
             
          '</div>'+
          '<div class=" col-md-2">'+
              '<label >Unité</label>'+
              '<select name="unite'+k+'" class="custom-select">'+
              '<option>Grs</option>'+
              '<option>Litre</option>'+
              '<option>c.a.c</option>'+
               '<option>c.a.s</option>'+
              '</select>'+
          '</div>'+
      '</div>';

      $( ".ingredient-section" ).append(ingrt);
      nm = 'id' + k;


    });
     
    
    $(".btn-remove").click(function(){
        
       
            if( k == 1){
             
            }
            else{
                $('#'+k).remove();
                k = k-1;
                nm = 'id' + k;
                
            }
            

        var id =  $('input[name='+nm+']').val(); 
       
         $.ajax({
            url:'/deleteing/'+ id,
            method:'DELETE',
            data:{         
                  id:id,        
                },
           
            success:function(response){
                
                
            },
            error:function(){
               
            }
    
        });

        
       
        
    });

    var i = 1 ;

    $(".btn-add-step").click(function(){
        
         i++;
         var step = '<div class="row step">'+
                '<div class="col-md-8">'+

                    '<label >Etape '+ i +'</label>'+
                    '<textarea type="text" name="step'+i+'" class="form-control" placeholder="Description" ></textarea>'+
                    


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

    var n = 1;
    $(".btn-add-media").click(function(){
        n++;
    var media = '<div class="row media ">'+
                '<div class="col-md-8">'+
                '<label>Image du resultat </label>'+
                '<div class="custom-file">'+
                '<input type="file" name="picture" class="custom-file-input" id="inputGroupFile02"/>'+
                '<label class="custom-file-label" for="inputGroupFile02">Choose file</label>'+
                '</div>'+
                '</div>'+
                '</div>';

                $(".media-section" ).append(media);
    });
    $(".btn-remove-media").click(function(){
         
        if(n>1){
           $(".media:last-child").remove();
           n--;
        }
   });

    $(".submitBtn").click(function(){  
       
        var inputnbr = '<input name="nbr" type="hidden" value="'+i+'" >';
        var inputingrd = '<input id="nbringrd" name="nbringrd" type="hidden" value="'+k+'" >';
        var inputmedia = '<input name="nbrmedia" type="hidden" value="'+n+'" >';
        $("#form-recette" ).append(inputnbr );
        $("#form-recette" ).append(inputingrd );
        $("#form-recette" ).append(inputmedia );
        $("#form-recette").submit(); // Submit the form
    });

     
  });