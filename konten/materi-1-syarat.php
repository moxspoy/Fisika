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
                <br>
                <br>
                <br>
                <h2>SYARAT GETARAN HARMONIK SEDERHANA</h2>
                <br>
                <br>
                <br>
                <p class="narrow text-justify">
                    Suatu gerak  dapat dinyatakan  getaran harmonik, apabila :: <br>
                    1.	Gerakannya selalu melalui atau melewati  posisi keseimbangan. <br>
                    2.	Percepatan yang bekerja pada benda sebanding dengan simpangan benda. <br>
                    3.	Arah dari percepatan suatu benda selalu menuju pada posisi keseimbangan <br>
                    4.	Gerakannya periodik (bolak-balik).
                    <br>
                    <!-- INSERT SINGLE GAMBAR -->
                <div style="text-align:center">
                    <img  src="images/gambar12.jpg" alt="Image"/>
                </div>
                <!-- CLOSING INSERT GAMBAR -->
                <br>
                <br>
                <br>

                <!-- Navigasi -->
                <a href="materi-1.php" class="btn btn-success btn-outline-rounded theme_background_color"> Sebelumnya <span class="fa fa-arrow-left"></a>
                <span>
                    <a href="materi-2.php" class="btn btn-success btn-outline-rounded theme_background_color"> Berikutnya <span class="fa fa-arrow-right"></a>
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
