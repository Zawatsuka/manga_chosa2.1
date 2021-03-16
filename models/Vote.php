<?php
require_once(dirname(__FILE__).'/../utils/database.php');
class Vote{

    private $_vote1;
    private $_vote2;
    private $_pdo;


    public function __construct($vote1=false,$vote2=false)
    {
        $this->_vote1= $vote1;
        $this->_vote2= $vote2;
        $this-> _pdo = Database::connectToBdd();
    }

    public function addVote1($idUser,$idSurvey){
        try{
        $sql ="INSERT INTO `vote` (`id_user`,`id_survey`,`vote1`)VALUES 
        (:idUser,:idSurvey , :vote1);";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':idUser',$idUser , PDO::PARAM_INT);
        $stmt->bindValue(':idSurvey',$idSurvey , PDO::PARAM_INT);
        $stmt->bindValue(':vote1', $this->_vote1 , PDO::PARAM_BOOL);
        return $stmt->execute();
        }catch(PDOException $e){
         return  $e->getMessage();
        }
        
    }
    public function addVote2($idUser,$idSurvey){
        try{
        $sql ="INSERT INTO `vote` (`id_user`,`id_survey`,`vote2`)VALUES 
        (:idUser,:idSurvey , :vote2);";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':idUser',$idUser , PDO::PARAM_INT);
        $stmt->bindValue(':idSurvey',$idSurvey , PDO::PARAM_INT);
        $stmt->bindValue(':vote2', $this->_vote2 , PDO::PARAM_BOOL);
        return $stmt->execute();
        }catch(PDOException $e){
         return  $e->getMessage();
        }
        
    }

    public function SelectVoteUser($idUser){
        $sql= "SELECT * FROM `vote` WHERE `id_user`= :idUser";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':idUser',$idUser , PDO::PARAM_INT);
        $stmt->execute();
        $survey = $stmt->fetchAll();
        return $survey; 
    }


    public function idAccordingToASurvey($idSurvey,$idUser){
        $sql ="SELECT * FROM `vote` WHERE `id_user` = :idUser AND `id_survey`=:idSurvey;";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':idSurvey',$idSurvey , PDO::PARAM_INT);
        $stmt->bindValue(':idUser',$idUser , PDO::PARAM_INT);
        if($stmt->execute()){
            if($stmt->fetch()){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function countVoteWhereId1($idSurvey){
        $sql= "SELECT COUNT(*) AS `votes1` FROM `vote` WHERE `id_survey`= :idSurvey AND `vote1` ;";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':idSurvey',$idSurvey , PDO::PARAM_INT);
        $stmt->execute();
        $survey = $stmt->fetch();  
        return $survey;  
    }


    public function countVoteWhereId2($idSurvey){
        $sql= "SELECT COUNT(*) AS `votes2` FROM `vote` WHERE `id_survey`= :idSurvey AND `vote2` ;";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':idSurvey',$idSurvey , PDO::PARAM_INT);
        $stmt->execute();
        $survey = $stmt->fetch();  
        return $survey;  
    }
}