<?php

/*
 * Following code will list all the products
 */

// array for JSON response
$response = array();

// connecting to db
$db = new mysqli("mysql-pollucapt.alwaysdata.net", "pollucapt", "MaisTG!3","pollucapt_bd");

// get all products from products table
$result = mysqli_query($db,"SELECT * FROM `coordonnees` WHERE niveau>=80 && niveau<=100;");

# Build GeoJSON feature collection array
$geojson = array(
   "type"=> "FeatureCollection",
   "features"=> array()
);

// check for empty result
if (mysqli_num_rows($result) > 0) {
    // looping through all results
    // products node

    while ($row = mysqli_fetch_array($result)) {
        $feature = array(
        "id" => $row["id"],
        "type" => "Feature",
        "geometry" => array(
            "type" => "Point",
            # Pass Longitude and Latitude Columns here
            "coordinates" => array($row["coord_x"], $row["coord_y"])
        ),
        );
    # Add feature arrays to feature collection array
    array_push($geojson["features"], $feature);
    }
    header("Content-type: application/json");
    header("Access-Control-Allow-Origin: *");
    echo json_encode($geojson, JSON_NUMERIC_CHECK);
} else {
    echo "no data";
}
mysqli_close($db);
?>