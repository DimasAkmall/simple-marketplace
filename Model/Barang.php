<?php

class Barang {
    protected $con;
    public function __construct() {
        $this->con = new PDO("mysql:host=localhost;dbname=db_toko", 'root', '');
    }

    public function getAll() {
        $query = $this->con->prepare('SELECT * FROM barang');
        $query->execute();
        return $query->fetchAll();
    }

    public function getAllNew() {
        $query = $this->con->prepare('SELECT barang.id, barang.namaBrg, barang.harga, barang.gambar, kategori.kategori FROM barang LEFT JOIN kategori ON barang.kategori = kategori.id ORDER BY id DESC LIMIT 18');
        $query->execute();
        return $query->fetchAll();
    }

    public function getBarangById($id) {
        $query = $this->con->prepare('SELECT barang.id, barang.kodeBrg, barang.namaBrg, barang.harga, barang.gambar, barang.desc, kategori.kategori FROM barang LEFT JOIN kategori ON barang.kategori = kategori.id WHERE barang.id=:id');
        $query->bindParam(":id", $id);
        $query->execute();
        return $query->fetchAll();
    }

    public function getBarangByKategori($kategori) {
        $query = $this->con->prepare('SELECT barang.id, barang.namaBrg, barang.harga, barang.gambar, kategori.kategori FROM barang LEFT JOIN kategori ON barang.kategori = kategori.id WHERE kategori.kategori = :kategori ORDER BY id DESC');
        $query->bindParam(":kategori", $kategori);
        $query->execute();
        return $query->fetchAll();
    }

    public function insertBarang($kode, $nama, $harga, $gambar, $desc, $kategori) {
        $query = $this->con->prepare('INSERT INTO barang(id, kodeBrg, namaBrg, harga, gambar,`desc`, kategori) VALUES ( "", :kode, :nama, :harga, :gambar, :desc, :kategori)');
        $query->bindParam(":kode", $kode);
        $query->bindParam(":nama", $nama);
        $query->bindParam(":harga", $harga);
        $query->bindParam(":gambar", $gambar);
        $query->bindParam(":desc", $desc);
        $query->bindParam(":kategori", $kategori);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateBarang($id, $kode, $nama, $harga, $gambar, $desc, $kategori) {
        $query = $this->con->prepare('UPDATE barang SET kodeBrg=:kode, namaBrg=:nama, harga=:harga, gambar=:gambar, `desc`=:desc, kategori=:kategori WHERE id=:id');
        $query->bindParam(":id", $id);
        $query->bindParam(":kode", $kode);
        $query->bindParam(":nama", $nama);
        $query->bindParam(":harga", $harga);
        $query->bindParam(":gambar", $gambar);
        $query->bindParam(":desc", $desc);
        $query->bindParam(":kategori", $kategori);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteBarang($id) {
        $query = $this->con->prepare("DELETE FROM barang WHERE id=:id");
        $query->bindParam(":id", $id);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
