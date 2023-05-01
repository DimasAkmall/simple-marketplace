
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

    public function getAll() {
        $query = $this->con->prepare('SELECT * FROM admins');
        $query->execute();
        return $query->fetchAll();
    }

    public function insertAdmin($username, $password) {
        $query = $this->con->prepare("INSERT INTO admins(username, password, role) VALUES (:username , :password, 'admin')");
        $query->bindParam(":username", $username);
        $query->bindParam(":password", $password);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateAdmin($id, $username) {
        $query = $this->con->prepare('UPDATE admins SET username=:username WHERE id=:id');
        $query->bindParam(":id", $id);
        $query->bindParam(":username", $username);


        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAdmin($id) {
        $query = $this->con->prepare("DELETE FROM admins WHERE id=:id");
        $query->bindParam(":id", $id);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
