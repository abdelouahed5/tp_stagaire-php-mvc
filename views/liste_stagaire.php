<?php

$title="Liste stagaire";

ob_start();
?>
<a href="index.php?page=create" class="btn btn-primary ">Create Stagaire</a>
<br>
<br>
<table class=" table  table-striped " >
   <thead>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>age</th>
        <th>adresse</th>
        <th>Opiration</th>
    </tr>
   </thead>
   <tbody>
    <?php
    foreach($stagaires as $stagaire){
        ?>
        <tr>
        <td><?= $stagaire["id"] ?></td>
        <td><?= $stagaire["nom"] ?></td>
        <td><?= $stagaire["prenom"] ?></td>
        <td><?= $stagaire["age"] ?></td>
        <td><?= $stagaire["adresse"] ?></td>
        <td><a onclick="return confirm('Voulez-vous supprimer ?')" href="index.php?page=destroy&id=<?php echo $stagaire["id"]?>" class="btn btn-danger ">Supprimer</a>
        <a href="index.php?page=edit&id=<?php echo $stagaire["id"]?>" class="btn btn-success  ">Modiffier</a></td>
    </tr>
    <?php
    }
    ?>
   </tbody>
</table>
<?php $contant=ob_get_clean();
include_once "views/layout.php";
?>