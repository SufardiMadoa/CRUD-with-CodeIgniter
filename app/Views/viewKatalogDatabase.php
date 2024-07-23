<h1>Daftar Buku</h1>
<br>
<a href="/controllerWebsaya/methodFormTambahAktif" class="btn btn-success">Tambah data baru</a>
<br><br><br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Sampul</th>
            <th scope="col">Judul</th>
            <th scope="col">Pengarang</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($hasilbuku as $x) : ?>

            <tr>
                <th scope="row"><?= $x['id']; ?></th>
                <td><img src="/gambar/<?= $x['sampul']; ?>" width="50" alt=""></td>
                <td><?= $x['judul']; ?></td>
                <td><?= $x['pengarang']; ?></td>
                <td><a href="/controllerWebsaya/methodDetail/<?= $x['id']; ?>" class="btn btn-success">Lihat detail</a></td>
            </tr>

        <?php endforeach; ?>

    </tbody>
</table>
