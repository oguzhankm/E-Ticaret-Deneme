<?php
session_start();
require_once  "baglan.php";


$GelenDilSecimi = Filtrele($_GET["DilSecimi"]);

$_SESSION["SiteDili"] = $GelenDilSecimi;

header("Location: index.php");


$VeritabaniBaglantisi = null;


?>




