<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<title>FIM-168</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/flicker1.js"></script>
    <script src="assets/js/flicker2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="shortcut icon" href="logo.png" />
	<style type="text/css">
.blink_text {

animation:3s blinker linear infinite;
-webkit-animation:1s blinker linear infinite;
-moz-animation:1s blinker linear infinite;

 color: white;
}

@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@-webkit-keyframes blinker {  
 0% { opacity: 0.5; }
 50% { opacity: 1.0; }
 100% { opacity: 1.0; }
 }

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }
 </style>


</head>
<body class="page-body">


	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
		
			<div class="sidebar-menu-inner">
				
				<header class="logo-env">
		
					<!-- logo -->
					<div class="logo">
						<a href="index.html" class="logo-expanded">
							<img src="assets/images/sat.png" width="80" alt="" id="logo" />
						</a>
		
						<a href="index.html" class="logo-collapsed">
                            <img src="assets/images/sat.png" width="40" alt="" id="logo2" />
						</a>
					</div>
		
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
		
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
		
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					
		
					
				</header>
				
				
						
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li class="active opened">
						<a href="index.html">
							<i class="linecons-cog"></i>
							<span class="title">Picosatélite en directo</span>
							<span class="label label-pink pull-right hidden-collapsed"><span class="blink_text">LIVE</span></span>
						</a>
						<ul>
							<li>
								<a href="dashboard-1.php">
									<span >Datos en tiempo real</span>
								</a>

							</li>


							<li>
								<a href="dashboard-2.php">
									<span class="title">Gráficas en tiempo real</span>
									<span class="label label-purple pull-right hidden-collapsed">¡Nuevo!</span>
								</a>
							</li>

							<li class="active">
								<a href="dashboard-3.php">
									<span class="title">Ubicación en tiempo real</span>
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#">
							<i class="linecons-database"></i>
							<span class="title">Bases de datos</span>
						</a>
						<ul>
							<li>
								<a href="dashboard-4.php">
									<span class="title">Consulta de registros</span>
								</a>
							</li>
							<li>
								<a href="dashboard-5.php">
									<span class="title">Registros históricos</span>
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#">
							<i class="linecons-globe"></i>
							<span class="title">Acerca de FIM168</span>
						</a>
						<ul>
							
							<li>
								<a href="dashboard-6.html">
									<span class="title">Modelo 3D FIM168</span>
									<span class="label label-purple pull-right hidden-collapsed">¡Nuevo!</span>
								</a>
							</li>
							<li>
									<a href="http://www.fim168.hol.es" target="_blank">Documentación</span>
								</a>
							</li>
							<li>
								
								<a href="https://github.com/JonathanChavezTamales/FIM168" target="_blank">Github</span>
								</a>
								
							</li>
							<li>
								<a href="dashboard-8.html">Simulaciones</span>
								</a>
							</li>
							
							

							<li>
									<a href="http://cbtis168.edu.mx/" target="_blank">Pagina oficial del CBTIS 168</span>
								</a>
							</li>

						</ul>
					</li>
					
				</ul>
				
			</div>
		
		</div>
	
		<div class="main-content">
					
			<nav class="navbar user-info-navbar"  role="navigation"><!-- User Info, Notifications and Menu Bar -->
			
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
			
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>

							<li>
								<a href="../index.html">
									<span class="title">INICIO</span>
								</a>
							</li>
			
					
				
				
					
				</ul>
			
			
				<!-- Right links for user info navbar -->
				
			</nav>

			 <center><div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div id="mapa" style="width:800px;height:600px;"></div><br>
          <?php
            $con = mysqli_connect("localhost", "root", "", "CanSATService") or die("Error en la conexión.");
            $query = "select * from datos order by id desc limit 1";
            $query2 = "select * from datos";
            $query3 = "select * from datos order by id asc limit 1";
            $query4 = "select * from datos order by Presion asc limit 1";
            $resultado2 = mysqli_query($con,$query);
            $resultado = mysqli_query($con,$query2);
            $resultado3 = mysqli_query($con,$query3);
            $resultado4 = mysqli_query($con,$query4);

          ?>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAIcu3JWQ4sRNDeHwczUosnEuPTQcILhs"></script>

          <script type="text/javascript">
            var bcn = new google.maps.LatLng(21.934635,-102.240048);
            var mapOptions = {
                center: bcn,
                zoom: 11,
                mapTypeId: google.maps.MapTypeId.ROADMAP
              };
            map = new google.maps.Map(document.getElementById('mapa'), mapOptions);

          </script>
            <?php
              $i2=1;
              while ($data = mysqli_fetch_assoc($resultado)) {
            ?>

            
            <script type="text/javascript">
              var marker<?php echo $i2;?> = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $data['Latitud']; ?>, <?php echo $data['Longitud']; ?>),
                map: map,
                icon: 'img/icono.jpg',
              });

 
              google.maps.event.addListener(marker<?php echo $i2;?>, 'click', function() {
              });
            </script>

            <?php
                $i2++;
              }
              mysqli_close($con);
              ?>

            <?php
              $i=1;
              while ($data2 = mysqli_fetch_assoc($resultado2)) {
            ?>




            <script type="text/javascript">
              var marker<?php echo $i;?> = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $data2['Latitud']; ?>, <?php echo $data2['Longitud']; ?>),
                map: map,
                icon: 'img/icono1.png', 
              });

 
              google.maps.event.addListener(marker<?php echo $i;?>, 'click', function() {
                infowindow<?php echo $i;?>.open(map,marker<?php echo $i;?>);
              });
            </script>

            <?php
                $i++;
              }
            ?>

            <?php
              $i3=1;
              while ($data3 = mysqli_fetch_assoc($resultado3)) {
            ?>


            <script type="text/javascript">
              var marker<?php echo $i3;?> = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $data3['Latitud']; ?>, <?php echo $data3['Longitud']; ?>),
                map: map,
                icon: 'img/rocket-icon.png', 
              });

 
              google.maps.event.addListener(marker<?php echo $i3;?>, 'click', function() {
                infowindow<?php echo $i3;?>.open(map,marker<?php echo $i3;?>);
              });
            </script>

            <?php
                $i3++;
              }
            ?>

            <?php
              $i4=1;
              while ($data4 = mysqli_fetch_assoc($resultado4)) {
            ?>


            <script type="text/javascript">
              var marker<?php echo $i4;?> = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $data4['Latitud']; ?>, <?php echo $data4['Longitud']; ?>),
                map: map,
                icon: 'img/explosion.png', 
              });

 
              google.maps.event.addListener(marker<?php echo $i4;?>, 'click', function() {
                infowindow<?php echo $i4;?>.open(map,marker<?php echo $i4;?>);
              });
            </script>

            <?php
                $i4++;
              }
            ?>


        </div>
      </div>
    </div></center>

	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/xenon-widgets.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
	<script src="assets/js/toastr/toastr.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>

</body>
</html>