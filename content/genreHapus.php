<?php

require_once("koneksi.php");

$id = $_GET['idGenre'];
$result = $koneksinya->query("DELETE FROM genre where idGenre = '$id'");


if ($result === TRUE) {
    echo "<script>window.location.href='genre.php'</script>";
    exit;
} else {
    echo "TERJADI KESALAHAN";
}
