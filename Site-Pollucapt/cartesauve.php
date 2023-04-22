<html>
    <head>
        <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
    </head>
    <body>

        <div id="map" style="width: 100%; height: 100%px;"></div>
        <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
        <script>
             var attribution = new ol.control.Attribution({
                collapsible: false
            });

            var map = new ol.Map({
                controls: ol.control.defaults({attribution: false}).extend([attribution]),
                layers: [
                    new ol.layer.Tile({
                        source: new ol.source.OSM({
                            attributions: [ "Pollucat'" ],
                        })
                    })
                ],
                target: 'map',
                view: new ol.View({
                    center: ol.proj.fromLonLat([2.333333, 48.866667]),
                    maxZoom: 18,
                    zoom: 12
                })
            });
            var layer = new ol.layer.Vector({
                source: new ol.source.Vector({
                    features: [
                        new ol.Feature({
                            geometry: new ol.geom.Point(ol.proj.fromLonLat([<?php 
                            $mysqli = new mysqli("mysql-pollucapt.alwaysdata.net", "pollucapt", "MaisTG!3",'pollucapt_bd');
                            $result = $mysqli->query("SELECT coord_x FROM coordonnees WHERE id = 1");
                            $row = $result->fetch_assoc(); 
                            echo floatval($row['coord_x']);
                            mysqli_close($mysqli)
                            ?> , <?php 
                            $mysqli = new mysqli("mysql-pollucapt.alwaysdata.net", "pollucapt", "MaisTG!3",'pollucapt_bd');
                            $result = $mysqli->query("SELECT coord_y FROM coordonnees WHERE id = 1");
                            $row = $result->fetch_assoc(); 
                            echo floatval($row['coord_y']);
                            mysqli_close($mysqli);

                            ?>])),Circle
                        })
                    ]
                })
            });
            map.addLayer(layer);
        </script>
    </body>
</html>