<div class="card">
    <div class="card-header">
    <a href="user.php" class="btn btn-facebook btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
    </div>
    <div class="card-body">
    <form action="simpan_catatan.php" method="post">
        <div class="form-group">
            <label>Tanggal Check In</label>
            <input name="tanggal" type="date" required class="form-control" placeholder="Masukan Tanggal Check In">
        </div>
        <div class="form-group">
            <label>Tanggal Check Out</label>
            <input name="jam" type="date" required class="form-control" placeholder="Masukan Tanggal Check Out">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input name="lokasi" type="text" required class="form-control" placeholder="Masukan Nama">
        </div>
        <div class="form-group">
            <label>Jumlah Kamar</label>
            <input name="suhu" type="text" required class="form-control" placeholder="Masukan Jumlah Kamar">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-facebook"><i class="fa fa-save"></i> SIMPAN </button>
            <button type="reset" class="btn btn-dark"><i class="fa fa-trash"></i> HAPUS </button>
        </div>
    </form>
    </div>
</div>