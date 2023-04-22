<html>
<?php

// the message
$ip = "'".$_SERVER['REMOTE_ADDR']."'";

// send email
mail("pollucapt.alwaysdata.net","My subject",$ip);

?>

<!doctype html>
<html lang="en">
  <head>
  <title>Pollucapt</title>
  <link rel="icon" type="image/png" href="logo.png" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="ol.css" type="text/css">

    <style>
      #map {
        height: 100%;
        width: 100%;
      }
    </style>
    <script src="ol.js"></script>
  </head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <section class="top-nav">
    <div>
      <img src="logo.png" height="50px">
    </div>
	<div>
	<h1>POLLUCAPT<img src="feuille.png" height="35px"></h1>
	</div>
    <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
    <div class='menu-button'></div>
  </label>
    <ul class="menu">
    <li><a id="menu" href="index.html">Accueil</a></li>
      <li><a id="menu" href="projet.php">Notre Projet</a></li>
      <li><a id="menu" href="carte.php">Carte</a></li>
      <li><a id="menu" href="acheter.html">Acheter</a></li>
      <li><a id="menu" href="contact.html">Contacte</a></li>
      <li><a id="menu" href="accueil.php">Connexion</a></li>
    </ul>
  </section>
  <body>
  
    <div id="map"></div>
    <script type="text/javascript">
      var nom = new ol.layer.Tile({
        source: new ol.source.OSM({attributions: [ "Pollucat'" ]})
      });

      var vert = new ol.layer.Vector({
        source: new ol.source.Vector({
          url: "https://pollucapt.alwaysdata.net/pointvert.php",
          format: new ol.format.GeoJSON()
        }),
        style: new ol.style.Style({
          image: new ol.style.Circle({
            radius: 15, 
            fill: new ol.style.Fill({
              color: [100, 250, 55, 0.7],
            })
          })
        })
      });
      var rouge = new ol.layer.Vector({
        source: new ol.source.Vector({
          url: "https://pollucapt.alwaysdata.net/pointrouge.php",
          format: new ol.format.GeoJSON()
        }),
        style: new ol.style.Style({
          image: new ol.style.Circle({
            radius: 15, 
            fill: new ol.style.Fill({
              color: [255, 0, 55, 0.7],
            })
          })
        })
      });

      var orange = new ol.layer.Vector({
        source: new ol.source.Vector({
          url: "https://pollucapt.alwaysdata.net/pointorange.php",
          format: new ol.format.GeoJSON()
        }),
        style: new ol.style.Style({
          image: new ol.style.Circle({
            radius: 15, 
            fill: new ol.style.Fill({
              color: [255, 150, 0, 0.7],
            })
          })
        })
      });

      var map = new ol.Map({
        layers: [nom, vert, rouge ,orange],
        target: "map",
        view: new ol.View({
          center: ol.proj.fromLonLat([2.333333, 48.866667]),
          zoom: 12
        })
      });
    </script>
  </body>
</html>