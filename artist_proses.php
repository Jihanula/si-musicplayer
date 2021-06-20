<?php
require_once "inc/config.php";

$artist = new App\Artist();

if (isset($_POST['b_input'])) {
    $artist->input();
    header("location:index.php?page=artist_tampil");
}

if (isset($_POST['b_edit'])) {
    $artist->update();
    header("location:index.php?page=artist_tampil");
}