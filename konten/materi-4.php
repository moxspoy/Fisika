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
                <h2>PERSAMAAN GETARAN HARMONIK</h2>
                <br>
                <br>
                <br>
                <p class="narrow text-justify">
                    Persamaan getaran harmonik diperoleh dengan memproyeksikan gerak melingkar terhadap sumbu
                    untuk titik yang bergerak beraturan.
                    <br>
                    <h3 class="head text-left">a. Simpangan Getaran Harmonis </h3>
                    <p class="narrow text-justify">
                        Pengertian: simpangan getaran harmonis adalah proyeksi partikel yang bergerak melingkar.
                        <!-- INSERT SINGLE GAMBAR -->
                        <div style="text-align:center">
                            <img  src="images/persamaan1.jpg" alt="Image"/> <br>
                    <caption>Proyeksi gerak melingkar terhadap pada sumbu y <br>
                    Sumber : Buku BSE</caption>
                            <br>
                        </div>
                        <!-- CLOSING INSERT GAMBAR -->
                            <p class="narrow text-justify">
                                GGambar 1.20 adalah sebuah partikel yang bergerak melingkar beraturan yang di proyeksikan terhadap sumbu y dengan kecepatan sudut ω dan jari-jari A. Anggap mula-mula partikel berada di titik P. <br>
                                Setelah selang waktu t partikel berada di titik Q dan sudut yang ditempuh adalah:
                                <br>
                            <p class="narrow text-center">θ=ωt=2πt/T</p>
                            <br>
                            <p class="narrow text-justify">
                                maka kita peroleh persamaan sebagai berikut. <br>
                            </p>
                            <p class="narrow text-center">Y = A sin θ = A sin ω t = A sin</p>
                            <p class="narrow text-justify">Sudut fase adalah suatu sudut yang didapat dalam fungsi
                                sinus θ  ( tidak berlaku pada cosinus ),sehingga dapat dinyatakan dalam persamaan:</p>
                            <br>
                            <br>
                            <p class="narrow text-center">Y = A sin θ = A sin (ω t +θ<sub>0</sub>)= A sin * ((2πt/T)+θ<sub>0</sub>))</p>
                            <br>
                            <p class="narrow text-justify">Karena Φ disebut fase, maka fase getaran harmonik adalah sebagai berikut,/
                            <!-- INSERT FORMULA FRACTION -->
                            <div style="font-size: 20px ">
                            <table align="center">
                                <tr>
                                    <td>
                                        <div>Φ</div>
                                    </td>
                                    <td>
                                        <div>=</div>
                                    </td>
                                    <td> <div>
                                            <div style="border-bottom:1px solid;text-align:center;">t</div>
                                            <div style="text-align:center;">T</div>
                                        </div>
                                    </td    >
                                    <td>
                                        +
                                    </td>
                                    <td>
                                        <div>
                                            <div style="border-bottom:1px solid;text-align:center;">θ<sub>0</sub></div>
                                            <div style="text-align:center;">2π</div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            </div>
                            <br>
                         <!-- CLOSING FORMULA FRACTION -->
                        <p class="narrow text-justify">
                            Bila sebuah benda bergetar harmonik mulai dari t = t1 hingga t = t2, maka beda
                            fase benda tersebut adalah sebagai berikut:
                        </p>
                        <!-- INSERT FORMULA FRACTION -->
                        <br>
                        <div style="font-size: 20px ">
                            <table align="center">
                                <tr>
                                    <td>
                                        <div>Φ</div>
                                    </td>
                                    <td>
                                        <div>=</div>
                                    </td>
                                    <td>
                                        <div>Φ<sub>2</sub>-Φ<sub>1</sub></div>
                                    </td>
                                    <td> <div>
                                            <div style="border-bottom:1px solid;text-align:center;">t<sub>2</sub>-t<sub>1</sub></div>
                                            <div style="text-align:center;">T</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            =
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <div style="border-bottom:1px solid;text-align:center;">Δt</div>
                                            <div style="text-align:center;">T</div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <!-- CLOSING FORMULA FRACTION -->
                        <p class="narrow text-justify">
                            Beda fase dalam getaran harmonik dinyatakan dengan nilai mulai dari nol sampai dengan
                            satu. Bilangan bulat dalam beda fase dapat dihilangkan, misalnya beda fase 2¼ ditulis sebagai beda fase ¼.
                            <br>
                            <h3 class="head text-left">b. Kecepatan Getaran Harmonik </h3>
                            <p class="narrow text-justify">
                                Kecepatan benda yang bergerak harmonik sederhana dapat diperoleh dari turunan pertama persamaan simpangan.
                                <!-- INSERT FORMULA FRACTION -->
                                <br>
                        <div style="font-size: 20px ; font-family: 'Cambria Math'">
                            <table align="center">
                                <tr>
                                    <td>
                                        Vy
                                    </td>
                                    <td>
                                        <div>=</div>
                                    </td>
                                    <td> <div>
                                            <div style="border-bottom:1px solid;text-align:center;">dy</div>
                                            <div style="text-align:center;">dt</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            =
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <div style="border-bottom:1px solid;text-align:center;">d</div>
                                            <div style="text-align:center;">dt</div>
                                        </div>
                                    </td>
                                    <td>
                                        (A sin (ωt+θ<sub>0</sub>))
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Vy
                                    </td>
                                    <td>
                                        <div>=</div>

                                    <td>
                                        (ωA cos (ωt+θ<sub>0</sub>))
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <!-- CLOSING FORMULA FRACTION -->
                        </p>
                        <p class="narrow text-justify">
                            Fungsi cosinus dari nilai maksimun diatas adalah satu, maka kecepatan vmax adalah:
                        </p>
                        <p class="narrow text-center">V<sub>maks</sub>=ωA
                        </p>
                        <h3 class="head text-left">c. Percepatan Getaran Harmonik </h3>
                        <p class="narrow text-justify">
                            Percepatan benda pada penurunan pertama dari persamaan kecepatan dan penurun kedua dari simpangan adalah:
                        </p>
                        <br>
                        <p class="narrow text-center">
                            a<sub>y</sub> = ω A [-ω sin (wt + θ <sub>0</sub>)] <br>
                            a<sub>y</sub>  = -ω <sup>2</sup>A sin (ω t + θ <sub>0</sub>)<br>
                            a<sub>y</sub>  = -ω 2<sub>y</sub><br>
                        <p class="narrow text-justify">
                        Karena nilai maksimum dari simpangan adalah sama dengan amplitudonya (y = A), maka percepatan maksimumnya (a <sub>maks</sub>) gerak harmonik sederhana adalah sebagai berikut.
                        </p>
                        <p class="narrow text-center">
                            a<sub>maks </sub>= –ω <sup>2</sup> A
                        </p>
                        
                        <br>
                        <br>
                        <br>
                
                <!-- Navigasi -->
                <a href="materi-3c.php" class="btn btn-success btn-outline-rounded theme_background_color"> Sebelumnya <span class="fa fa-arrow-left"></a>
                <span>
                    <a href="energi-pegas.php" class="btn btn-success btn-outline-rounded theme_background_color"> Berikutnya <span class="fa fa-arrow-right"></a>
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
