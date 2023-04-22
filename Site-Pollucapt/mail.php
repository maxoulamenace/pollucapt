<?
    $ip = "'".$_SERVER['REMOTE_ADDR']."'";
    echo($ip);
    $db = new mysqli("mysql-pollucapt.alwaysdata.net", "pollucapt", "MaisTG!3","pollucapt_bdd");
    $q=$db->query('SELECT cat FROM section WHERE cat="'.$ip.'"');
    if (mysqli_fetch_array($q)===FALSE){ // s'il n'existe pas, on ecrit
        echo 'marche pas';
        } else {
        echo 'marche';
        }
    $sql = "INSERT INTO `ip adress`(`adresse`) VALUES ($ip)";
    $db->query($sql);

    $sth->$db->array(':des'->$des));
    $result = $sth->fetchColumn(); 
    if($resultat == 1) {
        echo htmlspecialchars($dés) . " existe";
    }
    else 
    {
        echo htmlspecialchars($dès) ." n'existe pas";

?>