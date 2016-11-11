<HTML>
<BODY>

<meta charset="utf-8"> 
<?php
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

?>
<div id="contenedor"></div>

<script src="https://code.jquery.com/jquery.js"></script>
    <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
<script src="http://code.highcharts.com/stock/highstock.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
/**
 * Request data from the server, add it to the graph and set a timeout 
 * to request again
 */


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
                text: 'Altitud'
            },
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
        },
        yAxis: {
            title: {
                text: 'Temperatura °C'
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
            name: 'Altitud-Temperatura externa',
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

</script>   
</BODY>

</html>