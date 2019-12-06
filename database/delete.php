<?php

include '../database/connection.php';

$query = "DELETE FROM animaux WHERE id = animaux_id";

$deleteMovie = $dbConnexion->prepare($query);

$deleteMovie->bindParam(':animaux_id', $_POST['animaux_id']);

$deleteMovie->execute();