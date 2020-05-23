<?php

class  Database {

    //déclaration des variables
    private $_host;
    private $_dbname;
    private $_username;
    private $_password;

    //Initialisation de notre class
    public function __construct ($_host, $_dbname, $_username, $_password) {
        $this->_host = $_host;
        $this->_dbname = $_dbname;
        $this->_username = $_username;
        $this->_password = $_password;
    }

    public function gethost(){
        return $this->_host;
    }
    public function getdbname(){
        return $this->_dbname;
    }
    public function getusername(){
        return $this->_username;
    }
    public function getpassword(){
        return $this->_password;
    }

    //fonction permettant de se connecter
    public function PDOConnexion() {
        $bdd = new PDO('mysql:host='.$this->_host.' ; dbname='.$this->_dbname , $this->_username , $this->_password);
        
        //set the PDO error mode to exception
        $bdd ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //faire un returne de la BDD ou nonn en fonction de la connexion
        return $bdd;
    }
}
?>