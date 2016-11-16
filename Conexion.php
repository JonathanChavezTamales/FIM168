<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<html><head><meta charset="utf-8"></head>
<body>

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

</body>
</html>
