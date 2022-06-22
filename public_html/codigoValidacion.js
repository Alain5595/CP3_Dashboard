$('#nuevoPaciente').submit(function(e){
   e.preventDefault();
   var apellido = $.trim($("#apellido").val());    
   var nombre =$.trim($("#nombre").val());   
   var sexo =$.trim($("#sexo").val());   
   var edad =$.trim($("#edad").val());   
   var fech_nac =$.trim($("#fech_nac").val());   
   var tipo_documento =$.trim($("#tipo_documento").val());   
   var dni =$.trim($("#dni").val());
   var celular =$.trim($("#celular").val()); 
   var domicilio =$.trim($("#domicilio").val()); 
   var correo =$.trim($("#correo").val()); 
   var ocupacion =$.trim($("#ocupacion").val()); 
   var alergias =$.trim($("#alergias").val()); 
   var intervencion_quirurgicas =$.trim($("#intervencion_quirurgicas").val());    
   var vacunas =$.trim($("#vacunas").val());
   

   if(apellido.length == "" || nombre == "" || sexo == "" || edad == "" || fech_nac == "" || tipo_documento == "" || dni == "" || celular == "" || domicilio == "" || correo == "" || ocupacion == "" || alergias == "" || intervencion_quirurgicas == "" || vacunas == ""){
      Swal.fire({
          type:'warning',
          title:'Debe rellenar todos los campos vacios',
      });
      return false; 
    }else{
        $.ajax({
           success:function(data){               
               if{
                   Swal.fire({
                       type:'success',
                       title:'¡Conexión exitosa!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           window.location.href = "paciente.nuevo.php";
                           //window.location.href = "dashboard/index.php";
                       }
                   })
                   
               }
               
           }    
        });
    }     
});