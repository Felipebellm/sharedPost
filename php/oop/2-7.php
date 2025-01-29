<?php

    class User {
        public $name;
        public $age;
        public static  $minPassLenght = 6;

        public static function validatePass($pass) {
            if (strlen($pass) >= self::$minPassLenght) {
                return true;
            } else {
                return false;
            }
        }
    }

    $password = "hello";
    if (User::validatePass($password)) {
        echo "password valid";
    } else {
        echo "password not valid";
    }