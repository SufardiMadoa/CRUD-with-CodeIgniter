<h1>Detail Buku</h1>

<br> <img src="/gambar/<?= $spec['sampul']; ?>" width="200" alt="">
<br> ID : <?= $spec['id']; ?>
<br> Judul : <?= $spec['judul']; ?>
<br> Pengarang : <?= $spec['pengarang']; ?>

<br><br><br>
<a href="/controllerWebsaya/methodFormEditPasif/<?= $spec['id']; ?>" class="btn btn-warning">Edit</a>
<a href="/controllerWebsaya/methodHapus/<?= $spec['id']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?')">Delete</a>
<br><br>
<a href="/controllerWebsaya/methodKatalogDatabase">Kembali ke daftar buku</a>
