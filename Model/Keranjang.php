<?php

class Keranjang {
    protected $con;
    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=db_toko", 'root', '');
    }

    public function getKeranjangById($id_user) {
        $query = $this->con->prepare('SELECT * FROM keranjang WHERE id_user=:id_user');
        $query->bindParam(":id_user", $id_user);
        $query->execute();
        return $query->fetchAll();
    }
}
