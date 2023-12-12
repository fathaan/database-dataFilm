<?php $warnaMenu = 'film'; ?>
<?php require_once("template/header.php"); ?>

<?php

//DATABASE CONNECT
require_once("koneksi.php");

//Jika ada POST atau data yg dikirim
if ($_SERVER['REQUEST_METHOD'] == "POST"){

        //Maka Terima Data Tersebut    
        $judul      = $_POST['judulFilm'];
        $genre      = $_POST['genreFilm'];
        $durasi     = $_POST['durasiFilm'];
        $sutradara  = $_POST['sutradara'];

        // Mengambil informasi file cover
        $cover      = $_FILES['cover']['name'];
        $tmp_name   = $_FILES['cover']['tmp_name'];

        // Mendapatkan ekstensi file
        $fileExtension = strtolower(pathinfo($cover, PATHINFO_EXTENSION));

        // Menentukan format yang diizinkan
        $syaratFormat = ['jpg', 'jpeg', 'png', 'jfif'];

        // Memeriksa apakah ekstensi file diizinkan
        if (!in_array($fileExtension, $syaratFormat)) {
            echo "ERROR: Format file tidak diizinkan. Gunakan format JPG, JPEG, PNG, atau JFIF.";
            echo <<<HTML
            <div class="row">
                <div class="col-lg-12 text-right mb-5">
                    <a href="filmTambah.php" class="btn btn-danger" >Kembali</a>
                </div>
            </div>
            HTML;
            exit;
        }

        // Memindahkan file ke lokasi yang ditentukan
        move_uploaded_file($tmp_name, __DIR__ . '/../asset/images/' . $cover);

        // / Menyusun path cover secara relatif
        $pathCover = '../asset/images/' . $cover;

        // Menyimpan informasi file dan data ke database
        $hasilnya = $koneksinya->query("INSERT INTO film(judulFilm, genreFilm, durasiFilm, sutradara, cover) 
        VALUES( '$judul', '$genre', '$durasi', '$sutradara', '$pathCover')");

        if($hasilnya === TRUE){
            echo "<script>window.location.href='film.php'</script>";
            exit;
        } else {
            echo "TERJADI KESALAHAN";
        }
}


?>
 <h1>TAMBAH FILM</h1> <br>
<!-- MULAI KONTEN -->
    <div class="row mb-4">
        <div class="col-lg-12 text-right">
            <a href="film.php" class="btn btn-danger" >Kembali</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row mb-4">
                    <div class="col-6 mt-3">
                        <label class=" ml-2" for="judulFilm">Judul Film</label>
                        <input type="text" class="form-control" name="judulFilm" placeholder="Masukan Judul">
                    </div>
                    <div class="col-6 mt-3">
                        <label class=" ml-2" for="genreFilm">Genre Film</label>
                        <input type="text" class="form-control" name="genreFilm" placeholder="Masukan Genre">
                    </div>
                    <div class="col-6 mt-3">
                        <label class=" ml-2" for="durasiFilm">Durasi Film</label>
                        <input type="text" class="form-control" name="durasiFilm" placeholder="Masukan Durasi">
                    </div>
                    <div class="col-6 mt-3">
                        <label class=" ml-2" for="sutradara">Sutradara</label>
                        <input type="text" class="form-control" name="sutradara" placeholder="Masukan Nama Sutradara">
                    </div>
                    <div class="col-6 mt-3">
                        <label class=" ml-2" for="cover">Cover Film</label>
                        <input type="file" class="form-control" name="cover" accept="'jpg', 'jpeg', 'png', 'jfif'">
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