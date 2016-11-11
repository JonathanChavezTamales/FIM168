<body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div id="mapa" style="width:500px;height:360px;"></div><br>
          <?php
            $con = mysqli_connect("localhost", "root", "", "CanSATService") or die("Error en la conexión.");
            $query = "select * from datos order by id desc limit 1";
            $query2 = "select * from datos";
            $resultado = mysqli_query($con,$query);
            $resultado2 = mysqli_query($con,$query2);

          ?>


          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAIcu3JWQ4sRNDeHwczUosnEuPTQcILhs"></script>

          <script type="text/javascript">
            var bcn = new google.maps.LatLng(21.8955289,-102.3251335);
            var mapOptions = {
                center: bcn,
                zoom: 13,
                mapTypeId: google.maps.MapTypeId.ROADMAP
              };
            map = new google.maps.Map(document.getElementById('mapa'), mapOptions);

            </script>
            <?php
              $i2=1;
              while ($data2 = mysqli_fetch_assoc($resultado2)) {
            ?>

            
            <script type="text/javascript">
              var marker<?php echo $i2;?> = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $data2['Latitud']; ?>, <?php echo $data2['Longitud']; ?>),
                map: map,
                icon: 'img/icono.png',
              });

 
              google.maps.event.addListener(marker<?php echo $i2;?>, 'click', function() {
              });
            </script>

            <?php
                $i2++;
              }
              ?>

            <?php
              $i=1;
              while ($data = mysqli_fetch_assoc($resultado)) {
            ?>




            <script type="text/javascript">
              var marker<?php echo $i;?> = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $data['Latitud']; ?>, <?php echo $data['Longitud']; ?>),
                map: map,
                icon: 'img/icono2.png',
              });

 
              google.maps.event.addListener(marker<?php echo $i;?>, 'click', function() {
                infowindow<?php echo $i;?>.open(map,marker<?php echo $i;?>);
              });
            </script>

            <?php
                $i++;
              }
              mysqli_close($con);
            ?>



        </div>
      </div>
    </div>
  </body>