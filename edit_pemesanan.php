<div class="card">
    <div class="card-header">
    <a href="user.php" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>
    </div>
    <div class="card-body">
    <?php
    $data = file('pemesanan.txt', FILE_IGNORE_NEW_LINES);
    $id_pemesanan = $_Get['id_pemesanan'];
    foreach($data as $value){
    $pecah = explode('|', $value);
    if($pecah['0']==$id_pemesanan){
    ?>
    <form action="simpan_pemesanan.php" method="post">
        <div class="form-group">
            <label>Pilih Tanggal</label>
            <input value="<?=$pecah['3'] ?>"  name="tanggal" type="date" required class="form-control" placeholder="Masukan Tanggal">
        </div>
        <div class="form-group">
            <label>Pilih Jam</label>
            <input value="<?=$pecah['4'] ?>" name="jam" type="time" required class="form-control" placeholder="Masukan Jam">
        </div>
        <div class="form-group">
            <label>Pilih Lokasi</label>
            <input value="<?=$pecah[''] ?>" name="lokasi" type="text" required class="form-control" placeholder="Masukan Lokasi">
        </div>
        <div class="form-group">
            <label>Suhu Tubuh</label>
            <input name="suhu" type="text" required class="form-control" placeholder="Masukan Suhu Tubuh">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-facebook"><i class="fa fa-save"></i> SIMPAN </button>
            <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> HAPUS </button>
        </div>
    </form>
    <?php } } ?>
    </div>
</div>