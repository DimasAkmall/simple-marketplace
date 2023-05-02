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

    public function insertKeranjang($id_user, $id_barang, $jumlah) {
        $query = $this->con->prepare('INSERT INTO keranjang(id_user, id_barang, jumlah) VALUES (:id_user,:id_barang,:jumlah)');
        $query->bindParam(":id_user", $id_user);
        $query->bindParam(":id_barang", $id_barang);
        $query->bindParam(":jumlah", $jumlah);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateKeranjang($id, $jumlah) {
        $query = $this->con->prepare('UPDATE keranjang SET jumlah = :jumlah WHERE id = :id');
        $query->bindParam(":id", $id);
        $query->bindParam(":jumlah", $jumlah);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteKeranjang($id) {
        $query = $this->con->prepare("DELETE FROM keranjang WHERE id=:id");
        $query->bindParam(":id", $id);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteKeranjangByUsername($idUser) {
        $query = $this->con->prepare("DELETE FROM keranjang WHERE id_user=:id");
        $query->bindParam(":id", $idUser);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
