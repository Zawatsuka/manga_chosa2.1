<?php
require_once(dirname(__FILE__).'/../utils/database.php');
class User{

    private $_id;
    private $_mail;
    private $_pseudo;
    private $_gender;
    private $_password;
    private $_birthdate;
    private $_admin;

    private $_pdo;



    public function __construct($mail=NULL, $birthdate=NULL, $gender=NULL, $pseudo=NULL, $password=NULL , $admin=false)
    {
        $this->_mail= $mail;
        $this->_birthdate= $birthdate;
        $this->_gender= $gender;
        $this->_pseudo= $pseudo;
        $this->_password= $password;
        $this->_admin = $admin;

        $this-> _pdo = Database::connectToBdd();
    }

    public function addUser(){
        $sql ="INSERT INTO `user` (`mail`,`pseudo`,`gender`,`birthDate`,`password`,`admin`)VALUE 
        (:mail,:pseudo,:gender,:birthDate,:password,:admin);";
        $stmt = $this->_pdo->prepare($sql);
        $stmt->bindValue(':mail',$this->_mail , PDO::PARAM_STR);
        $stmt->bindValue(':pseudo',$this->_pseudo , PDO::PARAM_STR);
        $stmt->bindValue(':gender',$this->_gender , PDO::PARAM_STR);
        $stmt->bindValue(':birthDate',$this->_birthdate , PDO::PARAM_STR);
        $stmt->bindValue(':password',$this->_password , PDO::PARAM_STR);
        $stmt->bindValue(':admin',$this->_admin , PDO::PARAM_BOOL);
        $stmt->execute();
        return $this-> _pdo->lastInsertId();
        
    }

    public function listOfUser(){
        $sql = "SELECT * FROM `user`";
        $sth = $this->_pdo->prepare($sql);
        $sth->execute();
        $patients = $sth->fetchAll();
        return $patients; 
    }

    public function DeletedUser($idUser){
        $sql = "DELETE FROM `user` WHERE `id` = :idUser;";
        $stmt = $this->_pdo->prepare($sql);
        $stmt-> bindValue(':idUser' , $idUser , PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function UserPage($idUser){
        $sql = "SELECT * FROM `user` WHERE `id`= :idUser;";
        $stmt = $this->_pdo->prepare($sql);
        $stmt-> bindValue(':idUser' , $idUser , PDO::PARAM_INT);
        $stmt->execute();
        $patients = $stmt->fetch();
        return $patients; 
    }

    public function updateUser($idUser){
        try{
            $sql = "UPDATE `user` SET `mail`=:mail,
             `pseudo`=:pseudo,
             `gender`=:gender,
             `birthDate`=:birthDate,
             `password`= :password
            WHERE `id` = :id;";
            $stmt = $this->_pdo->prepare($sql);
            $stmt->bindValue(':mail',$this->_mail , PDO::PARAM_STR);
            $stmt->bindValue(':pseudo',$this->_pseudo , PDO::PARAM_STR);
            $stmt->bindValue(':gender',$this->_gender , PDO::PARAM_STR);
            $stmt->bindValue(':birthDate',$this->_birthdate , PDO::PARAM_STR);
            $stmt->bindValue(':password',$this->_password , PDO::PARAM_STR);
            $stmt -> bindValue(':id',$idUser, PDO::PARAM_INT);
            return $stmt->execute();
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function getUserLogin($mail, $password){

        $sql = "SELECT *  FROM `user` WHERE `mail` = :mail ;";
        $stmt = $this->_pdo->prepare($sql);

        // association des paramètres  
        $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
        if($stmt->execute()){ // envoie de la requête
            $user = $stmt->fetch();
            if($user){
                // retourne l'id user si le mot de passe est vérifié
                if(password_verify($password, $user->password)){
                    return $user;
                } 
            }
        }
        return false;
    }
}
