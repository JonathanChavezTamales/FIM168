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
							<li class="active">
								<a href="#">
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
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
setInterval( function(){

$('#listado').load('Conexion.php');

},1000)
</script>


<CENTER><div id="listado">
			
			<?php
		$link = mysqli_connect("localhost", "root", "");
		mysqli_select_db($link, "CanSATService");
		$result = mysqli_query($link, "SELECT * FROM datos ORDER BY ID DESC LIMIT 1");

		mysqli_data_seek ($result, 0);
		$extraido = mysqli_fetch_array($result);
		echo "VARIABLE QUE LLEGAN DEL SATELLITE </br>";
		echo "- Numero de dato: ".$extraido['ID']."<br/>";
		echo "- Hora de llegada: ".$extraido['HoraEvent']."<br/>";
		echo "- Temperatura externa: ".$extraido['Temp_1']." Grados Centigrados<br/>";
		echo "- Temperatura interna: ".$extraido['Temp_2']." Grados Centigrados<br/>";
		echo "- Humedad Relativa: ".$extraido['Humedad']."<br/>";
		echo "- Presion: ".$extraido['Presion']." hPa<br/>";
		echo "- Latitud: ".$extraido['Latitud']."<br/>";
		echo "- Longitud: ".$extraido['Longitud']."<br/>";
		echo "- Altitud en base a presion: ".$extraido['AltPress']." Metros<br/>";
		echo "- Altitud en base a GPS: ".$extraido['Altitud']." Metros<br/>";
		echo "- mx: ".$extraido['mx']."<br/>";
		echo "- my: ".$extraido['my']."<br/>";
		echo "- mz: ".$extraido['mz']."<br/>";
		echo "- ax: ".$extraido['ax']."<br/>";
		echo "- ay: ".$extraido['ay']."<br/>";
		echo "- az: ".$extraido['az']."<br/>";
		echo "- gx: ".$extraido['gx']."<br/>";
		echo "- gy: ".$extraido['gy']."<br/>";
		echo "- gz: ".$extraido['gz']."<br/>";

		$masa = 236;
		$gravedad = 9.8;
		$acel = 5;

		$diff = time() - strtotime($extraido['HoraEvent']);

		//Procesos formula uno velocidad
         $resta = $extraido['Altitud']-$extraido['Presion'];
         $Velocidad = $resta / $diff;
         //Procesos formula dos velocidad
         $multi = $masa*$acel;
         $Velocidad_2 = $multi/$gravedad;


         //Velocidad de desplazamiento
         $x = 21.854635;
         $y = -102.290048;
         $factor1 = $extraido['Latitud'] - $x;
         $al21 = pow($factor1,2);
         $factor2 = $extraido['Longitud'] - $y;
         $al22 = pow($factor2,2);
         $sumd = $al21 + $al22;
         $distancia = sqrt($sumd);
         $velDist = $distancia/$diff;

         //Temperaturas
         $fext = $extraido['Temp_1'] * 1.8 + 32;
         $fint = $extraido['Temp_2'] * 1.8 + 32;
         $kext = $extraido['Temp_1'] + 273.15;
         $kint = $extraido['Temp_2'] + 273.15;

        echo "</br>"; 
        echo "VELOCIADES </br>";
        echo "- Velocidad ascenso/ decenso por formula uno: ".$Velocidad. " m/s</br>";
        echo "- Velocidad ascenso/ decenso por formula dos: ".$Velocidad_2. " m/s</br>";
        echo "- Velocidad de desplazamiento: ".$velDist. " m/s</br>";
        echo "</br>";
        echo "TEMPERATURAS EN DISTINTAS UNIDADES DE MEDIDA</br>";
        echo "Temperatura interna en Fahrenheit: ".$fint. " F </br>";
        echo "Temperatura interna en Kelvin: ".$kint. " K </br>";
        echo "Temperatura externa en Fahrenheit: ".$fext. " F </br>";
        echo "Temperatura externa en Kelvin: ".$kext. " K </br>";



		mysqli_free_result($result);
		mysqli_close($link);
		?>
</div></CENTER>


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