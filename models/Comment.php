<?php
   require_once(dirname(__FILE__).'/../utils/database.php');
   class User{
    private $_id;
    private $_comment;
    private $_id_user;
    private $_gender;

    public function __construct($mail=NULL, $birthdate=NULL, $gender=NULL, $pseudo=NULL, $password=NULL , $admin=false)
    {
        $this->_id= $mail;
        $this->_comment= $birthdate;
        $this->_id_user= $gender;
        $this->_pseudo= $pseudo;

        $this-> _pdo = Database::connectToBdd();
    }
   } 