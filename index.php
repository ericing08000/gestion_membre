<!------------------------------------>
<!-- Gestion de membres 17/05/2020 -->
<!------------------------------------>
<?php


?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <!-- <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <title>Gestion de membres</title>
    </head>

<body id="body" class="accueil">
    <!------------------------------------->
    <!-- header -->
    <!------------------------------------->
    <?php include('include/header.php');?>

<div id="connexion">    
    <!------------------------------------->
    <!-- S'inscrire -->
    <!------------------------------------->
    <?php include('include/signup.php');?>

    <!------------------------------------->
    <!-- Se connecter -->
    <!------------------------------------->
    <?php include('include/signin.php');?>
</div>

    <!------------------------------------->
    <!-- footer -->
    <!------------------------------------->
    <?php include('include/footer.php');?>

    <!------------------------------------->
    <!-- scripts JQuery-->
    <!------------------------------------->
    <script src="js/jquery.js"></script>
    <script src="js/signup.js"></script>
    <script src="js/signin.js"></script>


</body>
</html>