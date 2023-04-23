<?php
class User {
    protected $con;
    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=db_toko", 'root', '');
    }

    public function getUser($username) {
        $query = $this->con->prepare('SELECT * FROM users WHERE username=:username');
        $query->bindParam(":username", $username);
        $query->execute();
        return $query->fetchAll();
    }

    public function insertUser($username, $password) {
        $query = $this->con->prepare("INSERT INTO users(username, password) VALUES (:username , :password)");
        $query->bindParam(":username", $username);
        $query->bindParam(":password", $password);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
