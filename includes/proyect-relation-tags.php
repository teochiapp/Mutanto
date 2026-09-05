<?php 

$expresion_regular = '/^[a-zA-Z0-9]+\/([a-zA-Z0-9-]+)\/$/';
$companyName = $thisPageLanguages["es"];
preg_match($expresion_regular, $companyName, $matches);
$relationTagProyect = [
    "systel" => "1,2,3",
    "welly-go" => "1,4,5,6,7,8",
    "hadar" => "10,11,12",
    "bocho" => "10,6,13",
    "grupo-herrero" => "10,2,14,13,6",
    "cref" => "16,17,2,18",
    "slapp" => "1,2,3",
    "modo-avion" => "2,19",
    "hts-pathways" => "2,20,12",];
    $proyectsTagsRelation = $relationTagProyect[$matches[1]];
?>

