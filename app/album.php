<?php

namespace App;

class Album extends koneksi{

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_album INNER JOIN tb_artist ON tb_artist.artist_id= tb_album.album_id";
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
        $i_id_artist = $_POST['i_id_artist'];

        $sql = "INSERT INTO tb_album VALUES (NULL, :album_name, :artist_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":album_name", $i_nama);
        $stmt->bindParam(":artist_id", $i_id_artist);
        $stmt->execute();
    }
}