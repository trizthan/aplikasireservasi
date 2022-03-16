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
    <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                            <th>Nama</th>
                                            <th>Jumlah Kamar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $no=1;
                                    $data = file('pemesanan.txt', FILE_IGNORE_NEW_LINES);
                                    $user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];
                                    foreach($data as $value){
                                        $pecah = explode("|", $value);
                                        @$key = $pecah['0']."|".$pecah['1'];
                                        if($key==$user){
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $pecah['2']; ?></td>
                                            <td><?= $pecah['3']; ?></td>
                                            <td><?= $pecah['4']; ?></td>
                                            <td><?= $pecah['5']; ?></td>
                                        </tr>
                                    <?php } } ?>
                                    </tbody>
                                </table>
    </div>
    </div>
</div>