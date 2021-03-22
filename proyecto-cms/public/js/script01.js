/*=============================================
=     subir imagen temporal banner            =
===============================================*/
$(document).on('change','.imagenExEditar',function(){

    var imagen = this.files[0];
    /*=============================================
    =     VALIDAR EL FORMATO DE LA IMAGEN SEA JPG O PNG =
    ===============================================*/
   
    if(imagen["type"] !='image/jpeg' && imagen["type"] !='image/png'){
        console.log('hola');
        $('input[name="imagenExEditar"]').val("");
        $('.errorImagenCarga').append(`<div class="alert alert-danger" style="margin-top:10px">
            La Imagen tiene q ser de formato JPG O PNG
        </div>`);
    }else if(imagen["size"]>2000000){
        console.log('hola 1');
        $('input[name="imagenExEditar"]').val("");
        $('.errorImagenCarga').append(`<div class="alert alert-danger" style="margin-top:10px">
        La Imagen no debe de pesar más de 2mb
        </div>`);
    }else{

        var datosImg= new FileReader;
        
        datosImg.readAsDataURL(imagen);

        $(datosImg).on('load',function(event){
   
                 var rutaImage=event.target.result;
                 $(".imagenEdi").attr('src',rutaImage);
    
            

        })
    }
    
})
/*=============================================
=     subir imagen temporal galeria           =
===============================================*/
$(document).on('change','.imagen_una',function(){

    var imagen = this.files[0];
    /*=============================================
    =     VALIDAR EL FORMATO DE LA IMAGEN SEA JPG O PNG =
    ===============================================*/
   
    if(imagen["type"] !='image/jpeg' && imagen["type"] !='image/png'){
        console.log('hola');
        $('input[name="imagen_galeria"]').val("");
        $('.error_img').append(`<div class="alert alert-danger" style="margin-top:10px">
            La Imagen tiene q ser de formato JPG O PNG
        </div>`);
    }else if(imagen["size"]>2000000){
        console.log('hola 1');
        $('input[name="imagen_galeria"]').val("");
        $('.error_img').append(`<div class="alert alert-danger" style="margin-top:10px">
        La Imagen no debe de pesar más de 2mb
        </div>`);
    }else{

        var datosImg= new FileReader;
        
        datosImg.readAsDataURL(imagen);

        $(datosImg).on('load',function(event){
   
                 var rutaImage=event.target.result;
                 $(".imagen_galeria").attr('src',rutaImage);
    
            

        })
    }
    
})