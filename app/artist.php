<?php

namespace App;

class Artist extends koneksi{

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_artist";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    } 
    
    public function input()
    {
        $i_nama = $_POST['i_nama'];

        $sql = "INSERT INTO tb_artist VALUES (NULL, :artist_name)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":artist_name", $i_nama);
        $stmt->execute();
    }
}