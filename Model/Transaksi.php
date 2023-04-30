<?php

class Transaksi {
    protected $con;
    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=db_toko", 'root', '');
    }

    public function getAll() {
        $query = $this->con->prepare('SELECT transaksi.idTransaksi, transaksi.tglTransaksi, transaksi.total, users.username FROM transaksi LEFT JOIN users ON transaksi.idUser = users.id');
        $query->execute();
        return $query->fetchAll();
    }
}
