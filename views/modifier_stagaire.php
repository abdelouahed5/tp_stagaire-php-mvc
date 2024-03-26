<?php
$title="Modifier stagaire";
ob_start();
?>
<form action="index.php?page=update&id=<?php echo $stagaire["id"]?>" method="post">
    <label for="nom" class="form-label "  >nom</label>
    <input name="nom" type="text" class=" form-control  " value="<?php echo $stagaire["nom"]?>" >
    <label for="prenom" class="form-label " >prenom</label>
    <input name="prenom" type="text" class=" form-control  " value="<?php echo $stagaire["prenom"]?>" >
    <label for="age" class="form-label " >age</label>
    <input name="age" type="text" class=" form-control  " value="<?php echo $stagaire["age"]?>" >
    <label for="adresse" class="form-label " >adresse</label>
    <input name="adresse" type="text" class=" form-control  " value="<?php echo $stagaire["adresse"]?>" >
    <br>
    <input type="submit" value="Ajouter" class="btn btn-success" >
</form>
<?php
$contant=ob_get_clean();
include_once "views/layout.php";
?>