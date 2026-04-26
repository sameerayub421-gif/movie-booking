<?php
include('../base/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>All Theaters</title>

<link rel="stylesheet" href="animate.css">

<style>

body{
    margin:0;
    background:#ffffff;
    font-family:Arial, sans-serif;
    color:#333;
}

/* Title */
h1{
    text-align:center;
    margin:30px 0;
    font-size:40px;
}

/* Section */
.container{
    width:90%;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(250px, 1fr));
    gap:20px;
    padding-bottom:50px;
}

/* Card */
.card{
    background:#f8f9fa;
    padding:20px;
    border-radius:10px;
    text-align:center;
    transition:0.3s;
    box-shadow:0 0 8px rgba(0,0,0,0.05);
}

/* hover */
.card:hover{
    transform:translateY(-5px);
    box-shadow:0 0 15px rgba(0,0,0,0.15);
}

/* icon/title */
.card h3{
    margin-bottom:10px;
}

/* text */
.card p{
    margin:5px 0;
    color:#555;
    font-size:14px;
}

/* button */
.btn{
    margin-top:10px;
    display:inline-block;
    padding:8px 12px;
    background:#fff;
    color:#000;
    border:1px solid #000;
    text-decoration:none;
    transition:0.3s;
}

.btn:hover{
    background:#111;
    color:#fff;
    transform:translateY(-2px);
}

.section-title{
    text-align:center;
    margin:20px 0 40px 0;
    color:#444;
}

</style>
</head>

<body>
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(images/index.img/background1.jpg);"></div>
            <!-- Slide Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">SuperHit Movie</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">IF WISHES COULD KILL <span>IF WISHES COULD KILL</span>
                            </h2>
                            <a data-animation="fadeInUp" data-delay="500ms" href="#"
                                class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(images/index.img/background2.jpg);"></div>
            <!-- Slide Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">Upcoming Blockbuster</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">DHURANDHAR 2 <span>DHURANDHAR 2</span></h2>
                
                            <a data-animation="fadeInUp" data-delay="500ms" href="#"
                                class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<h1 class="animated bounceIn">All Theaters</h1>

<p class="section-title">
    Explore all available cinemas in our system. Choose your favorite theater and enjoy the best movie experience.
</p>

<div class="container">

    <div class="card animated fadeInUp">
        <h3>🎭 Cineplex Cinema</h3>
        <p>📍 Lahore Mall Road</p>
        <p>🎟 Gold | Platinum | Box Seats</p>
        <p>🎧 Dolby Sound + AC Hall</p>
        <a href="#" class="btn">View Movies</a>
    </div>

    <div class="card animated fadeInUp">
        <h3>🎭 Mega Movies Hall</h3>
        <p>📍 Karachi DHA</p>
        <p>🎟 Gold | Platinum | Box Seats</p>
        <p>🎧 Dolby Sound + AC Hall</p>
        <a href="#" class="btn">View Movies</a>
    </div>

    <div class="card animated fadeInUp">
        <h3>🎭 Star Cine Gold</h3>
        <p>📍 Islamabad Centaurus</p>
        <p>🎟 Gold | Platinum | Box Seats</p>
        <p>🎧 Dolby Sound + AC Hall</p>
        <a href="#" class="btn">View Movies</a>
    </div>

    <div class="card animated fadeInUp">
        <h3>🎭 IMAX Cinema</h3>
        <p>📍 Faisalabad City Center</p>
        <p>🎟 Gold | Platinum | Box Seats</p>
        <p>🎧 IMAX + Dolby Experience</p>
        <a href="#" class="btn">View Movies</a>
    </div>

    <div class="card animated fadeInUp">
        <h3>🎭 Silver Screen Cinema</h3>
        <p>📍 Lahore Gulberg</p>
        <p>🎟 Gold | Platinum | Box Seats</p>
        <p>🎧 Premium Sound System</p>
        <a href="#" class="btn">View Movies</a>
    </div>

    <div class="card animated fadeInUp">
        <h3>🎭 Royal Cine Hall</h3>
        <p>📍 Rawalpindi Saddar</p>
        <p>🎟 Gold | Platinum | Box Seats</p>
        <p>🎧 Luxury Seating + AC Hall</p>
        <a href="#" class="btn">View Movies</a>
    </div>

</div>

</body>
</html>

<?php
include('../base/footer.php');
?>