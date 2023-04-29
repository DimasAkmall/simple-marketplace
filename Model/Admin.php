<?php
class Admin {
    protected $con;
    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=db_toko", 'root', '');
    }

    public function getAdmin($username) {
        $query = $this->con->prepare('SELECT * FROM admins WHERE username=:username');
        $query->bindParam(":username", $username);
        $query->execute();
        return $query->fetchAll();
    }
}
