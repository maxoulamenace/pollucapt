<?
$mysqli = new mysqli("mysql-pollucapt.alwaysdata.net", "pollucapt", "MaisTG!3",'pollucapt_bd');
                            $result = $mysqli->query("INSERT INTO `coordonnees`(`coord_x`, `coord_y`, `niveau`) VALUES ('2.3333333','','4.86666667','150')");
                            echo ['coord_x'];
                            mysqli_close($mysqli);
?>