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
    <link rel="shortcut icon" href="logo.png" />	<style type="text/css">
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


							<li class="active">
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
								<a href="dashboard-7.html">
									<span class="title">Integrantes</span>
								</a>
							</li>

							<li>
									<a href="facebook.com" target="_blank">Documentación</span>
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
require("RandomClass.php");


//Creamos un objeto de la clase randomTable
$rand = new RandomTable();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valores0Array;
$timeArray;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valores0Array[$i]= $rawdata[$i][1];
    //OBTENEMOS EL TIMESTAMP
    $time= $rawdata[$i][2];
    $date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    $timeArray[$i] = $date->getTimestamp()*1000;
}


require("RandomClass2.php");

//Creamos un objeto de la clase randomTable
$rand = new RandomTablpppe();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valoresArray;
$valores2Array;
//$timeArray;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valoresArray[$i]= $rawdata[$i][1];
    $valores2Array[$i]= $rawdata[$i][2];

    //OBTENEMOS EL TIMESTAMP
    //$time= $rawdata[$i][2];
    //$date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    //$timeArray[$i] = $date->getTimestamp()*1000;
}


require("RandomClass3.php");

//Creamos un objeto de la clase randomTable
$rand = new RandomTable3();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valores4Array;
$time2Array;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valores4Array[$i]= $rawdata[$i][1];
    //OBTENEMOS EL TIMESTAMP
    $time= $rawdata[$i][2];
    $date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    $time2Array[$i] = $date->getTimestamp()*1000;
}


require("RandomClass4.php");

//Creamos un objeto de la clase randomTable
$rand = new RandomTable4();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valores5Array;
$time3Array;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valores5Array[$i]= $rawdata[$i][1];
    //OBTENEMOS EL TIMESTAMP
    $time= $rawdata[$i][2];
    $date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    $time3Array[$i] = $date->getTimestamp()*1000;
}
require("Temp_2-Humedad.php");

//Creamos un objeto de la clase randomTable
$rand = new RandomTable5();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valores6Array;
$valores7Array;
//$timeArray;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valores6Array[$i]= $rawdata[$i][1];
    $valores7Array[$i]= $rawdata[$i][2];

    //OBTENEMOS EL TIMESTAMP
    //$time= $rawdata[$i][2];
    //$date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    //$timeArray[$i] = $date->getTimestamp()*1000;
}

require("Tiempo-Temp1.php");

//Creamos un objeto de la clase randomTable
$rand = new RandomTable7();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valores8Array;
$time4Array;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valores8Array[$i]= $rawdata[$i][1];
    //OBTENEMOS EL TIMESTAMP
    $time= $rawdata[$i][2];
    $date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    $time4Array[$i] = $date->getTimestamp()*1000;
}

require("Temp_2-Altitud.php");

//Creamos un objeto de la clase randomTable
$rand = new RandomTable9();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valores10Array;
$valores11Array;
//$timeArray;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valores10Array[$i]= $rawdata[$i][1];
    $valores11Array[$i]= $rawdata[$i][2];

    //OBTENEMOS EL TIMESTAMP
    //$time= $rawdata[$i][2];
    //$date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    //$timeArray[$i] = $date->getTimestamp()*1000;
}

require("Temp_1-Altitud.php");

//Creamos un objeto de la clase randomTable
$rand = new RandomTable10();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valores14Array;
$valores15Array;
//$timeArray;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valores14Array[$i]= $rawdata[$i][1];
    $valores15Array[$i]= $rawdata[$i][2];

    //OBTENEMOS EL TIMESTAMP
    //$time= $rawdata[$i][2];
    //$date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    //$timeArray[$i] = $date->getTimestamp()*1000;
}

require("Humedad-Altitud.php");

//Creamos un objeto de la clase randomTable
$rand = new RandomTable12();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valores19Array;
$valores20Array;
//$timeArray;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valores19Array[$i]= $rawdata[$i][1];
    $valores20Array[$i]= $rawdata[$i][2];

    //OBTENEMOS EL TIMESTAMP
    //$time= $rawdata[$i][2];
    //$date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    //$timeArray[$i] = $date->getTimestamp()*1000;
}

