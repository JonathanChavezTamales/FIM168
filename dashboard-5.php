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
					<li>
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

							<li>
								<a href="dashboard-3.php">
									<span class="title">Ubicación en tiempo real</span>
								</a>
							</li>
						</ul>
					</li>

					<li class="active opened">
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
							<li class="active">
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





			
			<?php
		$link = mysqli_connect("localhost", "root", "");
		mysqli_select_db($link, "CanSATService");
		$result = mysqli_query($link, "SELECT * FROM datos ORDER BY HoraEvent ASC LIMIT 1");
		$result0 = mysqli_query($link, "SELECT * FROM datos ORDER BY HoraEvent DESC LIMIT 1");
		$result1 = mysqli_query($link, "SELECT * FROM datos ORDER BY Temp_1 DESC LIMIT 1");
		$result2 = mysqli_query($link, "SELECT * FROM datos ORDER BY Temp_1 ASC LIMIT 1");
		$result3 = mysqli_query($link, "SELECT * FROM datos ORDER BY Temp_2 DESC LIMIT 1");
		$result4 = mysqli_query($link, "SELECT * FROM datos ORDER BY Temp_2 ASC LIMIT 1");
		$result5 = mysqli_query($link, "SELECT * FROM datos ORDER BY Humedad DESC LIMIT 1");
		$result6 = mysqli_query($link, "SELECT * FROM datos WHERE Humedad>0 ORDER BY Humedad ASC LIMIT 1");
		$result7 = mysqli_query($link, "SELECT * FROM datos ORDER BY Presion DESC LIMIT 1");
		$result8 = mysqli_query($link, "SELECT * FROM datos ORDER BY Presion ASC LIMIT 1");
		$result9 = mysqli_query($link, "SELECT * FROM datos ORDER BY AltPress DESC LIMIT 1");
		$result10 = mysqli_query($link, "SELECT * FROM datos ORDER BY AltPress ASC LIMIT 1");
		$result11 = mysqli_query($link, "SELECT * FROM datos ORDER BY Altitud DESC LIMIT 1");
		$result12 = mysqli_query($link, "SELECT * FROM datos ORDER BY Altitud ASC LIMIT 1");

		mysqli_data_seek ($result, 0);
		mysqli_data_seek ($result0, 0);
		mysqli_data_seek ($result1, 0);
		mysqli_data_seek ($result2, 0);
		mysqli_data_seek ($result3, 0);
		mysqli_data_seek ($result4, 0);
		mysqli_data_seek ($result5, 0);
		mysqli_data_seek ($result6, 0);
		mysqli_data_seek ($result7, 0);
		mysqli_data_seek ($result8, 0);
		mysqli_data_seek ($result9, 0);
		mysqli_data_seek ($result10, 0);
		mysqli_data_seek ($result11, 0);
		mysqli_data_seek ($result12, 0);


		$extraido = mysqli_fetch_array($result);
		$extraido0 = mysqli_fetch_array($result0);
		$extraido1 = mysqli_fetch_array($result1);
		$extraido2 = mysqli_fetch_array($result2);
		$extraido3 = mysqli_fetch_array($result3);
		$extraido4 = mysqli_fetch_array($result4);
		$extraido5 = mysqli_fetch_array($result5);
		$extraido6 = mysqli_fetch_array($result6);
		$extraido7 = mysqli_fetch_array($result7);
		$extraido8 = mysqli_fetch_array($result8);
		$extraido9 = mysqli_fetch_array($result9);
		$extraido10 = mysqli_fetch_array($result10);
		$extraido11 = mysqli_fetch_array($result11);
		$extraido12 = mysqli_fetch_array($result12);



		?>


		<h3>Máximos y mínimos</h3>
		<?php
		echo "- Hora de lanzamiento: 									".$extraido['HoraEvent']."<br/>";
		echo "- Hora de recuperación: 									".$extraido0['HoraEvent']."<br/>";
		echo "- Temperatura externa máxima registrada: 				".$extraido1['Temp_1']." °C<br/>";
		echo "- Temperatura externa minima registrada: 				".$extraido2['Temp_1']." °C<br/>";
		echo "- Temperatura interna máxima registrada: 				".$extraido3['Temp_2']." °C<br/>";
		echo "- Temperatura interna minima registrada: 				".$extraido4['Temp_2']." °C<br/>";
		echo "- Humedad relativa máxima registrada: 				".$extraido5['Humedad']."%<br/>";
		echo "- Humedad relativa mínima registrada: 				".$extraido6['Humedad']."%<br/>";
		echo "- Presion barométrica máxima registrada:				".$extraido7['Presion']." hPa<br/>";
		echo "- Presion barométrica mínima registrada: 				".$extraido8['Presion']." hPa<br/>";
		echo "- Altitud en base a presion máxima registrada: 		".$extraido9['AltPress']." m<br/>";
		echo "- Altitud en base a presion mínima registrada: 		".$extraido10['AltPress']." m<br/>";
		echo "- Altitud en base a GPS máxima registrada:			".$extraido11['Altitud']." m<br/>";
		echo "- Altitud en base a GPS mínima registrada: 			".$extraido12['Altitud']." m<br/>";
		?>

		<h3>Condiciones al despegar</h3>
		<?php
		echo "- Hora lanzamiento: 									".$extraido['HoraEvent']."<br/>";
		echo "- Temperatura externa: 								".$extraido['Temp_1']."<br/>";
		echo "- Temperatura interna: 								".$extraido['Temp_2']."<br/>";
		echo "- Humedad relativa: 									".$extraido['Humedad']."<br/>";
		echo "- Presión barométrica: 								".$extraido['Presion']."<br/>";
		echo "- Altitud en base a presión barométrica: 				".$extraido['AltPress']."<br/>";
		echo "- Altitud en base a GPS: 								".$extraido['Altitud']."<br/>";
		?>

		<h3>Condiciones al aterrizar</h3>
		<?php
		echo "- Hora lanzamiento: 									".$extraido0['HoraEvent']."<br/>";
		echo "- Temperatura externa: 								".$extraido0['Temp_1']."<br/>";
		echo "- Temperatura interna: 								".$extraido0['Temp_2']."<br/>";
		echo "- Humedad relativa: 									".$extraido0['Humedad']."<br/>";
		echo "- Presión barométrica: 								".$extraido0['Presion']."<br/>";
		echo "- Altitud en base a presión barométrica: 				".$extraido0['AltPress']."<br/>";
		echo "- Altitud en base a GPS: 								".$extraido0['Altitud']."<br/><br>";
		?>

		<?php

		mysqli_free_result($result);
		mysqli_close($link);
		?>



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