<?php
$title="Create stagaire";
ob_start();
?>
<form action="index.php?page=store" method="post">
    <label for="nom" class="form-label " >nom</label>
    <input name="nom" type="text" class=" form-control  " >
    <label for="prenom" class="form-label " >prenom</label>
    <input name="prenom" type="text" class=" form-control  " >
    <label for="age" class="form-label " >age</label>
    <input name="age" type="text" class=" form-control  " >
    <label for="adresse" class="form-label " >adresse</label>
    <input name="adresse" type="text" class=" form-control  " >
    <br>
    <input type="submit" value="Ajouter" class="btn btn-success" >
</form>
<?php
$contant=ob_get_clean();
include_once "views/layout.php";
?>