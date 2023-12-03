<!-- ------------- HEADER ------------- -->
<?php $warnaMenu = 'film'; ?>
<?php require_once("template/header.php"); ?>
<!-- ---------------------------------- -->

<?php 

//DATABASE CONNECT
require_once("koneksi.php");

$hasilData = $koneksinya->query("SELECT*FROM film");
?>
<h1>FILM</h1> <br>
<!-- ______________ MULAI KONTEN ______________ -->
    <div class="row mb-4">
        <div class="col-lg-12 text-right">
            <a href="tambahData.php" class="btn btn-primary" >Tambah Film</a>
        </div>
    </div>

    <div class="row card">
<?php require_once("template/header.php"); ?>
<!-- ---------------------------------- -->

<?php //DATABASE CONNECT
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_film";

$koneksinya = new mysqli($hostname, $username, $password, $database);

$hasilData = $koneksinya->query("SELECT*FROM film");
?>

<!-- ______________ MULAI KONTEN ______________ -->
    <div class="row">
        <div class="col-xl-11">
            <!-- ISI KONTEN -->
            <table class="table">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Durasi</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Sutradara</th>  
                        </tr>
                    <?php $i = 1; foreach($hasilData as $data):?>
                        <tr>
                            <th scope="row"> <?=$i++?>. </th>
                            <td><?= $data['judulFilm'] ?></td>
                            <td><?= $data['genreFilm'] ?></td>
                            <td><?= $data['durasiFilm'] ?></td>
                            <td><img src="<?= $data['cover'] ?> " width="60"></td>
                            <td><?= $data['sutradara'] ?></td>
                        </tr>
                    <?php endforeach; ?>
<<<<<<< HEAD
            </table>
        </div>
    </div>

    <!-- <button class="au-btn au-btn-icon au-btn--green">
    <i class="zmdi zmdi-plus"></i>add Film</button> -->
=======
                </table>
        </div>
    </div>
>>>>>>> 63e3e577e39972c3501cc04a835ac0de37a7b00b
<!-- ______________ AKHIR KONTEN ______________ -->

<!-- ------------- FOOTER ------------- -->
<?php require_once("template/footer.php"); ?>
<!-- ---------------------------------- -->
