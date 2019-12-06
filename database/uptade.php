<?php
include 'connection.php';
var_dump($_POST);


$query ="UPDATE animaux SET nom animal = ':nom animal', id = ':id', date vaccin = ':date vaccin', email proprietaire = ':email proprietaire',telephone proprietaire = 'telephone proprietaire' WHERE id = $_POST['animaux_id']";