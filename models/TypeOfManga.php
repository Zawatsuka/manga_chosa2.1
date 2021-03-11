<?php
   require_once(dirname(__FILE__).'/../utils/database.php');
   class typeOfManga{
    private $_typeOfManga;
    private $_pdo;

    public function __construct($typeOfManga=null)
    {
        $this->_typeOfManga = $typeOfManga;
        $this-> _pdo = Database::connectToBdd();
    }
    public function listOfType(){
            $sql = "SELECT * FROM `typeofmanga`";
            $sth = $this->_pdo->prepare($sql);
            $sth->execute();
            $listOfType = $sth->fetchAll();
            return $listOfType; 
    }
}