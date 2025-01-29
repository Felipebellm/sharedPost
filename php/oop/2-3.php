<?php 
    // Define a class
    class User {
        //Properties (attributes)
        public $name;

        //Methods (functons)
        public function sayHello() {
            return $this->name . " Say Hello";
        }
    }

    // Instatiate a user object from the user class
    $user1 = new User();

    echo $user1->name = "Brad";
    echo "<br>";
    echo $user1->sayHello();

    echo "<br>";

    // CREATE NEW USER
    $user2 = new User();
    echo $user2->name = "Jeff";
    echo "<br>";
    echo $user2->sayHello();