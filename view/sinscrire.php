<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/sinscrire.css">

        <title>S'inscrire</title>
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
            <form class="form_signup" action="#" method="post">
                <input placeholder="Nom" type="text" name="username" id="username">
                <input placeholder="Email" type="text" name="email" id="email">
                <input placeholder="Mot de passe" type="password" name="mdp" id="mdp">
                    
                <button type="submit">Créer un compte</button>
                <br>
                <a href="../index.php" style="margin-top:20px">Annulé</a>
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