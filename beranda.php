<!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container text-center">
                <h1 class="display-3">MUSIC.CO FESTIVAL 2022</h1>
                <h4>THE BIGEST PENSI IN INDONESIA</h4>
            </div>
        </div>

        <div class="container text-center py-5 my-5">
        
            <div id="countdown"></div>
            
        </div>

        <hr>

        <div class="container p-3">
            <!-- Example row of columns -->
            <div class="text-center">
                <h3>MUSIC IS LIVE,ALIVE IS A MUSIC</h3>
            </div>
            <div class="text-center mt-5">
            <h5>70% DARI HASIL PENJUALAN TIKET AKAN DISUMBANGKAN KE SAUDARA KITA DI SEMERU,LOMBOK,DAN MAKASSAR</h5>
            </div>

        </div> <!-- /container -->

        <hr>

        <div class="container p-3">
            <h2 class="text-center">GUESS STAR</h2>
            <div class="row">
                <div class="col text-right">
                    <h5>DIPHA BARUS</h5>
                    <h5>TONY Q</h5>
                    <h5>AFGAN</h5>
                </div>
                <div class="col-1 text-center">
                    <h5>o</h5>
                    <h5>o</h5>
                    <h5>o</h5>
                    <h5>o</h5>
                </div>
                <div class="col">
                    <h5>ISYANA SARASWATI</h5>
                    <h5>RAISA</h5>
                    <h5>ROSSA</h5>
                    <h5>WEIRD GENIUS</h5>
                </div>
            </div>
        </div>

        <hr>

        <div class="container p-3">
            <div class="row">
                <div class="col-8">
                    <h4>Sponsor</h4>
                    <img src="../../assets/img/sosro.jpg" alt="" width="200">
                    <img src="../../assets/img/pocari.jpg" alt="" width="200">
                    <img src="../../assets/img/coco.jpg" alt="" width="200">
                    <img src="../../assets/img/unilever.png" alt="" width="200">
                    <img src="../../assets/img/bca.png" alt="" width="200">
                </div>
                <div class="col-4">
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h6>FUN</h6>
                        </div>
                    </div>
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h6>COOL</h6>
                        </div>
                    </div>
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h6>INTERESTING</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
        include "../../controller/connect.php";
        $query = mysqli_query($connect, "SELECT * FROM countdown");
        $data = mysqli_fetch_array($query);
        $tgl = $data['tanggal'];
        $tgl = date("m/d/Y", strtotime($tgl));
    ?>
<script type="text/javascript">

    var target = new Date("<?= $tgl ?>").getTime();

    var hari, jam, menit, detik;

    var countdown = document.getElementById("countdown");

    setInterval(function () {

    var sekarang = new Date().getTime();
    var sisa = (target - sekarang) / 1000;

    hari = parseInt(sisa / 86400);
    sisa = sisa % 86400;
    jam = parseInt(sisa / 3600);
    sisa = sisa % 3600;
    menit = parseInt(sisa / 60);
    detik = parseInt(sisa % 60);

    countdown.innerHTML = "<h1> Ayo segera daftar</h1><h1 class='d-inline'>"+hari+" hari </h1><h1 class='d-inline'>"+jam+" jam </h1><h1 class='d-inline'>"+menit+" menit </h1><h1 class='d-inline mt-5'>"+detik+" detik</h1>";
    }, 1000);

</script>