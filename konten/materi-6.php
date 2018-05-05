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
                <h2>PERHITUNGAN PADA SHOCKABSORBER</h2>
                <br>
                <br>
                <br>
                <h3 class="head text-left"> </h3>
                        

                <p class="narrow text-justify">
                    <br><br>
                    Pada shockabosrber dapat mencari konstanta terhadap shockabsorber, seperti pada motor Honda blade sebagai contoh, beban penulis seberat 56 kg kemudian dapat dibuat data seperti di bawah :<br>
                        <!-- INSERT SINGLE GAMBAR -->
                        <div style="text-align:center">
                            <img  src="images/gambar63.jpg" alt="Image"/>
                            <br>
                        <caption>
                            Gambar 2.19 Hasil Pengukuran Shock Absorber<br>
                            Sumber : (WWW.ASASPIRA.ASTRA.CO.ID)

                        </caption> <br>
                        </div>
                        <p class="narrow text-justify">
                            Berdasarkan data tersebut pada gambar di atas maka di ketahui: <br>
                            FD  = panjang total sebelum pembebanan <br>
                            X   = panjang total setelah pembebanan <br>
                            T   = waktu <br>
                            C   = konstanta <br>
                            Maka: <br>
                            FD  = 29 cm + 15 cm = 44 cm <br>
                            X   = 29 cm + 12 cm = 41 cm <br>
                            T   = 0,54 detik <br>
                            Untuk mencari konstanta pada shockbsorber/shockbreaker Honda blade maka rumus yang digunakan adalah: <br>
                            <!-- INSERT FORMULA FRACTION -->
                        <br>
                        <div style="font-size: 20px ">
                            <table align="center">
                                <tr>
                                    <td>
                                        <div>C = </div>
                                    </td>
                                    
                                    <td>
                                        <div>
                                            <div style="border-bottom:1px solid;text-align:center;">FD</div>
                                            <div style="text-align:center;">x^</div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <!-- CLOSING FORMULA FRACTION -->
                        </p>
                        <p class="narrow text-justify">
                            Karena (x ) ̇ belum diketahui, maka : <br>
                        </p>
                        <!-- INSERT FORMULA FRACTION -->
                        <br>
                        <div style="font-size: 20px ">
                            <table align="center">
                                <tr>
                                    <td>
                                        <div>x^ = </div>
                                    </td>
                                    
                                    <td>
                                        <div>
                                            <div style="border-bottom:1px solid;text-align:center;">x</div>
                                            <div style="text-align:center;">l</div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <!-- CLOSING FORMULA FRACTION -->  
                        <p class="narrow text-justify">
                            Sehingga : <br>

                        </p>  
                        <!-- INSERT FORMULA FRACTION -->
                        <br>
                        <div style="font-size: 20px ">
                            <table align="center">
                                <tr>
                                    <td>
                                        <div>x^ = </div>
                                    </td>
                                    
                                    <td>
                                        <div>
                                            <div style="border-bottom:1px solid;text-align:center;">x</div>
                                            <div style="text-align:center;">l</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <div style="border-bottom:1px solid;text-align:center;">41</div>
                                            <div style="text-align:center;">0.54</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>= 75.9 </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <!-- CLOSING FORMULA FRACTION -->  
                        <p class="narrow text-justify">
                            Setelah menemukan x ̇ gunakan rumus konstanta yang telah ada yaitu: <br>
                        </p>
                        <!-- INSERT FORMULA FRACTION -->
                        <br>
                        <div style="font-size: 20px ">
                            <table align="center">
                                <tr>
                                    <td>
                                        <div>C = </div>
                                    </td>
                                    
                                    <td>
                                        <div>
                                            <div style="border-bottom:1px solid;text-align:center;">FD</div>
                                            <div style="text-align:center;">x^</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <div style="border-bottom:1px solid;text-align:center;">44</div>
                                            <div style="text-align:center;">75.9</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div> = 0.57 N/m </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <!-- CLOSING FORMULA FRACTION -->  
                        <p class="narrow text-justify">
                        Dari data di atas dapat disimpulkan bahwa konstanta yang ada pada Honda blade adalah sebesar 0.57 N/m. 
                        </p>           
                        <br>
                        <br>
                        <br>
                
                <!-- Navigasi -->
                <a href="materi-5d-deteksi.php" class="btn btn-success btn-outline-rounded theme_background_color"> Sebelumnya <span class="fa fa-arrow-left"></a>
                <span>
                    <a href="materi-7.php" class="btn btn-success btn-outline-rounded theme_background_color"> Selanjutnya <span class="fa fa-arrow-right"></a>
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
