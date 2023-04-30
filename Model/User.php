
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

    public function getAll() {
        $query = $this->con->prepare('SELECT * FROM users');
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

    public function updateUser($id, $username) {
        $query = $this->con->prepare('UPDATE users SET username=:username WHERE id=:id');
        $query->bindParam(":id", $id);
        $query->bindParam(":username", $username);


        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($id) {
        $query = $this->con->prepare("DELETE FROM users WHERE id=:id");
        $query->bindParam(":id", $id);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
