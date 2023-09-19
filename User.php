<?php

class User {
    private $username;
    private $email;
    private $age;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setAge($age) {
        if ($age >= 0) {
            $this->age = $age;
        } else {
            echo "Age cannot be negative.";
        }
    }

    public function testAge($age) {
            echo "Test age!";
    }

    public function displayUserInfo() {
        echo "Username: " . $this->getUsername() . "<br>";
        echo "Email: " . $this->getEmail() . "<br>";
        echo "Age: " . $this->getAge() . "<br>";
    }
}
