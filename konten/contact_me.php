

<?php
include "masterview.php";
?>
<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>SUKSES!</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3 class="head text-center">
                    EMAIL SUKSES TERKIRIM. SILAHKAN TUNGGU UNTUK BALASANNYA :)
                </h3>
                <br>
                <br>
                <br>
                <div class="text-center">
                <a href="index.php" class="btn btn-success btn-outline-rounded">BERANDA <span class="fa fa-home"></a>
                </div>
                <?php
                // Check for empty fields

                if(empty($_POST['name'])  		||
                    empty($_POST['email']) 		||
                    empty($_POST['phone']) 		||
                    empty($_POST['message'])	||
                    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
                {
                    echo "No arguments Provided!";
                    return false;
                }

                $name = strip_tags(htmlspecialchars($_POST['name']));
                $email_address = strip_tags(htmlspecialchars($_POST['email']));
                $phone = strip_tags(htmlspecialchars($_POST['phone']));
                $message = strip_tags(htmlspecialchars($_POST['message']));
                // Create the email and send the message
                $to = 'mnurilmanbaehaqi@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
                $email_subject = "Website Contact Form:  $name";
                $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
                $headers = "From: noreply@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
                $headers .= "Reply-To: $email_address";
                mail($to,$email_subject,$email_body,$headers);
                return true;
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
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
                    Copyright &copy; Gerak Harmoni Sederhana 2017. Designed by <a href="http://facebook.com/mnurilman.baihaki" target="_blank">MOXSPOY</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="konten/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="konten/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="konten/js/jqBootstrapValidation.js"></script>
<script src="konten/js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="konten/js/freelancer.min.js"></script>

</body>

</html>

