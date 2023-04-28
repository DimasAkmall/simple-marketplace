<?php

class Barang {
    protected $con;
    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=db_toko", 'root', '');
    }

    public function getAllNew() {
        $query = $this->con->prepare('SELECT barang.id, barang.namaBrg, barang.harga, barang.gambar, kategori.kategori FROM barang LEFT JOIN kategori ON barang.kategori = kategori.id ORDER BY id DESC LIMIT 18');
        $query->execute();
        return $query->fetchAll();
    }

    public function getBarangById($id) {
        $query = $this->con->prepare('SELECT barang.id, barang.namaBrg, barang.harga, barang.gambar, barang.desc, kategori.kategori FROM barang LEFT JOIN kategori ON barang.kategori = kategori.id WHERE barang.id=:id');
        $query->bindParam(":id", $id);
        $query->execute();
        return $query->fetchAll();
    }
}
