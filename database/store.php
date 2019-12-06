<?php

include 'phpdd/connection.php';

var_dump ($_POST);

$query = "INSERT INTO animaux (id,nom animal,date vaccin,email proprietaire,telephone proprietaire") VALUES (:id, :nom animal, :date vaccin, :email proprietaire, :telephone proprietaire)";

$createAnimaux = $dbConnection->prepare($query);

$createAnimaux->bindParam(":id", $_POST['id']);
$createAnimaux->bindParam(":nom animal", $_POST['nom animal']);
$createAnimaux->bindParam(":date vaccin", $_POST['date vaccin']);
$createAnimaux->bindParam(":email proprietaire", $_POST['email proprietaire']);
$createAnimaux->bindParam(":telephone proprietaire", $_POST['telephone proprietaire']);

$createAnimaux->execute ();


header('/database/list.php');