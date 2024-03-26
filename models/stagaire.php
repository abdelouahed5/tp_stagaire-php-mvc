<?php
require_once "connexion.php";
function All_Stagaires(){
    $db=Connexion();
    $stagaire=$db->query("select * from stagiaire ")->fetchAll(PDO::FETCH_ASSOC);
    return $stagaire;
    
}
function Insert_stagaire(){
    $db=Connexion();
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $adresse=$_POST['adresse'];
    $sql=$db->prepare("INSERT INTO  stagiaire (nom,prenom,age,adresse) VALUES(?,?,?,?) ");
    $stagaire=$sql->execute([$nom,$prenom,$age,$adresse]);
    return $stagaire;
    
}
function Supprimer_stagaire($id){
    $db=Connexion();
   
    
    $sql=$db->prepare("DELETE FROM stagiaire WHERE id=? ");
    $stagaire=$sql->execute([$id]);
    return $stagaire;
   



}
function Modifier_stagaire($id){
    $db=Connexion();
    
    $stagaire=$db->query("select * from stagiaire where id=$id ")->fetch(PDO::FETCH_ASSOC);
    return $stagaire;

}
function update_stagaire($id){
    $db=Connexion();
    
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $adresse=$_POST['adresse'];
    $sql=$db->prepare("UPDATE stagiaire SET nom=?,prenom=?,age=?,adresse=? where id=$id");
    $stagaire=$sql->execute([$nom,$prenom,$age,$adresse]);
    return $stagaire;
}







?>