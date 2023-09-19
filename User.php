<?php

class User {
    private $username;
    private $email;
    private $age;

    public function setUsername($username) {
        Echo "Update username";
        $this->username = $username;
    }

    public function getUsername() {
        Echo "Get username";
        return $this->username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        Echo "Get Email";
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
