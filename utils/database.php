<?php
    class Database{

        private static $_pdo;

        public static function connectToBdd(){
            $dsn='mysql:dbname=manga_chosa;host=127.0.0.1';
            $user ='Zawa';
            $password ='Lulutho29@';
            try{
                if(is_null(self::$_pdo)){
                   self::$_pdo = new PDO($dsn,$user,$password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
                }
           
            }catch(PDOException $e){
                echo 'Echec de la connection : '.$e->getMessage();
            }
            return self::$_pdo;
        }
    }