<?php
//=====================================
//Connexion à la base de données en POO
//=====================================
require_once('../class/Database.php');
$connect = new Database('localhost:3307' , 'signin' , 'ericing', 'Eric@ing%08000');
$bdd = $connect->PDOConnexion();

$pseudoUser = $_POST['pseudoUser'];
$emailUser = $_POST['emailUser'];
$mdpUser = $_POST['mdpUser'];

//Test envoi méthode POST
//echo $pseudoUser, $emailUser, $mdpUser;

//Permet de savoir si le pseudo existe dans la base de données
$req = $bdd->prepare('SELECT * FROM user WHERE pseudoUser = :pseudoUser');
$req-> execute(array(
    'pseudoUser' => $pseudoUser
));
//Compte le nombre de ligne dans la base de données
$count = $req->rowcount();

if($count==0){

    //Permet de savoir si le email existe dans la base de données
    $req = $bdd->prepare('SELECT * FROM user WHERE emailUser = :emailUser');
    $req-> execute(array(
        'emailUser' => $emailUser
    ));

    //Compte le nombre de ligne dans la base de données
    $count = $req->rowcount();

    if($count==0){
    
    //Préparation de la requête pour l'enregistrement
    $req = $bdd->prepare("INSERT INTO user (pseudoUser, emailUser, mdpUser, id_type) 
    VALUES ( :pseudoUser, :emailUser, :mdpUser, :id_type) ");

    $req->execute(array(
        'pseudoUser' => $pseudoUser,
        'emailUser' => $emailUser,
        'mdpUser' => $mdpUser,
        'id_type' => 2
    ));

    //Redirection vers la page d'accueil
    header('location:../index.php');

    }else{

        header('location:../view/sinscrire.php?error=2');
    } 

}else{

    header('location:../view/sinscrire.php?error=1');

}

//Fermer la requête en mémoire
    $req->closeCurseur();




?>