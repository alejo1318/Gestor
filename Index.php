<?php

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="lib/chartist/chartist.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="Css/bracket.css">
    <title>Gestor</title>
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
        
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="br-mainpanel">
          <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5">Bienvenido</h4>
            <p class="mg-b-0">Do big things with Bracket, the responsive bootstrap 4 admin template.</p>
          </div><!-- d-flex -->
          <div class="pd-30">
          <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=UTC&showNav=1&showTitle=0&showPrint=0&showDate=1&src=YWxlam8ub3J0aXoxMzE4QGdtYWlsLmNvbQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZXMuY28jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
          
          </div>
          <div class="br-pagebody mg-t-5 pd-x-30">
            <div class="row row-sm">
              <div class="col-sm-6 col-xl-3">
                <div class="bg-teal rounded overflow-hidden">
                  <div class="pd-25 d-flex align-items-center">
                    <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                    <div class="mg-l-20">
                      <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today's Visits</p>
                      <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                      <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span>
                    </div>
                  </div>
                </div>
              </div><!-- col-3 -->
          </div><!-- br-pagebody -->
          <footer class="br-footer">
            <div class="footer-left">
              <div class="mg-b-2">Copyright &copy; 2017. Bracket. All Rights Reserved.</div>
              <div>Attentively and carefully made by ThemePixels.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
              <span class="tx-uppercase mg-r-10">Share:</span>
              <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
              <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
            </div>
          </footer>
        </div><!-- br-mainpanel -->
        <!-- ########## END: MAIN PANEL ########## -->
    
        <script src="lib/jquery/jquery.js"></script>
        <script src="lib/popper.js/popper.js"></script>
        <script src="lib/bootstrap/bootstrap.js"></script>
        <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
        <script src="lib/moment/moment.js"></script>
        <script src="lib/jquery-ui/jquery-ui.js"></script>
        <script src="lib/jquery-switchbutton/jquery.switchButton.js"></script>
        <script src="lib/peity/jquery.peity.js"></script>
        <script src="lib/chartist/chartist.js"></script>
        <script src="lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
        <script src="lib/d3/d3.js"></script>
        <script src="lib/rickshaw/rickshaw.min.js"></script>
    
    
        <script src="js/bracket.js"></script>
        <script src="js/ResizeSensor.js"></script>
        <script src="js/dashboard.js"></script>
        
</body>
</html>