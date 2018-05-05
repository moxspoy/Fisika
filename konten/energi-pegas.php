<?php
/**
 * Created by PhpStorm.
 * User: EQI
 * Date: 8/3/2017
 * Time: 5:33 PM
 */
include 'masterview.php';
?>
<section id="portfolio">
    <div class="container" style="padding: 5%">
        <div class="row">
            <div class="col-lg-8 text-center">
                <h2>ENERGI PADA SISTEM PEGAS</h2>
                <br>
                <br>
                <br>
                <h3>Energi Potensial</h3>
                <p class="narrow text-justify">
                
                    Pada energi potensial di gunakan kemudian di tinjau pada sifat elastis yang ada pada pegas, sehingga energi potensial pada pegas dapat di simpulkan usaha rata-rata yang di lakukan pada pegas, berupa tarikan atau dorongan.
                    <br>
                    Energi Potenisial yang ada pada pegas menggunakan rumus :
                    <center>W = ∆Ep = Fs  <br>
                    Kemudian, rata-rata energi potensial pegas menggunakan : <br>
                    W=  1/2 kx^2 awal- kx^2 akhir <br>
                    w= Ep=  1/2 k∆x^2 <br>
                    </center>
                    </p>
                <p class="narrow text-justify">
                    Ketika pegas di gantung bebas, akan membuat gaya gravitasi dapat mempengaruhi sistem pegas yang telah ada, dan membuat sistem pegas memiliki energi potensial gravitasi
                </p>
                    <center>EpP=mgh</center>
                    <p class="narrow text-left">
                    Keterangan : 
                    W   : Usaha ( J )
                    S   : Perpindahan pegas ( m )
                    EP  : Energi Potensial (J )
                    k   : Konstanta dari pegas ( N/m )
                    ∆x  : Simpangan pegas ( m )
                    m   : Massa benda ( kg )
                    g   : Gravitasi ( m/s )
                    h   : Ketingian ( m )
                    </p>

                    <h3>Energi Kinetik </h3>
                    <p class="narrow text-justify">
                    Pada energi kinetik dalam sistem pegas, faktor utama yang dapat di pengaruhi oleh kecepatan pegas yang dapat di tuliskan:
                    </p>
                    <center> Ek=1/2 mv^2 </center>
                </p>
                <!-- Navigasi -->
                <div>
                    <a href="zona-aktivitas.php" class="btn btn-info btn-outline-rounded"> ZONA AKTIVITAS <span class="fa fa-arrow-right"></a> <br> <br> <br>
                    <a href="materi-4a.php" class="btn btn-info btn-outline-rounded"> CONTOH SOAL <span class="fa fa-arrow-right"></a> <br> <br> <br>

                    <a href="materi-4b.php" class="btn btn-info btn-outline-rounded theme_background_color"> RANGKUMAN <span class="fa fa-arrow-right"></a> <br> <br> <br>
                    <a href="materi-4c.php" class="btn btn-info btn-outline-rounded"> EVALUASI <span class="fa fa-arrow-right"></a> <br> <br> <br>
                </div>
                <!-- Akhir Navigasi -->
                <!-- Navigasi -->
                <a href="materi-4.php" class="btn btn-success btn-outline-rounded theme_background_color"> Sebelumnya <span class="fa fa-arrow-left"></a>
                <span>
                    <a href="materi-5.php" class="btn btn-success btn-outline-rounded theme_background_color"> Berikutnya <span class="fa fa-arrow-right"></a>
                    </span>
                <!-- Akhir Navigasi -->
            </div>
            <?php
            include ("konten-kanan.php");
            ?>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/js/jqBootstrapValidation.js"></script>
    <script src="/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="/js/freelancer.min.js"></script>

</body>

</html>
