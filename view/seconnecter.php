<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/seconnecter.css">
        

        <title>Gestion membre - Se connecter</title>
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
<a class="btn_signup" href="seconnecter.php"><div></div>Se connecter</a>

</div>

</div>

 
<!------------------------>
<!--S'inscrire--->
<!------------------------>

<div id="seconnecter">    
    <div class="Seconnecter">
        
            <div id="signin">
                <p>Se connecter</p>
            <hr>
                <form class="form_signin" action="../traitement/seconnecter.php" method="post">
                    <input placeholder="Pseudo" type="text" name="pseudoUser" id="pseudoUser">
                    <input placeholder="Mot de passe"type="password" name="mdpUser" id="mdpUser">
                        
                    <button type="submit">Se connecter</button>       
                        
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