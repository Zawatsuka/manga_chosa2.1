<?php
   require_once(dirname(__FILE__).'/../utils/database.php');
   class Comment{
    private $_comment;
    private $_id_user;
    private $_id_survey;
    private $_pdo;

    public function __construct($comment=NULL, $id_user=NULL, $id_survey=NULL)
    {
        $this->_comment= $comment;
        $this->_id_user= $id_user;
        $this->_id_survey= $id_survey;

        $this-> _pdo = Database::connectToBdd();
    }

    public function addComment(){
        $sql ='INSERT INTO `comment` (`comments`,`id_user`,`id_survey`)VALUE 
        (:comment,:id_user, :id_survey);';
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':comment',$this->_comment , PDO::PARAM_STR);
        $stmt->bindValue(':id_user',$this->_id_user , PDO::PARAM_INT);
        $stmt->bindValue(':id_survey',$this->_id_survey , PDO::PARAM_INT);
        $stmt->execute();
    }

    public function viewComment($idSurvey){
            $sql = "SELECT * FROM `comment` WHERE `id_survey`=:idSurvey;";
            $sth = $this->_pdo->prepare($sql);
            $sth->bindValue(':idSurvey',$idSurvey , PDO::PARAM_INT);
            $sth->execute();
            $patients = $sth->fetchAll();
            return $patients; 
        
    }
   } 