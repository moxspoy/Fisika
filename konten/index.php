<?php
include 'masterview.php';
?>

    <!-- Header -->
    <header style="background-image: url(img/bg3.gif);background-repeat:no-repeat;background-position: center center;
background-attachment: fixed;background-size: cover" >
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">

                    <!-- UBAH GAMBAR DISINI -->
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <!-- ------------------ -->

                    <div class="intro-text">
                        <h1 class="name">PENGAYAAN PENGETAHUAN FISIKA PADA MATERI OSILASI</h1>

                        <hr class="star-light">
                        <span class="skills">FISIKA KELAS XI SMA</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--Materi Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>BAB 1</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
            <a>
                <div class="col-sm-4 portfolio-item">
                    <a href= <?php echo "http://" . $_SERVER['SERVER_NAME']."/fisika/konten/materi-1.php"; ?> class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                PENGERTIAN GERAK HARMONI SEDERHANA
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="Cabin">
                    </a>
                </div>
            </a>
            <!-- <a>
                <div class="col-sm-4 portfolio-item">
                    <a href= <?php echo "http://" . $_SERVER['SERVER_NAME']."/fisika/konten/materi-1-syarat.php"; ?> class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                SYARAT GETARAN HARMONIC
                            </div>
                        </div>
                        <img src="img/portfolio/submarine2.png" class="img-responsive" alt="Game controller">
                    </a>
                </div>
            </a> -->
            <a>
                <div class="col-sm-4 portfolio-item">
                    <a href=<?php echo "http://" . $_SERVER['SERVER_NAME']."/fisika/konten/materi-2.php"; ?> class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                JENIS GERAK HARMONIK
                            </div>
                        </div>
                        <img src="img/portfolio/cake.png" class="img-responsive" alt="Slice of cake">
                    </a>
                </div>
            </a>
            <a>
                <div class="col-sm-4 portfolio-item">
                    <a href= <?php echo "http://" . $_SERVER['SERVER_NAME']."/fisika/konten/materi-3.php"; ?> class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                BESARAN GERAK HARMONIK SEDERHANA
                            </div>
                        </div>
                        <img src="img/portfolio/circus.png" class="img-responsive" alt="Circus tent">
                    </a>
                </div>
            </a>
            <a>
                <div class="col-sm-4 portfolio-item">
                    <a href= <?php echo "http://" . $_SERVER['SERVER_NAME']."/fisika/konten/materi-3a.php"; ?> class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                GETARAN HARMONIS PADA PEGAS
                            </div>
                        </div>
                        <img src="img/portfolio/pegas.jpg" class="img-responsive" alt="Submarine">
                    </a>
                </div>
            </a>
            <a>
                <div class="col-sm-4 portfolio-item">
                    <a href= <?php echo "http://" . $_SERVER['SERVER_NAME']."/fisika/konten/materi-3b.php"; ?> class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                GAYA PEMULIH PADA PEGAS
                            </div>
                        </div>
                        <img src="img/portfolio/pemulih.png" class="img-responsive" alt="Game controller">
                    </a>
                </div>
            </a>
            <a>
                <div class="col-sm-4 portfolio-item">
                    <a href= <?php echo "http://" . $_SERVER['SERVER_NAME']."/fisika/konten/materi-3c.php"; ?> class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                FREKUENSI DAN PERIODE PEGAS
                            </div>
                        </div>
                        <img src="img/portfolio/frekuensi.png" class="img-responsive" alt="Game controller">
                    </a>
                </div>
            </a>
            <a>
                <div class="col-sm-4 portfolio-item">
                    <a href=<?php echo "http://" . $_SERVER['SERVER_NAME']."/fisika/konten/materi-4.php"; ?> class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                PERSAMAAN GERAK HARMONI SEDERHANA
                            </div>
                        </div>
                        <img src="img/portfolio/safe.png" class="img-responsive" alt="Submarine">
                    </a>
                </div>
            </a>
            <a>
                <div class="col-sm-4 portfolio-item">
                    <a href= <?php echo "http://" . $_SERVER['SERVER_NAME']."/fisika/konten/energi-pegas.php"; ?> class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                ENERGI PADA SISTEM PEGAS
                            </div>
                        </div>
                        <img src="img/portfolio/energi.png" class="img-responsive" alt="Game controller">
                    </a>
                </div>
            </a>
            </div>
        </div>
    </section>

    <!--Materi Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>BAB 2</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
            <a>
                <div class="col-sm-4 portfolio-item">
                    <a href= <?php echo "http://" . $_SERVER['SERVER_NAME']."/fisika/konten/materi-5.php"; ?> class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                OSILASI TEREDAM
                            </div>
                        </div>
                        <img src="img/portfolio/cabin-teredam.png" class="img-responsive" alt="Cabin">
                    </a>
                </div>
            </a>
            <a>
                <div class="col-sm-4 portfolio-item">
                    <a href= <?php echo "http://" . $_SERVER['SERVER_NAME']."/fisika/konten/materi-5c.php"; ?> class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                OSILASI TERPAKSA
                            </div>
                        </div>
                        <img src="img/portfolio/submarine2-terpaksa.png" class="img-responsive" alt="Game controller">
                    </a>
                </div>
            </a>
            <a>
                <div class="col-sm-4 portfolio-item">
                    <a href=<?php echo "http://" . $_SERVER['SERVER_NAME']."/fisika/konten/materi-7.php"; ?> class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                OSILASI TERCOUPLE
                            </div>
                        </div>
                        <img src="img/portfolio/cake-tercouple.png" class="img-responsive" alt="Slice of cake">
                    </a>
                </div>
            </a>
            
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about" style="background-image: url(img/bg6.jpg);background-repeat:no-repeat;background-position: center center;
background-attachment: fixed;background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>TENTANG</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Website ini adalah media belajar siswa SMA Kelas XI yang sedang belajar Fisika.
                        Disini anda dapat memperdalam pengetahuan tentang Gerak Osilasi. Tujuan
                    dibuatnya website ini selain untuk syarat skripsi program studi pendidikan fisika juga
                    sebagai wadah bagi para siswa untuk belajar Gerak Osilasi. Kapan pun. Di manapun.</p>
                </div>
                <div class="col-lg-4">
                    <p>Gerak Osilasi merupakan salah satu materi yang terdapat di Pelajaran Fisika kelas XI SMA.
                    Banyak sekali implementasi dari Gerak Osilasi dalam kehidupan sehari-hari. Semoga website ini dapat bermanfaat untuk anda!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="materi-1.php" class="btn btn-lg btn-outline">
                        <i class="fa fa-caret-square-o-right"></i> Mulai Baca Materi
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer / Bagia Bawah -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>LOKASI</h3>
                        <p>Gedung Dewi Sartika Lantai 5
                            <br>Universitas Negeri Jakarta</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Media Sosial</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="http://facebook.com/mnurilman.baihaki" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="http://plus.google.com" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="http://www.twitter.com/moxspoy" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="http://linkedin.com/moxspoy" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="http://www.instagram.com/moxspoy" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Tentang Penulis</h3>
                        <p>Penulis bernama Kharisma yang lahir di Jakarta. Ia sekarang sedang menempuh pendidikan di Universitas
                        Negeri Jakarta Program Studi Pendidikan Fisika. Fisika merupakan salah satu passionnya.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Buku Pengayaan Pengetahuan Fisika pada Materi Osilasi. 2017. Designed by <a href="http://facebook.com/mnurilman.baihaki" target="_blank">MOXSPOY</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button id="btnSubmit" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
