<?php
// xss-service.php - Bare-bones demo by @Drakes
$callback = isset($_GET["callback"]) ? $_GET["callback"] : "?";

$json = file_get_contents('https://summitstage.doublemap.com/map/v2/buses');

header('Access-Control-Allow-Origin: *');
header("Content-type: application/json");
echo $callback . "(" . $json . ");";
?>