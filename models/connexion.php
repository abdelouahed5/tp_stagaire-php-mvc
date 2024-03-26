<?php
function Connexion(){
    $db=new PDO("mysql:host=localhost;dbname=mvc_tp","root","");
    return $db;
}

?>