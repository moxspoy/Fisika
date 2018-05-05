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
                <h2>KARAKTERISTIK GERAK TEREDAM</h2>
                <br>
                <br>
                <br>
                <p class="narrow text-justify">
                    <p class="narrow text-justify"> Bentuk umum gerak teredam </p> <br>
                    <p class="narrow text-center">x(t)=x<sub>0</sub> e<sup>(-at)</sup>  </p> <br>
                    <p class="narrow text-justify"> Derivative 1 dan kedua </p> <br>
                    <p class="text-center">
                        <div style="font-size: 20px ; font-family: 'Cambria Math'">
                            <table align="center">
                                <tr>
                                    <td> <div>
                                            <div style="border-bottom:1px solid;text-align:center;">dx(t)</div>
                                            <div style="text-align:center;">dt</div>
                                        </div>
                                    </td>
                                    <td>
                                        = αx <sub>0</sub> e<sup>at</sup>=αx(t)
                                    </td>
                                    <td>
                                </tr>
                                <tr>
                                    <td> <div>
                                            <div style="border-bottom:1px solid;text-align:center;">dx<sup>2</sup>(t)</div>
                                            <div style="text-align:center;">dt<sup>2</sup></div>
                                        </div>
                                    </td>
                                    <td>
                                        = α<sup>2</sup> x<sub>0</sub> e<sup>at</sup>=α<sup>2</sup> x(t)
                                    </td>
                                    <td>
                                </tr>
                            </table>
                        </div>
                    </p> <br>
                    <p class="narrow text-justify"> Sehingga bentuk persamaan gerak teredam adalah </p> <br>
                    <p class="narrow text-center">mα<sup>2</sup> x+bαx+kx=0</p> <br>
                    <p class="narrow text-justify"> Dengan menghilangkan faktor x akan di peroleh: </p> <br>
                    <p class="narrow text-center">mα<sup>2</sup> x+bα+k=0</p> <br>
                    <p class="narrow text-justify"> Penyelesaian akar persamaan diatas : </p> <br>
                    <p class="text-center">
                    <div style="font-size: 20px ; font-family: 'Cambria Math'">
                        <table align="center">
                            <tr>
                                <td>
                                    α =
                                </td>
                                <td> <div>
                                        <div style="border-bottom:1px solid;text-align:center;">  -b±√(b<sup>2</sup>-4mk) </div>
                                        <div style="text-align:center;">2m</div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    </p> <br>
                    <p class="narrow text-justify">Untuk melihat karateristik gerak teredam kita mengambil nilai </p> <br>
                    <p class="narrow text-center">  √(b<sup>2</sup>-4mk) </p><br>
                </p>
                <h3 class="head text-center">
                    KEADAAN TEREDAM KUAT ( D > 0 )
                </h3>
                <p class="narrow text-justify">Pada keadaan ini, gerak teredam mempuyai dua akar persamaan karakteristik α = α1 ≠ α2 yang bernilai riil
                    dan berbeda dan disebut sebagai keadaan teredam kuat. <br>
                    Persamaan umum :
                </p> <br>
                <p class="narrow text-center">x(t)=Ae<sup>α1t</sup>+Be<sup>α2t</sup></p> <br>
                <!-- INSERT SINGLE GAMBAR -->
                <div style="text-align:center">
                    <br>
                    <br>
                    <img  src="images/gambar39.jpg" alt="Image" width="600" height="260"/>
                    <br>
                </div>
                <!-- CLOSING INSERT GAMBAR -->
                <h3 class="head text-center">
                    KEADAAN TEREDAM KRITIS ( D = 0 )
                </h3>
                <p class="narrow text-justify">Keadaan ini memiliki banyak manfaat untuk aplikasi dan rekayasa,
                    contohnya untuk kepentingan perancangan komponen peredam pada kendaraan bermotor. Saat b bernilai
                    terlampau kecil, akan menimbulkan ayunan yang lama tanpa menimbulkan pengurangan yang berarti pada
                    amplitudo. Namun, jika b terlampau besar, keadaan berubah seolah dalam keadaan terhimpit dan
                    memerlukan waktu yang lama sebelum dapat kembali menggerakkan massa m. <br>
                    Bentuk penyelesaian :
                </p> <br>
                <p class="narrow text-center">  x(t)=e<sup>αt</sup> (A+Bt) </p> <br>
                <h3 class="head text-center">
                    KEADAAN TEREDAM LEMAH ( D < 0 )
                </h3>
                <p class="narrow text-justify">Persamaan karakteristik α berbentuk kompleks :
                </p> <br>
                <p class="text-center">
                <div style="font-size: 20px ; font-family: 'Cambria Math'">
                    <table align="center">
                        <tr>
                            <td>
                                α =
                            </td>
                            <td> <div>
                                    <div style="border-bottom:1px solid;text-align:center;">  -b </div>
                                    <div style="text-align:center;">2m</div>
                                </div>
                            </td>
                            <td>
                                ±i √(k/m-b<sup>2</sup>/(4m<sup>2</sup> ))
                            </td>
                        </tr>
                    </table>
                </div>
                </p> <br>
                <p class="narrow text-justify">Kemudian kita akan memperoleh bentuk persamaan </p> <br>
                <p class="narrow text-center">  x(t)=x<sub>0</sub> e<sup>at</sup>=x<sub>0</sub> e<sup>((-b)/2m±iω)t </p> <br>
                <br>
                <br>
                <br>
                <!-- Navigasi -->
                <div>
                    <a href="materi-5a.php" class="btn btn-info btn-outline-rounded"> KARAKTERISTIK GERAKAN TEREDAM <span class="fa fa-arrow-right"></a> <br> <br> <br>
                    <a href="materi-5b.php" class="btn btn-info btn-outline-rounded theme_background_color"> APLIKASI PADA OSILASI TEREDAM <span class="fa fa-arrow-right"></a> <br> <br> <br>
                    <a href="materi-5c.php" class="btn btn-info btn-outline-rounded"> OSILASI TERPAKSA <span class="fa fa-arrow-right"></a> <br> <br> <br>
                    <a href="materi-5d.php" class="btn btn-info btn-outline-rounded"> APLIKASI <span class="fa fa-arrow-right"></a> <br> <br> <br>
                </div>
                <!-- Akhir Navigasi -->
                <br>
                <br>
                <!-- Navigasi -->
                <a href="materi-5.php" class="btn btn-success btn-outline-rounded theme_background_color"> Sebelumnya <span class="fa fa-arrow-left"></a>
                <span>
                    <a href="materi-5b.php" class="btn btn-success btn-outline-rounded theme_background_color"> Selanjutnya <span class="fa fa-arrow-right"></a>
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
