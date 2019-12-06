<?php

include '../templates/header.php';

?>

<form action="">
    <div class="form-group">
        <label for="id">ID</label>
        <input class="form-control" type="number" required name="id">
    </div>

    <div class="form-group">
        <label for="nom animal">Nom de l'animal</label>
        <input class="form-control" type="text" required name="nom animal">
    </div>

    <div class="form-group">
        <label for="date vaccin">Date de Vaccination</label>
        <input class="form-control" type="text" required name="date vaccin">
    </div>

    <div class="form-group">
        <label for="email proprietaire">Email du Propriétaire</label>
        <input class="form-control" type="text" required name="email proprietaire">
    </div>
    <div>
        <label for="numero proprietaire">Téléphone du Propriétaire</label>
        <input class="form-control" type="number" required name="numero proprietaire">
    </div>

        <input class="favorite styled" type="button"value="Créer">
</form>