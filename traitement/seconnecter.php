<?php
//=====================================
//Connexion à la base de données en POO
//=====================================
require_once('../class/Database.php');
$connect = new Database('localhost:3307' , 'signin' , 'ericing', 'Eric@ing%08000');
$bdd = $connect->PDOConnexion();

$pseudoUser = $_POST['pseudoUser'];
$mdpUser = $_POST['mdpUser'];

//Permet de savoir si le pseudo existe dans la base de données
$req = $bdd->prepare('SELECT * FROM user WHERE pseudoUser = :pseudoUser AND mdpUser = :mdpUser');
$req-> execute(array(
    'pseudoUser' => $pseudoUser,
    'mdpUser' => $mdpUser
));

//Compte le nombre de ligne dans la base de données
$count = $req->rowcount();

if($count>0){

    header('location:../index.php');
}
else{
    
    echo"pseudo ou mdp invalide";
}
?>