require("Presion-Altitud.php");

//Creamos un objeto de la clase randomTable
$rand = new RandomTable13();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valores21Array;
$valores22Array;
//$timeArray;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valores21Array[$i]= $rawdata[$i][1];
    $valores22Array[$i]= $rawdata[$i][2];

    //OBTENEMOS EL TIMESTAMP
    //$time= $rawdata[$i][2];
    //$date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    //$timeArray[$i] = $date->getTimestamp()*1000;
}

require("Altitud-Tiempo.php");

//Creamos un objeto de la clase randomTable
$rand = new RandomTable14();
//insertamos un valor aleatorio
//$rand->insertRandom();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valores15Array;
$time14Array;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valores15Array[$i]= $rawdata[$i][1];
    //OBTENEMOS EL TIMESTAMP
    $time= $rawdata[$i][2];
    $date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    $time14Array[$i] = $date->getTimestamp()*1000;
}
?>

<script src="https://code.jquery.com/jquery.js"></script>
    <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
<script src="http://code.highcharts.com/stock/highstock.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<center><div id="contenedor"></div> </center>
<br> <br> 
<center><div id="contenedor2"></div></center>
<br><br>
<center><div id="contenedor3"></div></center>
<br><br>
<center><div id="contenedor4"></div></center>
<br><br>
<center><div id="contenedor5"></div></center>
<br><br>
<center><div id="contenedor6"></div></center>
<br><br>
<center><div id="contenedor7"></div></center>
<br><br>
<center><div id="contenedor8"></div></center>
<br><br>
<center><div id="contenedor9"></div></center>
<br><br>
<center><div id="contenedor10"></div></center>
<br><br>
<center><div id="contenedor11"></div></center>

<script type="text/javascript">

chartCPU = new Highcharts.StockChart({
    chart: {
        renderTo: 'contenedor',

        //defaultSeriesType: 'spline'
        
    },
    rangeSelector : {
        enabled: false
    },
    title: {
        text: 'Tiempo-Temperatura'
    },
    xAxis: {
        type: 'datetime'
        //tickPixelInterval: 150,
        //maxZoom: 20 * 1000
    },
    yAxis: {
        minPadding: 0.2,
        maxPadding: 0.2,
        title: {
            text: 'Temperatura °C',
            margin: 10
        }
    },
    series: [{
        name: 'Valor',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $timeArray[$i];?>,<?php echo $valores0Array[$i];?>]);
                <?php } ?>
                return data;
            })()
    }],
    credits: {
            enabled: false
    }
});

$(function () {
    Highcharts.chart('contenedor2', {
        chart: {
            type: 'scatter',
            zoomType: 'xy'
        },
        title: {
            text: 'Presión-Temperatura-Interna'
        },

        xAxis: {
            title: {
                enabled: true,
                text: 'Presion HPA'
            },
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
        },
        yAxis: {
            title: {
                text: 'Temperatura°C'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 100,
            y: 70,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
            borderWidth: 1
        },
        plotOptions: {
            scatter: {
                marker: {
                    radius: 5,
                    states: {
                        hover: {
                            enabled: true,
                            lineColor: 'rgb(100,100,100)'
                        }
                    }
                },
                states: {
                    hover: {
                        marker: {
                            enabled: false
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '{point.x} , {point.y}'
                }
            }
        },
        series: [{
            name: 'Presion-Temperatura',
            color: 'rgba(223, 83, 83, .5)',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $valores2Array[$i];?>,<?php echo $valoresArray[$i];?>]);
                <?php } ?>
                return data;
            })()

        
        }]
    });
});
chartCPU = new Highcharts.StockChart({
    chart: {
        renderTo: 'contenedor3',

        //defaultSeriesType: 'spline'
        
    },
    rangeSelector : {
        enabled: false
    },
    title: {
        text: 'Tiempo-Presión'
    },
    xAxis: {
        type: 'datetime'
        //tickPixelInterval: 150,
        //maxZoom: 20 * 1000
    },
    yAxis: {
        minPadding: 0.2,
        maxPadding: 0.2,
        title: {
            text: 'Presion HPA',
            margin: 10
        }
    },
    series: [{
        name: 'Valor',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $time2Array[$i];?>,<?php echo $valores4Array[$i];?>]);
                <?php } ?>
                return data;
            })()
    }],
    credits: {
            enabled: false
    }
});

