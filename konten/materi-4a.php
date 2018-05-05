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
                <h2>CONTOH SOAL</h2>
                <br>
                <br>
                <br>
                <p class="narrow text-justify">
                    1. Seorang pria bermassa 80 kg menaiki mobil 1000 kg, pada saat dinaikin pria tersebut
                    pegas mobil tertekan 1,5 cm. berapa konstanta pegas pada mobil tersebut? <br> <br>
                    Jawab: <br> <br>
                    m= 80 kg + 1000 kg = 1080 <br> <br>
                    x= 1,5 cm = 0,015 m <br> <br>
                    ditanya: <br> <br>
                    k? <br> <br>
                    F=k. x <br> <br>
                    K=F/x= 1080 / 0.015= 72000 N/m <br> <br>

                    2. sebuah pegas melakukan getaran harmonis  dalam waktu 10 s, kemudian pegs melakukan getaran sebanyak 7 kali. Tentukan <br> <br>
                    a. T…? <br> <br>
                    b. f….? <br> <br>
                    diketahui: <br> <br>
                    t=10 s <br> <br>
                    n-7 getaran <br> <br>
                    Jawab : <br> <br>
                    a.	T…? <br> <br>
                    T=t / n <br> <br>
                    = 10 / 7 <br> <br>
                    = 1.43 s <br> <br>

                    b.	f ……?<br> <br>
                    f= n / t<br> <br>
                    = 7 / 10<br> <br>
                    = 0.7 Hz<br> <br>

                    <br>
                        <br>
                        <br>
                <!-- Navigasi -->
                <div>
                    <a href="materi-4a.php" class="btn btn-info btn-outline-rounded"> CONTOH SOAL <span class="fa fa-arrow-right"></a> <br> <br> <br>
                    <a href="materi-4b.php" class="btn btn-info btn-outline-rounded theme_background_color"> RANGKUMAN <span class="fa fa-arrow-right"></a> <br> <br> <br>
                    <a href="materi-4c.php" class="btn btn-info btn-outline-rounded"> EVALUASI <span class="fa fa-arrow-right"></a> <br> <br> <br>
                </div>
                <!-- Akhir Navigasi -->
                <!-- Navigasi -->
                <a href="materi-3a.php" class="btn btn-success btn-outline-rounded theme_background_color"> Sebelumnya <span class="fa fa-arrow-left"></a>
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
