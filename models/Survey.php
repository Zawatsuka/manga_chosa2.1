<?php
   require_once(dirname(__FILE__).'/../utils/database.php');
   class Survey{
    private $_title1;
    private $_title2;
    private $_id_typeofmanga;
    private $_vote1;
    private $_vote2;
    private $_pdo;

    public function __construct($title1=NULL, $title2=NULL, $id_typeOfManga=NULL ,$vote1=0 , $vote2=0)
    {
        $this->_title1= $title1;
        $this->_title2= $title2;
        $this->_id_typeofmanga= $id_typeOfManga;
        $this->_vote1= $vote1;
        $this->_vote2= $vote2;
        $this-> _pdo = Database::connectToBdd();
    }

    public function addSurvey(){
        $sql ="INSERT INTO `survey` (`title1`,`title2`,`id_typeOfManga`)VALUE 
        (:title1,:title2,:id_typeOfManga);";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':title1',$this->_title1 , PDO::PARAM_STR);
        $stmt->bindValue(':title2',$this->_title2 , PDO::PARAM_STR);
        $stmt->bindValue(':id_typeOfManga',$this->_id_typeOfManga , PDO::PARAM_INT);
        $stmt->execute();
        return $this-> _pdo->lastInsertId();
        
    }

   }