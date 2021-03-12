<?php
require_once(dirname(__FILE__).'/../utils/database.php');
class Vote{

    private $_id;
    private $_id_user;
    private $_id_survey;
    private $_created_at;
    private $_pdo;


    public function __construct()
    {
        $this-> _pdo = Database::connectToBdd();
    }

    public function addVote($idUser,$idSurvey){
        try{
        $sql ="INSERT INTO `vote` (`id_user`,`id_survey`)VALUES 
        (:idUser,:idSurvey);";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':idUser',$idUser , PDO::PARAM_INT);
        $stmt->bindValue(':idSurvey',$idSurvey , PDO::PARAM_INT);
        return $stmt->execute();
        }catch(PDOException $e){
         return  $e->getMessage();
        }
        
    }
    public function voteUserList($idSurvey,$idUser){
        $sql ="SELECT * FROM `vote` WHERE `id_survey`=:idSurvey AND `id_user`=:idUser;";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':idSurvey',$idSurvey , PDO::PARAM_INT);
        $stmt->bindValue(':idUser',$idUser , PDO::PARAM_INT);
        $stmt->execute();
        $survay = $stmt->fetch();
        return $survay; 
    }

}