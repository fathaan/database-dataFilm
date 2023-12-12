<?php $warnaMenu = 'user'; ?>
<?php require_once("template/header.php"); ?>

<?php

//DATABASE CONNECT
require_once("koneksi.php");


//Jika ada Methode pengiriman data Get.
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    // Maka diambil id dari table film.
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = $koneksinya->query($sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username   = $row['username'];
        $email      = $row['email'];
        $alamat     = $row['alamat'];
    }
}

//Jika ada POST atau data yg dikirim
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $id = $_GET['id'];
    //Maka Terima Data Tersebut    
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $alamat     = $_POST['alamat'];

    // Mengambil informasi file cover
    $foto      = $_FILES['foto']['name'];
    $tmp_name   = $_FILES['foto']['tmp_name'];

    // Mendapatkan ekstensi file
    $fileExtension = strtolower(pathinfo($foto, PATHINFO_EXTENSION));

    // Menentukan format yang diizinkan
    $syaratFormat = ['jpg', 'jpeg', 'png', 'jfif'];

    // Memeriksa apakah ekstensi file diizinkan
    if (!in_array($fileExtension, $syaratFormat)) {
        echo "ERROR: Format file tidak diizinkan. Gunakan format JPG, JPEG, PNG, atau JFIF.";
        echo <<<HTML
        <div class="row">
            <div class="col-lg-12 text-right mb-5">
                <a href="userTambah.php" class="btn btn-danger" >Kembali</a>
            </div>
        </div>
        HTML;
        exit;
    }

    // Memindahkan file ke lokasi yang ditentukan
    move_uploaded_file($tmp_name, __DIR__ . '/../asset/images/' . $foto);

    // / Menyusun path foto secara relatif
    $pathFoto = '../asset/images/' . $foto;

    // Menyimpan informasi file dan data ke database
    // $hasilnya = $koneksinya->query("INSERT INTO user(username, email, alamat, foto) 
    // VALUES( '$username', '$email', '$alamat', '$pathFoto')");
    $hasilnya = $koneksinya->query("UPDATE user SET
        username    = '$username',
        email       = '$email',
        alamat      = '$alamat',
        foto        = '$pathFoto'
        where id    = '$id'
    ");

    if ($hasilnya === TRUE) {
        echo "<script>window.location.href='user.php'</script>";
        exit;
    } else {
        echo "TERJADI KESALAHAN";
    }
}


?>
<h1>TAMBAH USER</h1> <br>
<!-- MULAI KONTEN -->
<div class="row mb-4">
    <div class="col-lg-12 text-right">
        <a href="user.php" class="btn btn-danger">Kembali</a>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row mb-4">
                <div class="col-6 mt-3">
                    <label class=" ml-2" for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukan Username Anda" value="<?= $username; ?>">
                </div>
                <div class="col-6 mt-3">
                    <label class=" ml-2" for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Masukan Email Anda" value="<?= $email; ?>">
                </div>
                <div class="col-6 mt-3">
                    <label class=" ml-2" for="alamat">Domisili</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukan Domisili Anda" value="<?= $alamat; ?>">
                </div>
                <div class="col-6 mt-3">
                    <label class=" ml-2" for="foto">Foto</label>
                    <input type="file" class="form-control" name="foto" accept="'jpg', 'jpeg', 'png', 'jfif'" value="<?= $pathFoto; ?>">
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