chartCPU = new Highcharts.StockChart({
    chart: {
        renderTo: 'contenedor4',

        //defaultSeriesType: 'spline'
        
    },
    rangeSelector : {
        enabled: false
    },
    title: {
        text: 'Tiempo-Humedad'
    },
    xAxis: {
        type: 'datetime'
        //tickPixelInterval: 150,
        //maxZoom: 20 * 1000
    },
    yAxis: {
        minPadding: 0.2,
        maxPadding: 0.2,
        title: {
            text: 'Humedad relativa',
            margin: 10
        }
    },
    series: [{
        name: 'Valor',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $time3Array[$i];?>,<?php echo $valores5Array[$i];?>]);
                <?php } ?>
                return data;
            })()
    }],
    credits: {
            enabled: false
    }
});

$(function () {
    Highcharts.chart('contenedor5', {
        chart: {
            type: 'scatter',
            zoomType: 'xy'
        },
        title: {
            text: 'Humedad-Temperatura-Interna'
        },

        xAxis: {
            title: {
                enabled: true,
                text: 'Humedad'
            },
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
        },
        yAxis: {
            title: {
                text: 'Temperatura°C'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 100,
            y: 70,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
            borderWidth: 1
        },
        plotOptions: {
            scatter: {
                marker: {
                    radius: 5,
                    states: {
                        hover: {
                            enabled: true,
                            lineColor: 'rgb(100,100,100)'
                        }
                    }
                },
                states: {
                    hover: {
                        marker: {
                            enabled: false
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '{point.x}, {point.y} '
                }
            }
        },
        series: [{
            name: 'Humedad-Temperatura',
            color: 'rgba(223, 83, 83, .5)',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $valores6Array[$i];?>,<?php echo $valores7Array[$i];?>]);
                <?php } ?>
                return data;
            })()

        
        }]
    });
});

chartCPU = new Highcharts.StockChart({
    chart: {
        renderTo: 'contenedor6',

        //defaultSeriesType: 'spline'
        
    },
    rangeSelector : {
        enabled: false
    },
    title: {
        text: 'Tiempo-Temperatura externa'
    },
    xAxis: {
        type: 'datetime'
        //tickPixelInterval: 150,
        //maxZoom: 20 * 1000
    },
    yAxis: {
        minPadding: 0.2,
        maxPadding: 0.2,
        title: {
            text: 'Temperatura °C',
            margin: 10
        }
    },
    series: [{
        name: 'Valor',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $time4Array[$i];?>,<?php echo $valores8Array[$i];?>]);
                <?php } ?>
                return data;
            })()
    }],
    credits: {
            enabled: false
    }
});

$(function () {
    Highcharts.chart('contenedor7', {
        chart: {
            type: 'scatter',
            zoomType: 'xy'
        },
        title: {
            text: 'Altitud-Temperatura-Interna'
        },

        xAxis: {
            title: {
                enabled: true,
                text: 'Temperatura°C'
            },
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
        },
        yAxis: {
            title: {
                text: 'Altitud'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 100,
            y: 70,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
            borderWidth: 1
        },
        plotOptions: {
            scatter: {
                marker: {
                    radius: 5,
                    states: {
                        hover: {
                            enabled: true,
                            lineColor: 'rgb(100,100,100)'
                        }
                    }
                },
                states: {
                    hover: {
                        marker: {
                            enabled: false
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '{point.x}, {point.y} '
                }
            }
        },
        series: [{
            name: 'Temperatura-Altitud',
            color: 'rgba(223, 83, 83, .5)',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $valores10Array[$i];?>,<?php echo $valores11Array[$i];?>]);
                <?php } ?>
                return data;
            })()

        
        }]
    });
});

