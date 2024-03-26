<?php
require_once "models/stagaire.php";
function index(){
    $stagaires= All_Stagaires();
    require_once "views/liste_stagaire.php";
}
function create(){
    require_once "views/create_stagaire.php";
    
}
function store(){
  Insert_stagaire();
  header("location:index.php?page=list");     
}

function edit(){
    $id=$_GET["id"];
    $stagaire=Modifier_stagaire($id);
   
    require_once "views/modifier_stagaire.php";
     

    

}

function update(){
    $id=$_GET["id"];
    update_stagaire($id);
    header("location:index.php?page=list"); 

    
     
}
function destroy(){
    $id=$_GET["id"];
    Supprimer_stagaire($id);
    header("location:index.php?page=list");  

    


}



?>
