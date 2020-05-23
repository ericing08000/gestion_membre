<!------------------------------------>
<!-- page test -->
<!------------------------------------>

<?php

require_once('../class/Database.php');

$connect = new Database('localhost:3307' , 'signin' , 'ericing', 'Eric@ing%08000');
$bdd = $connect->PDOConnexion();

$req = $bdd->prepare('SELECT * FROM type');
$req->execute();

$donnees = $req->fetchAll();

echo"<pre>";
print_r($donnees);
echo"</pre>";


?>