$(function () {
    Highcharts.chart('contenedor8', {
        chart: {
            type: 'scatter',
            zoomType: 'xy'
        },
        title: {
            text: 'Altitud-Temperatura-Externa'
        },

        xAxis: {
            title: {
                enabled: true,
                text: 'Temperatura°C'
            },
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
        },
        yAxis: {
            title: {
                text: 'Altitud'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 100,
            y: 70,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
            borderWidth: 1
        },
        plotOptions: {
            scatter: {
                marker: {
                    radius: 5,
                    states: {
                        hover: {
                            enabled: true,
                            lineColor: 'rgb(100,100,100)'
                        }
                    }
                },
                states: {
                    hover: {
                        marker: {
                            enabled: false
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '{point.x}, {point.y} '
                }
            }
        },
        series: [{
            name: 'Temperatura externa-Altitud',
            color: 'rgba(223, 83, 83, .5)',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $valores14Array[$i];?>,<?php echo $valores15Array[$i];?>]);
                <?php } ?>
                return data;
            })()

        
        }]
    });
});

$(function () {
    Highcharts.chart('contenedor9', {
        chart: {
            type: 'scatter',
            zoomType: 'xy'
        },
        title: {
            text: 'Humedad-Altitud'
        },

        xAxis: {
            title: {
                enabled: true,
                text: 'Humedad'
            },
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
        },
        yAxis: {
            title: {
                text: 'Altitud'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 100,
            y: 70,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
            borderWidth: 1
        },
        plotOptions: {
            scatter: {
                marker: {
                    radius: 5,
                    states: {
                        hover: {
                            enabled: true,
                            lineColor: 'rgb(100,100,100)'
                        }
                    }
                },
                states: {
                    hover: {
                        marker: {
                            enabled: false
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '{point.x}, {point.y} '
                }
            }
        },
        series: [{
            name: 'Humedad-Altitud',
            color: 'rgba(223, 83, 83, .5)',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $valores19Array[$i];?>,<?php echo $valores20Array[$i];?>]);
                <?php } ?>
                return data;
            })()

        
        }]
    });
});

$(function () {
    Highcharts.chart('contenedor10', {
        chart: {
            type: 'scatter',
            zoomType: 'xy'
        },
        title: {
            text: 'Altitud-Presion'
        },

        xAxis: {
            title: {
                enabled: true,
                text: 'Presión'
            },
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
        },
        yAxis: {
            title: {
                text: 'Altitud'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 100,
            y: 70,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
            borderWidth: 1
        },
        plotOptions: {
            scatter: {
                marker: {
                    radius: 5,
                    states: {
                        hover: {
                            enabled: true,
                            lineColor: 'rgb(100,100,100)'
                        }
                    }
                },
                states: {
                    hover: {
                        marker: {
                            enabled: false
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '{point.x}, {point.y} '
                }
            }
        },
        series: [{
            name: 'Presión-Altitud',
            color: 'rgba(223, 83, 83, .5)',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $valores21Array[$i];?>,<?php echo $valores22Array[$i];?>]);
                <?php } ?>
                return data;
            })()

        
        }]
    });
});

chartCPU = new Highcharts.StockChart({
    chart: {
        renderTo: 'contenedor11',

        //defaultSeriesType: 'spline'
        
    },
    rangeSelector : {
        enabled: false
    },
    title: {
        text: 'Altitud-Tiempo'
    },
    xAxis: {
        type: 'datetime'
        //tickPixelInterval: 150,
        //maxZoom: 20 * 1000
    },
    yAxis: {
        minPadding: 0.2,
        maxPadding: 0.2,
        title: {
            text: 'Altitud',
            margin: 10
        }
    },
    series: [{
        name: 'Valor',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $time14Array[$i];?>,<?php echo $valores15Array[$i];?>]);
                <?php } ?>
                return data;
            })()
    }],
    credits: {
            enabled: false
    }
});
</script> 


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