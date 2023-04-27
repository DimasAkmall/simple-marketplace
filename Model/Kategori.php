<?php

class Kategori {
    protected $con;
    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=db_toko", 'root', '');
    }

    public function getAll() {
        $query = $this->con->prepare('SELECT * FROM kategori');
        $query->execute();
        return $query->fetchAll();
    }
}
