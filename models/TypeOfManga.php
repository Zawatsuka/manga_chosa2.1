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
    public function OneType($idType){
        $sql = "SELECT * FROM `typeofmanga` WHERE `id` = :idType";
        $sth = $this->_pdo->prepare($sql);
        $sth->bindValue(':idType',$idType, PDO::PARAM_INT);
        $sth->execute();
        $listOfType = $sth->fetch();
        return $listOfType; 
    }
    
    public function addType(){
        try{
            $sql = "INSERT INTO `typeofmanga`(`typeofmanga`) VALUES (:typeOfManga)";
            $sth = $this->_pdo->prepare($sql);
            $sth->bindValue(':typeOfManga',$this->_typeOfManga , PDO::PARAM_STR);
            return $sth->execute();
        }catch(PDOException $e){
            return $e->getMessage();
    }
    }
}