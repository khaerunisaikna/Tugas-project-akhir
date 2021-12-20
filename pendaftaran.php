    <!-- START CONTENT -->
    <main role="main" class="m-5">
        <div class="container">
            <h4>FORMULIR PENDAFTARAN</h4>
            <hr>
            <form action="../../controller/daftar.php" method="POST"  enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <h5>BIODATA</h5>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama" required>
                        </div>
                        <div class="form-group">
                            <label for="telpon">No. Telpon</label>
                            <input type="text" class="form-control" id="telpon" name="telpon" placeholder="masukkan telpon" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="masukkan alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="masukkan email" required>
                        </div>
                    </div>
                </div>
                <hr>
                <h5>Bukti Pembayaran</h5>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="foto">foto(JPEG)</label>
                            <input type="file" name="foto" id="foto" required>
                        </div>
                    </div>
                </div> 
                <hr>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="cek" required>
                    <label class="form-check-label" for="cek">Pastikan data data yang anda masukkan merupakan data yang asli dan tidak dibuat buat</label>
                </div>
                <hr>
                <button class="btn btn-primary btn-block btn-lg mt-4" type="submit" name="daftar"><i class="fa fa-paper-plane"></i> Daftar</button>    
            </form>
        </div>
    </main>
    <!-- END CONTENT -->