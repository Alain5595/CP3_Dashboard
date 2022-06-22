<?php include("vistas/cabecera.php"); ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper table-responsive">

    <!-- Contenerdor para el modal -->
    <div id="modalContainer1"></div>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <!---Encabezado del dashboard -->
            <h1>Paciente</h1>
            <div class="container">
              <div class="row">
                <div class="col-lg-12 mt-3"> 
                  <a class="btn btn-success" href="pacienteNuevo.php" role="button">Agregar</a>
                </div> 

              </div>    
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Inicio</a></li>
              <li class="breadcrumb-item active">Paciente</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->

      <!-- <button type="button" onclick="ConfirmarEliminarProducto()">New</button> -->

    </section>
        <!-- Main content -->
        <section class="content1">
          <div class="container-fluid">
            <div class="row"> 
             <div class="col-sm-12">
              <div class="card card-#F1F2F2">
                <div class="card-header"> 
                  <div class="card-body">             
                  <table id="listPacientes" class="display">
                    <thead class="btn-info">
                      <tr>
                        <th>Acciones</th>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>Sexo </th>
                        <th>Edad </th>
                        <th>Fecha de nacimiento</th>
                        <th>Estado civíl</th>
                        <th>Tipo de documento</th>
                        <th>Número de documento</th>
                        <th>Celular</th>
                        <th>Domicílio</th>
                        <th>Correo</th>
                        <th>Ocupación</th>
                        <th>Alérgia</th>
                        <th>Intervenciones quirúrgicas</th>
                        <th>Vacunas</th>
                        
                      </tr>
                    </thead>
                  </table>
                </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 4.0
    </div>
    <strong>Copyright &copy; 2022 <a href="https://faceboock.com">Alain Peralta</a>.</strong> All rights reserved.
  </footer>


 <?php include("vistas/pie.php"); ?>



<script type="text/javascript">
  
  

 /* CONEXION A BD */ 
  
$(document).ready(function(){


TablePacientes= $('#listPacientes').DataTable( {
        "ajax":{
            type: 'get',
            url: "http://api.miapp.com/api/v1/paciente",
            dataSrc: 'data',
            cache: true
            },
        columns: [
            {
              targets: 0,

                render: function (data, type, row) {
                  /* return "<button>Editar</button> <button onclick=\"ConfirmarEliminarProducto('"+row.dni+"')\"></i>Eliminar</button>"; */
                    return "<button onclick=\"EditarPaciente('"+row.id+"')\" data-toggle='modal' data-target='#modal-default' class='btn btn-primary'><i class='fas fa-pencil-alt'></i></button> <button onclick=\"ConfirmarEliminarPaciente('"+row.id+"')\" data-toggle='modal' data-target='#modal-default' class='btn btn-danger' ><i class='fas fa-trash'></i></button>"; 
                },
                
            },
            
            { data: 'apellido' },
            { data: 'nombre' },
            { data: 'sexo' },
            { data: 'edad' },
            { data: 'fech_nac' },
            { data: 'estado_civil' },
            { data: 'tipo_documento' },
            { data: 'dni' },
            { data: 'celular' },
            { data: 'domicilio' },
            { data: 'correo' },
            { data: 'ocupacion' },
            { data: 'alergias' },
            { data: 'intervencion_quirurgicas' },
            { data: 'vacunas' },
            

        ],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],

    });

});

/*Funcion Para Cargar el modal y hacer la conexion en otro form */
function reloadTablePacientes()
{
  TablePacientes.ajax.reload();
}

function ConfirmarEliminarPaciente(id)
{
  $("#modalContainer1").load("modalEliminarPaciente.php?v=1.0",function(){
    
    $("#frm_id").val(id);
    $('#mdlEliminarPaciente').modal({
        show: true
    }); 

  });
}

function EditarPaciente(id)
{
  $("#modalContainer1").load("modalEditarPaciente.php",function(){
    
    $.ajax(
      {

        method:"get",
        url:"http://api.miapp.com/api/v1/paciente/"+id
        }
      )
      .done(function(response){
        
        $("#txtID").val(response.data.id);
        $("#validationTooltip01").val(response.data.apellido);
        $("#validationTooltip02").val(response.data.nombre);
        $("#validationTooltip03").val(response.data.sexo);
        $("#validationTooltip04").val(response.data.edad);
        $("#validationTooltip05").val(response.data.fech_nac);
        $("#validationTooltip06").val(response.data.estado_civil);
        $("#validationTooltip07").val(response.data.tipo_documento);
        $("#validationTooltip08").val(response.data.dni);
        $("#validationTooltip09").val(response.data.celular);
        $("#validationTooltip10").val(response.data.domicilio);
        $("#validationTooltip11").val(response.data.correo);
        $("#validationTooltip12").val(response.data.ocupacion);
        $("#validationTooltip13").val(response.data.alergias);
        $("#validationTooltip14").val(response.data.intervencion_quirurgicas);
        $("#validationTooltip15").val(response.data.vacunas);



        $('#mdlEditarPaciente').modal({
        show: true
        });

        
    }); 

  });
}


</script>


</body>
</html>
