<?php $warnaMenu = 'user'; ?>
<?php require_once("template/header.php"); ?>
<?php

//DATABASE CONNECT
require_once("koneksi.php");

$hasilData = $koneksinya->query("SELECT*FROM user");
?>
<h1><center>User</center></h1> <br>
<!-- MULAI KONTEN -->
<div class="row mb-4">
    <div class="col-lg-12 text-right">
        <a href="userTambah.php" class="btn btn-primary">Tambah User</a>
    </div>
</div>
<div class="row card">
    <div class="col-xl-11">
        <!-- ISI KONTEN -->
        <table class="table">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Foto</th>
                <th scope="col">Domisili</th>
            </tr>
            <?php $i = 1;
            foreach ($hasilData as $data) : ?>
                <tr>
                    <th scope="row"> <?= $i++ ?>. </th>
                    <td><?= $data['username'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><img src="<?= $data['foto'] ?> " width="60"></td>
                    <td><?= $data['alamat'] ?></td>
                    <td>
                        <a href="userUbah.php?id=<?= $data['id'] ?>" class="btn btn-success">
                            Edit</a>
                        <a href="userHapus.php?id=<?= $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus !?')">
                            Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<!-- END KONTEN -->
<?php require_once("template/footer.php"); ?>