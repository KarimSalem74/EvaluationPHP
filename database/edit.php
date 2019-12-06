
<?php

include '../templates/header.php';
include 'connection.php';

$query = "SELECT * FROM animaux WHERE id = :animaux_id";

$editAnimaux = $dbConnexion->prepare($query);

$editAnimaux->bindParam(":animaux_id", $_POST['animaux_id']);

$editAnimaux->execute();

$animaux = $editAnimaux->fetch();

var_dump($animaux)
?>


<h1>MODIFIER</h1>

<div class="container">
    <form action="store.php" method="POST">

        <div class="form-group" >
            <label for="id">ID :</label>
            <input type="number"  class="form-control" required name="id">
        </div>

        <div class="form-group">
            <label for="nom animal">Nom de l'Animal :</label>
            <input type="text"  class="form-control" required name="nom animal">
        </div>

        <div class="form-group">
            <label for="date vaccin">Date de Vaccination :</label>
            <input type="number"  class="form-control" required name="date vaccin">
        </div>

        <div class="form-group">
            <label for="email proprietaire">Email du Propriétaire :</label>
            <input  class="form-control" type="text" required name="email proprietaire">
        </div>
        <div>
            <label for="telephone proprietaire">Téléphone du Propriétaire :</label>
            <input  class="form-control" type="number" required name="telephone proprietaire">
        </div>


        <input class="btn btn-primary" type="submit" value="Créer">
    </form>
</div>