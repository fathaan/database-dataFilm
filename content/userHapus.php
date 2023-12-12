<?php

require_once("koneksi.php");

$id = $_GET['id'];
$result = $koneksinya->query("DELETE FROM user where id = '$id'");

if ($result === TRUE) {
    echo "<script>window.location.href='user.php'</script>";
    exit;
} else {
    echo "TERJADI KESALAHAN";
}