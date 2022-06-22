<?php include("vistas/cabecera.php"); ?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <!---Encabezado del dashboard -->
          <h1>Atencion</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section> 
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <div class="card card-#F1F2F2">
            <div class="card-header">
              <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-3 mb-3">
                    <label for="validationTooltip01">Fecha</label>
                    <input type="date" class="form-control" id="validationTooltip01" placeholder="" autocomplete="off" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Registrador</label>
                    <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese datos" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Servicio</label>
                    <select id="inputState" class="form-control">
                      <option selected>Consulta médica general $/.30</option>
                      <option>Tratamiento de hemodiálisis S/.120</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Especialista:</label>
                    <select id="inputState" class="form-control">
                      <option selected>Suarez Molina Guillermo</option>
                      <option>Sosa Gutierres Patricia</option>
                      <option>Vallejos Fernandes Paul Rodrigo</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip04">Paciente</label>
                    <input type="text" class="form-control" id="validationTooltip04" placeholder="Ingrese nombres y apellidos" required>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationTooltip02">DNI</label>
                    <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese dni del paciente" required>
                  </div>
                  <div class="col-md-2 mb-3">
                    <label for="validationTooltip02">Edad</label>
                    <input type="number" class="form-control" id="validationTooltip02" placeholder="Ingrese edad del paciente" required>
                  </div>
                  <div class="col-md-2 mb-3">
                    <label for="validationTooltip02">Costo</label>
                    <input type="number" class="form-control" id="validationTooltip02" placeholder="Ingrese el costo S/..." required>
                  </div>
                  
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Estado</label>
                    <input type="text" class="form-control" id="validationTooltip02" placeholder="Ingrese estado actual" required>
                  </div>  
                </div>
                <div>
                  <button class="btn btn-success mr-2" type="submit" href="home.php">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>  
              </div>
              </form>
            </div>  
          </div>
        </div>
      </div>
    </div>  
  </section>
</div>

<?php include("vistas/pie.php"); ?>

