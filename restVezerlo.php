<?php

require_once("OscarrestKezelo.php");

$view = "";
if(isset($_GET["view"]))
$view = $_GET["view"];

switch($view)
{
    case "all";
        $Oscarrest = new OacarrestKezelo();
        $Oscarrest->getOscarsById($_GET["id"]);
        break;
    case "tipus";
}

?>