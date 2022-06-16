<?php 
$serverName = ".";

$connectionInfo = array("Database"=>"PROYECTO_MANGA");
$conn = sqlsrv_connect($serverName,$connectionInfo);

if ($conn) {
    echo "exitosa";
}
else {
    echo"Error";
    die(print_r(sqlsrv_errors(),true));
}

?>