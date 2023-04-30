<?php

class Transaksi {
    protected $con;
    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=db_toko", 'root', '');
    }

    public function getAll() {
        $query = $this->con->prepare('SELECT transaksi.idTransaksi, transaksi.tglTransaksi, transaksi.total, users.idUser FROM transaksi LEFT JOIN users ON transaksi.idUser = users.id');
        $query->execute();
        return $query->fetchAll();
    }

    public function insertTransaksi($idUser, $total) {
        $query = $this->con->prepare("INSERT INTO transaksi(idUser, total) VALUES (:idUser , :total)");
        $query->bindParam(":idUser", $idUser);
        $query->bindParam(":total", $total);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
