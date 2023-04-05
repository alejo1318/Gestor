<?php

?>
<!DOCTYPE html>
<html lang="es">
  <head>


    <title>Formulario</title>
    <?php require_once("../Gestor/HTML/main_head.php");?>
    
</head>
<body>
        <!-- ########## LEFT PANEL ########## -->
    <?php require_once("../Gestor/HTML/left_panel.php");?>
        <!-- ########## End LEFT PANEL ########## -->
        <!-- ########## START: HEAD PANEL ########## -->
    
    <div class="br-header">
        <div class="br-header-left">
          <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
          <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div><!-- br-header-left -->
        <div class="br-header-right">
          <nav class="nav">
            <div class="dropdown">
              
              <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                
                <span class="logged-name hidden-md-down">Usuario</span>
                <i class="icon ion-ios-person"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-header wd-200">
                <ul class="list-unstyled user-profile-nav">
                  <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                  <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                  <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                  <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                  <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                  <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
                </ul>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </nav>
        </div><!-- br-header-right -->
    </div><!-- br-header -->
      <!-- ########## END: HEAD PANEL ########## -->  
      <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
          <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="Index.php">Inicio</a>
            <span class="breadcrumb-item active" >Pacientes</span>
            <a class="breadcrumb-item active" href="Pacientes.php">Nuevo</a>
            <span class="breadcrumb-item active">Adulto</span>

          </nav>
        </div><!-- br-pageheader -->
            <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
              <h4 class="tx-gray-800 mg-b-5">Nuevo Paciente</h4>
            </div>
            <div class="br-pagebody d-flex justify-content-center">
                <div class="br-section-wrapper ">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Fomulario de registro adulto</h6>
                    <div class="row mg-t-30 ">
                        <div class="col-xl-12 ">
                            <div class="form-layout form-layout-4">
                                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Left Label Alignment</h6>
                                <p class="mg-b-30 tx-gray-600">A basic form where labels are aligned in left.</p>
                                <div class="row">
                                  <label class="col-sm-4 form-control-label">Nombre: </label>
                                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" placeholder="Enter firstname">
                                  </div>
                                </div><!-- row -->
                                <div class="row mg-t-20">
                                  <label class="col-sm-4 form-control-label">Apellido</label>
                                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" placeholder="Enter lastname">
                                  </div>
                                </div>
                                <div class="row mg-t-20">
                                  <label class="col-sm-4 form-control-label">Documento</label>
                                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" placeholder="Enter lastname">
                                  </div>
                                </div>
                                <div class="row mg-t-20">
                                  <label class="col-sm-4 form-control-label">Edad</label>
                                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" placeholder="Enter lastname">
                                  </div>
                                </div>
                                <div class="row mg-t-20">
                                  <label class="col-sm-4 form-control-label">Telefono</label>
                                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                  </div>
                                </div>
                                <div class="row mg-t-20">
                                  <label class="col-sm-4 form-control-label">Profesional</label>
                                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                    <input type="text" class="form-control" placeholder="Enter lastname">
                                  </div>
                                </div>
                                <div class="form-layout-footer mg-t-30  text-center">
                                  <button class="btn btn-info">REgistrar</button>
                                  <button class="btn btn-secondary">Cancelar</button>
                                </div><!-- form-layout-footer -->
                            </div><!-- form-layout -->
                        </div><!-- col-6 -->
                  </div><!-- row -->
                </div><!-- br-section-wrapper -->
            </div><!-- br-pagebody -->
        </div><!-- br-mainpanel -->
    <!-- ########## START: HEAD PANEL ########## -->
   
  


    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="lib/moment/moment.js"></script>
    <script src="lib/jquery-ui/jquery-ui.js"></script>
    <script src="lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="lib/peity/jquery.peity.js"></script>
    <script src="js/bracket.js"></script>
  </body>
</html>
