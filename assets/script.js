$(document).ready(function() {
    $(".btn-edit").click(function(){
        var id = $(this).attr('ALT');
        $("#nombre"+id).css("display", "inline-block");
        $("#correo"+id).css("display", "inline-block");
        $("#sexo"+id).css("display", "inline-block");					
        $("#area"+id).css("display", "inline-block");
        $("#boletin"+id).css("display", "inline-block");
        $("#btn-cancel"+id).css("display", "inline-block");
        $("#btn-save"+id).css("display", "inline-block");

        $("#txt_nombre"+id).css("display", "none");
        $("#txt_correo"+id).css("display", "none");
        $("#txt_sexo"+id).css("display", "none");					
        $("#txt_area"+id).css("display", "none");
        $("#txt_boletin"+id).css("display", "none");
        $("#btn-edit"+id).css("display", "none");
      })

    $('.btn-cancel').click(function()
        {			
            var id = $(this).attr('ALT');
            $("#nombre"+id).css("display", "none");
            $("#correo"+id).css("display", "none");
            $("#sexo"+id).css("display", "none");					
            $("#area"+id).css("display", "none");
            $("#boletin"+id).css("display", "none");
            $("#btn-cancel"+id).css("display", "none");
            $("#btn-save"+id).css("display", "none");
    
            $("#txt_nombre"+id).css("display", "inline-block");
            $("#txt_correo"+id).css("display", "inline-block");
            $("#txt_sexo"+id).css("display", "inline-block");					
            $("#txt_area"+id).css("display", "inline-block");
            $("#txt_boletin"+id).css("display", "inline-block");
            $("#btn-edit"+id).css("display", "inline-block");	
    });

    $('.btn-save').click(function(){	
        var id = $(this).attr('ALT');
        nombre = $("#nombre"+id).val();
        correo = $("#correo"+id).val() 			 			
        sexo = $("#sexo"+id).val();
        area = $("#area"+id).val(); 
        boletin = $("#boletin"+id).val() 
        validate=/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        if(nombre=="" || nombre==undefined || nombre==null){
            alert("Nombre invalido")
            $("#nombre"+id).focus()
        }else if(!validate.test(correo)){
            alert(correo+" INVALIDO")
            $("#correo"+id).focus()
        }else if(sexo=="" || sexo==undefined || sexo==null){
                alert("seleccione un sexo")
                $("#sexo"+id).focus()
         }else if(area=="" || area==undefined || area==null){
            alert("seleccione una area")
            $("#sexo"+id).focus()
        }else if(boletin=="" || boletin==undefined || boletin==null){
            alert("seleccione boletin")
            $("#sexo"+id).focus()
        }else{
            $.ajax({
                type: "POST",
                url: "../prueba/controller/script.php",
                async: false,
                data: { id:id, nombre:nombre, correo:correo, sexo:sexo, area:area, boletin:boletin, evento: "update_empleado" },
                success: function (data) {
                    alert(data)
                }
            });
        }
    });
});