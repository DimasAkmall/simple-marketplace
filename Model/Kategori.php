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

    public function getKategoriById($id) {
        $query = $this->con->prepare('SELECT * FROM kategori WHERE id=:id');
        $query->bindParam(":id", $id);
        $query->execute();
        return $query->fetchAll();
    }

    public function insertKategori($kategori, $gambar) {
        $query = $this->con->prepare("INSERT INTO kategori(kategori, gambar) VALUES (:kategori , :gambar)");
        $query->bindParam(":kategori", $kategori);
        $query->bindParam(":gambar", $gambar);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateKategori($id, $kategori, $gambar) {
        $query = $this->con->prepare('UPDATE kategori SET kategori=:kategori, gambar=:gambar WHERE id=:id');
        $query->bindParam(":id", $id);
        $query->bindParam(":kategori", $kategori);
        $query->bindParam(":gambar", $gambar);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteKategori($id) {
        $query = $this->con->prepare("DELETE FROM kategori WHERE id=:id");
        $query->bindParam(":id", $id);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
