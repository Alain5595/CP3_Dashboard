<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Nuevo Usuario</title>
        
        <link rel="stylesheet" type="text/css" href="count.new.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">       
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">        
    </head>

    <body class="container-login">
      <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
          <main>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                      <h3 class="login-form-title text-center my-4m ">Crear Cuenta</h3>
                    </div>
                    <div class="card-body">
                      <!-- inicio de formulario -->
                      <form action="" method="POST" id="formLogin2">
                        <!-- inicio nombres y apellidos -->
                        <div class="row mb-3">
                          <div class="col-4">
                            <div class="form-floating mb-3 mb-md-0">
                              <input
                                
                                autocomplete="off"
                                class="form-control"
                                id="nombres"
                                name="nombres"
                                type="text"
                                placeholder="Ingrese su nombre"
                              />
                              <label for="nombres">Nombres</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-floating mb-3 mb-md-0">
                              <input
                                
                                autocomplete="off"
                                class="form-control"
                                id="apellidos"
                                name="apellidos"
                                type="text"
                                placeholder="Ingrese su apellido paterno"
                              />
                              <label for="apellidos">Apellidos</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-floating mb-3">
                              <input
                                
                                autocomplete="off"
                                class="form-control"
                                id="email"
                                name="email"
                                type="email"
                                placeholder="name@example.com"
                              />
                              
                              <label for="email">Correo Eléctronico</label>
                            </div>
                          </div>
                        </div>
                        
                        <!-- fin nombres y apellidos -->
                        <div class="row">
                          <div class="col-4">
                            <div class="form-floating mb-3 mb-md-0">
                              <input
                                
                                autocomplete="off"
                                class="form-control"
                                id="usuarios"
                                name="usuarios"
                                type="text"
                                placeholder="Ingrese su Nombre de Usuario"
                              />
                              <label for="usuarios">Nombre de Usuario</label>
                            </div>
                          </div>
                        
                          <div class="col-4">
                            <div class="form-floating mb-3 mb-md-0">
                              <input
                                
                                autocomplete="off"
                                class="form-control"
                                id="password"
                                name="password"
                                type="password"
                                placeholder="Crear contraseña"
                              />
                              <label for="password">Contraseña</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-floating mb-3 mb-md-0">
                              <input
                                
                                autocomplete="off"
                                class="form-control"
                                id="confirmar_password"
                                name="confirmar_password"
                                type="password"
                                placeholder="Confirmar contraseña"
                              />
                              <label for="confirmar_password"
                                >Confirmar Contraseña</label
                              >
                            </div>
                            <label id="mensaje_password" class="text-danger d-none">Los password son diferentes</label>
                          </div>
                        </div>
                        </br>
                        <div class="row">
                          <div class="col-12">
                            <div class="text-center">
                              <button id="btn_crear_usuario" name="btn_crear_usuario" class="btn btn-primary btn-ld">
                                <i class="fas fa-save"></i> Crear Usuario
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                      <!-- fin de formulario -->
                    </div>
                    <div class="card-footer text-center py-3">
                      <div class="small">
                        <a href="index.php">¿Tienes una cuenta? Ir a iniciar sesión</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
    
    <script src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>    
     <script src="assets/bootstrap/js/bootstrap.min.js"></script>      
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="cod_2.js"></script>
  </body>
</html>


    
