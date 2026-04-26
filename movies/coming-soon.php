<?php
include('../base/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Coming Soon Movies</title>

<link rel="stylesheet" href="animate.css">

<style>
body{
    margin:0;
    background:#ffffff;
    font-family:Arial, sans-serif;
    color:#333;
}

/* Section Title */
h1{
    text-align:center;
    margin:30px 0;
    font-size:40px;
}

/* Grid */
.container{
    width:90%;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(200px, 1fr));
    gap:20px;
    padding-bottom:50px;
}

/* Movie Card */
.card{
    background:#f8f9fa;
    overflow:hidden;
    text-align:center;
    transition:0.3s;
    position:relative;
}

/* Hover effect */
/* .card:hover{
    transform:scale(1.05);
    box-shadow:0 0 15px rgba(255,0,0,0.4);
} */

/* Image */
.card img{
    width:100%;
    height:260px;
    object-fit:cover;
}

/* Text */
.card h3{
    margin:10px 0 5px 0;
}

.card p{
    margin:0;
    font-size:14px;
    color:#bbb;
}

/* Badge */
.badge{
    position:absolute;
    top:10px;
    left:10px;
    background:red;
    padding:5px 10px;
    font-size:12px;
    border-radius:5px;
}

.about-section{
    width:90%;
    margin:50px auto;
    color:#333;
}

.about-box{
    background:#f8f9fa;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.about-box h2{
    text-align:center;
    margin-bottom:20px;
}

.about-box h3{
    margin-top:20px;
}

.about-box p{
    line-height:1.6;
    margin-bottom:10px;
}

.about-box ul{
    margin-top:10px;
    padding-left:20px;
}
.book-btn{
    margin:10px 0 15px 0;
    padding:8px 12px;
    background:#fff;
    color:#000;
    border:1px solid #000;
    cursor:pointer;
    transition:all 0.3s ease;
}

/* soft hover */
.book-btn:hover{
    background:#111;   /* pure black nahi, thoda soft dark */
    color:#fff;
    border-color:#111;
    transform:translateY(-2px); /* halka sa upar uthay */
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

<h1 class="animated bounceIn">Coming Soon Movies</h1>

<div class="container">



    <div class="card animated fadeInUp">
        <span class="badge">Soon</span>
        <img src="/movie-booking-master/images/theater.img/T-movie1.jpg">
        <h3>Avengers Wars</h3>
        <p>Action / Sci-Fi</p>
        <a href="#" class="book-btn border-1px">Pre-Book <i class="fa fa-angle-double-right"></i></a> 
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">Soon</span>
        <img src="/movie-booking-master/images/theater.img/T-movie2.jpg">
        <h3>Fast & Furious 11</h3>
        <p>Action</p>
        <a  href="#" class="book-btn">Pre-Book <i class="fa fa-angle-double-right"></i></a>
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">Soon</span>
        <img src="/movie-booking-master/images/theater.img/T-movie3.jpg">
        <h3>Deadpool 3</h3>
        <p>Action / Comedy</p>
        <a href="#" class="book-btn">Pre-Book <i class="fa fa-angle-double-right"></i></a>
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">Soon</span>
        <img src="/movie-booking-master/images/theater.img/T-movie4.jpg">
        <h3>Avatar 3</h3>
        <p>Sci-Fi / Adventure</p>
        <a href="#" class="book-btn">Pre-Book <i class="fa fa-angle-double-right"></i></a>
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">Soon</span>
        <img src="/movie-booking-master/images/theater.img/T-movie5.jpg">
        <h3>Batman: New Era</h3>
        <p>Action / Crime</p>
        <a href="#" class="book-btn">Pre-Book <i class="fa fa-angle-double-right"></i></a>
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">Soon</span>
        <img src="/movie-booking-master/images/theater.img/T-movie6.jpg">
        <h3>Spider-Man 4</h3>
        <p>Action / Adventure</p>
        <a href="#" class="book-btn">Pre-Book <i class="fa fa-angle-double-right"></i></a>
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">Soon</span>
        <img src="/movie-booking-master/images/theater.img/T-movie7.jpg">
        <h3>Horror Night</h3>
        <p>Horror / Thriller</p>
        <a href="#" class="book-btn">Pre-Book <i class="fa fa-angle-double-right"></i></a>
    </div>

</div>

<section class="about-section animated fadeInUp">

    <div class="about-box">

        <h2>About Coming Soon Movies</h2>

        <p>
            Our Online Movie Booking System brings you the latest updates about upcoming blockbuster movies.
            You can explore trailers, release dates, genres, and cast details before anyone else.
        </p>

        <p>
            This section helps you stay updated with all upcoming releases so you never miss your favorite movie.
            From action to horror, romance to sci-fi, everything is listed here in advance for your convenience.
        </p>

        <h3>Why Use This Section?</h3>

        <ul>
            <li>Get early information about upcoming movies</li>
            <li>Watch official trailers</li>
            <li>Check release dates</li>
            <li>Plan your movie booking in advance</li>
        </ul>

    </div>

</section>

</body>
</html>

<?php
include('../base/footer.php');
?>