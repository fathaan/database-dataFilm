<?php $warnaMenu = 'genre'; ?>
<?php require_once("template/header.php"); ?>

<?php
//DATABASE CONNECT
require_once("koneksi.php");

$hasilData = $koneksinya->query("SELECT*FROM genre");
?>

<h1>
    <center>GENRE</center>
</h1> <br>
<!-- MULAI KONTEN -->
<div class="row mb-4">
    <div class="col-lg-12 text-right">
        <a href="genreTambah.php" class="btn btn-primary">Tambah Genre</a>
    </div>
</div>
<div class="row card">
    <div class="col-xl-11">
        <!-- ISI KONTEN -->
        <table class="table">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Genre</th>
            </tr>
            <?php $i = 1;
            foreach ($hasilData as $data) : ?>
                <tr>
                    <th scope="row"> <?= $i++ ?>. </th>
                    <td><?= $data['genre'] ?></td>
                    <td class="text-right">
                        <a href="genreHapus.php?id=<?= $data['idGenre'] ?>" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus !?')">
                            Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<!-- END KONTEN -->
<?php require_once("template/footer.php"); ?>