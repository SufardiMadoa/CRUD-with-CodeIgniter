<h1>Detail Buku</h1>

<form>
    <label for="fId">ID:</label><br>
    <input type="text" id="fId" name="fId" value="<?= $spec['id']; ?>" size="45" readonly disabled><br>

    <label for="fSampul">Sampul:</label><br>
    <input type="text" id="fSampul" name="fSampul" value="<?= $spec['sampul']; ?>" size="45" readonly disabled><br>

    <label for="fJudul">Judul:</label><br>
    <input type="text" id="fJudul" name="fJudul" value="<?= $spec['judul']; ?>" size="45" readonly disabled><br>

    <label for="fPengarang">Pengarang:</label><br>
    <input type="text" id="fPengarang" name="fpengarang" value="<?= $spec['pengarang']; ?>" size="45" readonly disabled>
</form>
<br><br><br>
<a href="/controllerWebsaya/methodFormEditAktif/<?= $spec['id']; ?>" class="btn btn-warning"> Aktifkan Mode Edit </a>
