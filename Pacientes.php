<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Pacientes</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="./Css/bracket.css">
  </head>
  <body>
    <?php require_once("../Gestor/HTML/left_panel.php");?>
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
          <a class="breadcrumb-item" href="index.php">Inicio</a>
          <span class="breadcrumb-item active">Pacientes</span>
          <span class="breadcrumb-item active">Nuevo</span>
          

        </nav>
      </div><!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Nuevo Paciente</h4>
        <p class="mg-b-0">Introducing Bracket apps &amp; pages, the most handsome admin template of all time.</p>
      </div>
        <div class="br-pagebody pd-x-20 pd-sm-x-30 pd-b-20">
          <div class="row">
            <div class="col-sm-6 col-xl-3">
              <div class="br-section-wrapper pd-10">
                <a href="Formulario_PA.php"><img src="img/screen20.png" class="img-fluid" alt=""></a>
                <a href="Formulario_PA.php" class="d-block mg-t-10 tx-gray-600 hover-info tx-center">Adulto</a>
              </div><!-- br-section-wrapper -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-30 mg-sm-t-0">
              <div class="br-section-wrapper pd-10">
                <a href="Form_menores.php"><img src="img/screen5.png" class="img-fluid" alt=""></a>
                <a href="Form_menores.php" class="d-block mg-t-10 tx-gray-600 hover-info tx-center">Menores</a>
              </div><!-- br-section-wrapper -->
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-30 mg-xl-t-0">
              <div class="br-section-wrapper pd-10">
                <a href="page-contacts.html"><img src="img/screen13.png" class="img-fluid" alt=""></a>
                <a href="page-contacts.html" class="d-block mg-t-10 tx-gray-600 hover-info tx-center">Parejas</a>
              </div><!-- br-section-wrapper -->
            </div><!-- col-3 -->
          </div><!-- row -->
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
