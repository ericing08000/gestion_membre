<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/sinscrire.css">

        <title>Gestion membre - S'inscrire</title>
    </head>

<body id="body" class="accueil">

<!------------------------>
<!--header--->
<!------------------------>
<link rel="stylesheet" href="../css/header.css">

<div class="header">
    <a href="../index.php"><img src="../image/simplon.png" alt="logo simplon"></a>

<div id="buttons">

<a class="btn_signup" href="../index.php"><div></div>Accueil</a>
<a class="btn_signup" href="sinscrire.php"><div></div>S'inscrire</a>
<a class="btn_signin" href="seconnecter.php"><div></div>Se connecter</a>
</div>

</div>

 
<!------------------------>
<!--S'inscrire--->
<!------------------------>

<div id="sinscrire">    
 
    <div class="sinscrire">
        
        <div id="signup">
            <p>S'inscrire</p>
        <hr>
        <!-- Gestion des erreurs -->
        <?php if(isset($_GET['error'])) {
                if($_GET['error'] ==1) {?>

                    <div class="error">
                        <h4>le pseudo existe déjà.</h4>
                    </div>
                <?php }
                
                if($_GET['error'] ==2) {?>
                <div class="error">
                    <h4>L'email existe déjà.</h4>
                </div>        
        <?php }} ?>

            <form class="form_signup" action="../traitement/inscription.php" method="post">
                <input placeholder="Pseudo" type="text" name="pseudoUser" id="pseudoUser" required>
                <input placeholder="Email" type="email" name="emailUser" id="emailUser" required>
                <input placeholder="Mot de passe" type="password" name="mdpUser" id="mdpUser" required>
                    
                <button type="submit">S'inscrire</button>
                <br>
                <a href="sinscrire.php" style="margin-top:20px">Annuler</a>
            </form>    
        </div>   
    </div>
</div>    

<!------------------------>
<!--footer--->
<!------------------------>
<link rel="stylesheet" href="../css/footer.css">

<div class="footer">
<p>© Copyright Ericing 2020</p>
</div>


</body>
</html>