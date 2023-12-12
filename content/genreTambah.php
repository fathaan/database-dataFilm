<?php $warnaMenu = 'genre'; ?>
<?php require_once("template/header.php"); ?>

<?php
//DATABASE CONNECT
require_once("koneksi.php");

$hasilData = $koneksinya->query("SELECT*FROM genre");



if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $genre  = $_POST['genre'];

    // Menyimpan informasi file dan data ke database
    $hasilnya = $koneksinya->query("INSERT INTO genre(genre) VALUES( '$genre')");

    if($hasilnya === TRUE){
        echo "<script>window.location.href='genre.php'</script>";
        exit;
    } else {
        echo "TERJADI KESALAHAN";
    }
}


?>

<h1>
    <center>GENRE</center>
</h1> <br>
<!-- MULAI KONTEN -->
<div class="row mb-4">
    <div class="col-lg-12 text-right">
        <a href="genre.php" class="btn btn-danger">Kembali</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row mb-4">
                <div class="col-6 mt-3">
                    <label class=" ml-2" for="genre">Genre</label>
                    <input type="text" class="form-control" name="genre" placeholder="Masukan Genre Film">
                </div>

                <div class="col-6 mt-5 ml-1">
                    <button class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- END KONTEN -->
<?php require_once("template/footer.php"); ?>