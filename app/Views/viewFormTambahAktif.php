<h1>Silakan ubah  data  Buku dengan data yang baru</h1>

<form action="/controllerWebsaya/methodRekamEdit/" method="post">
    <label for="fId">ID:</label><br>
    <input type="text" id="fId" name="fId" value="<?= $spec['id']; ?>" size="45"><br>

    <label for="fSampul">Sampul:</label><br>
    <input type="text" id="fSampul" name="fSampul" value="<?= $spec['sampul']; ?>" size="45"><br>

    <label for="fJudul">Judul:</label><br>
    <input type="text" id="fJudul" name="fJudul" value="<?= $spec['judul']; ?>" size="45"><br>

    <label for="fPengarang">Pengarang:</label><br>
    <input type="text" id="fPengarang" name="fPengarang" value="<?= $spec['pengarang']; ?>" size="45">

    <br><br>
    <input type="submit" value="REKAM" class="btn btn-danger">
</form>
<br><br><br>
