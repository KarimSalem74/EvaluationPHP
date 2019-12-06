<?php

include '../templates/header.php';
include '../database/connection.php';

$query = 'SELECT * FROM animaux';

$preparedQuery = $dbConnexion->prepare($query);

$preparedQuery->execute();

$animaux = $preparedQuery->fetchAll();

/* foreach($movies as $movie) {
    echo "$movie[producteur] <br>";
     echo "$movie[name] <br>";
}

*/
?>



<table>
    
        <tr>
                <th>id</th>
                <th>nom de l animal</th>
                <th>date de vaccination</th>
                <th>email proprietaire</th>
                <th>telephone proprietaire</th>
        </tr>

        <?php
            foreach($animaux as $animaux){
                ?>
                    <tr>
                        <td><?php echo $animaux['id'];?></td>
                        <td><?php echo $animaux['nom animal'];?></td>
                        <td><?php echo $animaux['date vaccin'];?></td>
                        <td><?php echo $animaux['email proprietaire'];?></td>
                        <td><?php echo $animaux['telephone proprietaire'];?></td>
                    </tr>
                    <td>
                        <form action="edit.php" method="POST">
                            <input type="hidden" name="animaux_id" value="<?php echo $animaux['id']; ?>">
                            <input type="submit" value="Modifier">
                        </form>
                    </td>
                    <td>
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="animaux_id" value="<?php echo $animaux['id']; ?>">
                            <input type="submit" value="X">
                        </form>
                    </td>
        <?php
            }
        ?>

</table>

<style>

table {
border: medium solid #000000;
width: 50%;

}
td, th {
border: thin solid #6495ed;
width: 50%;
}


</style>