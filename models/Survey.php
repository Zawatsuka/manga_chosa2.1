<?php
   require_once(dirname(__FILE__).'/../utils/database.php');
   class Survey{
    private $_title1;
    private $_title2;
    private $_typeofmanga;
    private $_vote1;
    private $_vote2;
    private $_active;
    private $_desactive;
    private $_pdo;

    public function __construct($title1=NULL, $title2=NULL, $typeOfManga=NULL ,$vote1=0 , $vote2=0,$desactive=0, $active=TRUE)
    {
        $this->_title1= $title1;
        $this->_title2= $title2;
        $this->_typeofmanga= $typeOfManga;
        $this->_vote1= $vote1;
        $this->_vote2= $vote2;
        $this->_desactive= $desactive;
        $this->_active= $active;
        $this-> _pdo = Database::connectToBdd();
    }

    public function addSurvey(){
        try{
        $sql ="INSERT INTO `survey` (`title1`,`title2`,`id_typeofmanga`)VALUES 
        (:title1,:title2,:typeofManga);";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':title1',$this->_title1 , PDO::PARAM_STR);
        $stmt->bindValue(':title2',$this->_title2 , PDO::PARAM_STR);
        $stmt->bindValue(':typeofManga',$this->_typeofmanga , PDO::PARAM_INT);
        return $stmt->execute();
        }catch(PDOException $e){
         return  $e->getMessage();
        }
        
    }

    public function viewsAllSurvey($idType){
        $sql = "SELECT * FROM `survey` WHERE `id_typeOfmanga`=:idTypeOfManga AND `active`= 1;";
        $sth = $this->_pdo->prepare($sql);
        $sth->bindValue(':idTypeOfManga',$idType, PDO::PARAM_STR);
        $sth->execute();
        $survay = $sth->fetchAll();
        return $survay; 
    
    }

    public function DesactiveSurvey($idDesactive){
            try{
                $sql = "UPDATE `survey` SET `active`= 0,
                `desactive`= 1 WHERE `id` = :id;";
                $stmt = $this->_pdo->prepare($sql);
                $stmt -> bindValue(':id',$idDesactive, PDO::PARAM_INT);
                return $stmt->execute();
            }catch(PDOException $e){
                return $e->getMessage();
            }
    }
    

   }