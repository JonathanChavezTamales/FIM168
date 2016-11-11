<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<html><head><meta charset="utf-8"></head>
<body>

		<?php
		$link = mysqli_connect("localhost", "root", "");
		mysqli_select_db($link, "CanSATService");
		$result = mysqli_query($link, "SELECT * FROM datos ORDER BY ID DESC LIMIT 1");

		mysqli_data_seek ($result, 0);
		$extraido = mysqli_fetch_array($result);
		echo "- ID: ".$extraido['ID']."<br/>";
		echo "- Temperatura: ".$extraido['Temp_1']."<br/>";
		echo "- Humedad: ".$extraido['Humedad']."<br/>";
		echo "- Presion: ".$extraido['Presion']."<br/>";
		echo "- Latitud: ".$extraido['Latitud']."<br/>";
		echo "- Longitud: ".$extraido['Longitud']."<br/>";
		echo "- Temperatura interna: ".$extraido['Temp_2']."<br/>";
		echo "- Altitud en base a presion: ".$extraido['AltPress']."<br/>";
		echo "- Altitud en base a GPS: ".$extraido['Altitud']."<br/>";
		mysqli_free_result($result);
		mysqli_close($link);
		?>

</body>
</html>
