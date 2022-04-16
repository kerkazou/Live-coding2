<?php
require_once ('Database.php');
    class User extends Database{
        public $id;
        public $usename;
        public $password;
        public $email;
        public $photo;
        public $registration_date;
        
        public function register(){
            static::query("INSERT INTO users(username,email,password,registration_date)".
            " VALUES('$this->username','$this->email','$this->password','$this->registration_date')");

        }

        public static function login($email, $password){
            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '".md5($password)."'";
            $res = static::query($sql);
            return $res;

        }

        public static function get($email){
 
        }

        public static function searchEmail($email)
        {
            $res = static::query("SELECT * FROM users WHERE email = '$email'");

            return $res;
        }
    }  