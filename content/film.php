<!-- ------------- HEADER ------------- -->
<?php $warnaMenu = 'film'; ?>
<?php require_once("template/header.php"); ?>
<!-- ---------------------------------- -->

<?php

//DATABASE CONNECT
require_once("koneksi.php");

// $hasilData = $koneksinya->query("SELECT*FROM film");
$query = "SELECT film.id, film.judulFilm, genre.genre, film.durasiFilm, film.sutradara, film.cover
          FROM film
          JOIN genre ON film.idGenre = genre.idGenre";
$hasilData = $koneksinya->query($query);

?>
<h1>
    <center>FILM</center>
</h1> <br>
<!-- ______________ MULAI KONTEN ______________ -->
<div class="row mb-4">
    <div class="col-lg-12 text-right">
        <a href="filmTambah.php" class="btn btn-primary">Tambah Film</a>
    </div>
</div>

<div class="row card">
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
            <?php $i = 1;
            foreach ($hasilData as $data) : ?>
                <tr>
                    <th scope="row"> <?= $i++ ?>. </th>
                    <td><?= $data['judulFilm'] ?></td>
                    <td><?= $data['genre'] ?></td>
                    <td><?= $data['durasiFilm'] ?></td>
                    <td><img src="<?= $data['cover'] ?>" width="60"></td>
                    <td><?= $data['sutradara'] ?></td>
                    <td>
                        <a href="filmUbah.php?id=<?= $data['id'] ?>" class="btn btn-success">
                            Edit</a>
                        <a href="filmHapus.php?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus !?')">
                            Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<!-- <button class="au-btn au-btn-icon au-btn--green">
    <i class="zmdi zmdi-plus"></i>add Film</button> -->
<!-- ______________ AKHIR KONTEN ______________ -->

<!-- ------------- FOOTER ------------- -->
<?php require_once("template/footer.php"); ?>
<!-- ---------------------------------- -->