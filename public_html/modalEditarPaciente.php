<!-- Main Modal -->

  
<div class="modal fade" id="mdlEditarPaciente">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editar paciente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation">
          <input type="hidden" name="txtID" id="txtID">
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="validationTooltip01">Apellidos</label>
              <input type="text" name="validationTooltip01" class="form-control" id="validationTooltip01" placeholder="Ingrese su apellido" autocomplete="off">
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationTooltip02">Nombres</label>
              <input type="text" name="validationTooltip02" class="form-control" id="validationTooltip02" placeholder="Ingrese su nombre">
            </div>
            
            <div class="form-group col-md-2">
              <label for="validationTooltip03">Sexo</label>
              <select id="validationTooltip03" class="form-control">
                <option selected>Masculino</option>
                <option>Femenino</option>
                <option>Otros</option>
              </select>
            </div>
            <div class="col-md-2 mb-4">
              <label for="validationTooltip04">Edad</label>
              <input type="number" name="validationTooltip04" class="form-control" id="validationTooltip04" placeholder="Ingrese la edad">
            </div>

            <div class="col-md-2 mb-3">
              <label for="validationTooltip05">Fecha de Nacimiento</label>
              <input type="date" name="validationTooltip05" class="form-control" id="validationTooltip05" placeholder="State">
            </div>
            <div class="col-md-2 mb-4">
              <label for="validationTooltip06">Estado Civíl</label>
              <select id="validationTooltip06" class="form-control">
                <option selected>Casado</option>
                <option>Soltero</option>
                <option>Separado</option>
                <option>viudo</option>
              </select>
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationTooltip07">Tipo de Documento</label>
              <select id="validationTooltip07" class="form-control">
                <option selected>Dni</option>
                <option>Pasaporte</option>
                <option>Ruc</option>
                <option>Cédula</option>
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationTooltip08">Número de Documento</label>
              <input type="text" name="validationTooltip08" class="form-control" id="validationTooltip08" placeholder="Ingrese los dígitos">
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationTooltip09">Teléfono</label>
              <input type="text" name="validationTooltip09" class="form-control" id="validationTooltip09" placeholder="Ingrese número telefónico">
              </div>
            <div class="col-md-4 mb-3">
              <label for="validationTooltip10">Domicilio</label>
              <input type="text" name="validationTooltip10" class="form-control" id="validationTooltip10" placeholder="Ingrese el domicilio">
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationTooltip11">Correo Electrónico</label>
              <input type="text" name="validationTooltip11" class="form-control" id="validationTooltip11" placeholder="Ingrese email">
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationTooltip12">Ocupación</label>
              <input type="text" name="validationTooltip12" class="form-control" id="validationTooltip12" placeholder="Ingrese la ocupación">
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationTooltip13">Alérgia</label>
              <input type="text" name="validationTooltip13" class="form-control" id="validationTooltip13" placeholder="Ingrese las alérgias">
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationTooltip14">Intervenciones Quirúrgicas</label>
              <input type="text" name="validationTooltip14" class="form-control" id="validationTooltip14" placeholder="Ingrese las intervenciones quirúrgicas">
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationTooltip15">Vacunas Completas</label>
              <select id="validationTooltip15" class="form-control">
                <option selected>Si</option>
                <option>No</option>
              </select>
            </div>                      
          </div>
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>
          <!-- /.modal-content -->
  </div>
        <!-- /.modal-dialog -->
</div>
      <!-- /.modal -->

<script type="text/javascript">
  
$("#nuevoPaciente").submit(function(e){
    e.preventDefault();

  });


    $('#nuevoPaciente').validate({
    rules: {
      validationTooltip01: {
        required: true,      
      },
      validationTooltip02: {
        required: true,
      },
      validationTooltip04: {
        required: true,
      },
      validationTooltip05: {
        required: true,
      },
      validationTooltip08: {
        required: true,
      },
      validationTooltip09: {
        required: true,     
      },
      validationTooltip10: {
        required: true,    
      },
      validationTooltip11: {
        required: true,
      },
      validationTooltip12: {
        required: true,      
      },
      validationTooltip13: {
        required: true,
      }, 
      validationTooltip14: {
        required: true,
      },
          
    },

    messages: {
      validationTooltip01: {
        required: "Necesita ingresar el apellido completo"
      },
      validationTooltip02: {
        required: "Necesita ingresar el nombre completo",
      },
      validationTooltip04: {
        required: "Seleccione fecha de nacimiento",
      },    
      validationTooltip05: {
        required: "Necesita ingresar la edad",
      }, 
      validationTooltip08: {
         required: "Necesita ingresar el documento",
      },     
      validationTooltip09: {
        required: "Necesita ingresar el documento",
      },
      validationTooltip10: {
        required: "Necesita ingresar el número telefónico",
      },
      validationTooltip11: {
        required: "Necesita ingresar el domicilio",
      },
      validationTooltip12: {
        required: "Necesita ingresar la ocupación",
      },
      validationTooltip13: {
        required: "Necesita ingresar las alergias",
      },
      validationTooltip14: {
        required: "Necesita ingresar intervenciones quirúrgicas",
      },

      
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },

    submitHandler : function()
    {
      $.ajax(
      {
        method:"put",
        data:
          {
            id:$("#txtID").val(),
            apellido:$("#validationTooltip01").val(),
            nombre:$("#validationTooltip02").val(),           
            sexo:$("#validationTooltip03").val(),
            edad:$("#validationTooltip04").val(),         
            fech_nac:$("#validationTooltip05").val(),
            estado_civil:$("#validationTooltip06").val(),
            tipo_documento:$("#validationTooltip07").val(),
            dni:$("#validationTooltip08").val(),
            celular:$("#validationTooltip09").val(),
            domicilio:$("#validationTooltip10").val(),
            correo:$("#validationTooltip11").val(),
            ocupacion:$("#validationTooltip12").val(),
            alergias:$("#validationTooltip13").val(),
            intervencion_quirurgicas:$("#validationTooltip14").val(),
            vacunas:$("#validationTooltip15").val()
          },
            url:"http://api.miapp.com/api/v1/paciente"
        }
      )
      .done(function(response){
        console.log("la informacion del paciente se edito correctamente");      
        /* Línea para cerrar modal una vez ingresado los datos */
        
        reloadTablePacientes();
        $('#mdlEditarPaciente').modal('hide');
      });
    }
  });


</script>