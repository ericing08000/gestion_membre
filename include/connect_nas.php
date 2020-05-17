<!------------------------------------------------------------------>
<!-- Connexion au server local synology base de données : signin --->
<!------------------------------------------------------------------>
<?php

$user = 'root';
$pass = 'Eric@ing%08000';

try{

    
    $bdd = new PDO('mysql:host=localhost:3307; dbname=signin' , $user, $pass);

    //set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
    print "Erreur :" . $e->getMessage() . "<br*>";
    die;
}



$req = $bdd->prepare('SELECT * FROM user');
$req->execute();

$donnees = $req->fetch();

echo"<pre>";
print_r($donnees);
echo"</pre>";

?>