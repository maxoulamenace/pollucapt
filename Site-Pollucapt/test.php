<?php
$mysqli = new mysqli("mysql-pollucapt.alwaysdata.net", "pollucapt", "MaisTG!3",'pollucapt_bd');
$result = $mysqli->query("SELECT coord_x FROM coordonnees ORDER BY id DESC LIMIT 1");
$row = $result->fetch_assoc(); 
$coord_x = floatval($row['coord_x']);
$result = $mysqli->query("SELECT coord_y FROM coordonnees ORDER BY id DESC LIMIT 1");
$row = $result->fetch_assoc(); 
$coord_y = floatval($row['coord_y']);
$result = $mysqli->query("SELECT niveau FROM coordonnees ORDER BY id DESC LIMIT 1");
$row = $result->fetch_assoc(); 
$niveau = floatval($row['niveau']);
mysqli_close($mysqli);

?>

<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">

    <style>
      #map {
        height: 100%;
        width: 100%;
      }
    </style>
    <title>OpenLayers 3 example</title>
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
  </head>
  <body>
    <h1>My Map</h1>
    <div id="map"></div>
    <script type="text/javascript">
      function couleur(a) {
        let result;
        if (a > 1300) {
          result = 'rgba(255, 0, 55, 0.5)';
        }
        else if (a < 900) {
          result = 'rgba(100, 250, 55, 0.5)';
        }
        else {
          result = 'rgba(255, 150, 0, 0.5)';
        }
        return result;
        }
      var raster = new ol.layer.Tile({
        source: new ol.source.OSM()
      });

      var vector = new ol.layer.Vector({
        source: new ol.source.Vector({
          url: "https://pollucapt.alwaysdata.net/getPosition.php",
          format: new ol.format.GeoJSON()
        }),
        style: new ol.style.Style({
          image: new ol.style.Circle({
            radius: 15, 
            fill: new ol.style.Fill({
              color: [100, 250, 55]
            })
          })
        })
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
              color: [255, 150, 0, 0.5],
            })
          })
        })
      });

      var map = new ol.Map({
        layers: [raster, vert, rouge ,orange],
        target: "map",
        view: new ol.View({
          center: ol.proj.fromLonLat([2.333333, 48.866667]),
          zoom: 12
        })
      });
    </script>
  </body>
</html>