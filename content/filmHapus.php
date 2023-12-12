<?php

require_once("koneksi.php");

$id = $_GET['id'];
$result = $koneksinya->query("DELETE FROM film where id = '$id'");

if ($result === TRUE) {
    echo "<script>window.location.href='film.php'</script>";
    exit;
} else {
    echo "TERJADI KESALAHAN";
}
