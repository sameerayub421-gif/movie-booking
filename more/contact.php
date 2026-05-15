<?php
include('../base/header.php');
?>

<section class="breadcumb-area bg-img bg-overlay" style="background-image: url('<?php echo $base_url; ?>img/bg-img/breadcumb.jpg');">
    <div class="bradcumbContent">
        <p>Get In Touch With Us</p>
        <h2>Contact Us</h2>
    </div>
</section>

<section class="contact-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2 text-center mb-50">
                    <p>We'd love to hear from you</p>
                    <h2>Get In Touch</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Contact Info -->
            <div class="col-12 col-md-4 mb-50">
                <div class="single-event-area">
                    <div class="event-text">
                        <h4>📍 Address</h4>
                        <p>
                            CinemaHub Studios<br>
                            123 Movie Lane<br>
                            Entertainment City, EC 12345
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-50">
                <div class="single-event-area">
                    <div class="event-text">
                        <h4>📞 Phone</h4>
                        <p>
                            +1 (555) 123-4567<br>
                            +1 (555) 123-4568<br>
                            Mon - Fri: 9 AM to 6 PM
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-50">
                <div class="single-event-area">
                    <div class="event-text">
                        <h4>✉️ Email</h4>
                        <p>
                            info@cinemahub.com<br>
                            support@cinemahub.com<br>
                            career@cinemahub.com
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="row mt-50">
            <div class="col-12">
                <div class="about-box">
                    <h3>Send us a Message</h3>
                    <form method="POST" action="#">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-30">
                                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                            </div>
                            <div class="col-12 col-md-6 mb-30">
                                <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                            </div>
                            <div class="col-12 mb-30">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                            </div>
                            <div class="col-12 mb-30">
                                <textarea class="form-control" rows="5" placeholder="Your Message" name="message" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn oneMusic-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
include('../base/footer.php');
?>
