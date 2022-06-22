$('#formLogin2').submit(function(e){
   e.preventDefault();
   var nombres = $.trim($("#nombres").val()); 
   var apellidos = $.trim($("#apellidos").val()); 
   var email = $.trim($("#email").val());    
   var usuarios = $.trim($("#usuarios").val());
   var password =$.trim($("#password").val());
   var confirmar_password =$.trim($("#confirmar_password").val());    
    
   if(nombres == "" || apellidos == "" || email == "" || usuarios == "" || password == "" || confirmar_password == ""){
      Swal.fire({
          type:'warning',
          title:'Debes completar todos los casilleros',
      });
      return false; 
    }else{
        $.ajax({
           url:"bd/login_new.php",
           type:"POST",
           datatype: "json",
           data: {nombres:nombres, apellidos:apellidos, email:email, usuarios:usuarios, password:password}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Usuario y/o password incorrecta',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'¡Datos almacenados exitosamente!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           window.location.href = "index.php?usuarios="+usuarios;
                           //window.location.href = "dashboard/index.php";
                       }                   
                   })
               }
           }    
        });
    }     
});