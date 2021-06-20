<?php

namespace App;

class Played extends koneksi{

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_played INNER JOIN tb_artist ON tb_artist.artist_id=tb_played.artist_id
        INNER JOIN tb_album ON tb_album.album_id=tb_played.album_id
        INNER JOIN tb_track ON tb_track.track_id=tb_played.track_id";
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
        $i_id_album = $_POST['i_id_album'];
        $i_id_artist = $_POST['i_id_artist'];
        $i_id_track = $_POST['i_id_track'];

        $sql = "INSERT INTO tb_played VALUES (NULL, :played, :played_id_album, :played_id_artist, :played_id_track)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":played", $i_nama);
        $stmt->bindParam(":played_id_album", $i_id_album);
        $stmt->bindParam(":played_id_artist", $i_id_artist);
        $stmt->bindParam(":played_id_track", $i_id_track);
        $stmt->execute();
    }
}