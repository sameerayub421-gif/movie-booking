<?php
include('../base/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Top Rated Movies</title>

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

/* Grid */
.container{
    width:90%;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(200px, 1fr));
    gap:20px;
    padding-bottom:50px;
}

/* Card */
.card{
    background:#f8f9fa;
    overflow:hidden;
    text-align:center;
    transition:0.3s;
    position:relative;
}

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
    color:#666;
}

/* Badge */
.badge{
    position:absolute;
    top:10px;
    left:10px;
    background:#000;
    color:#fff;
    padding:5px 10px;
    font-size:12px;
    border-radius:5px;
}

/* Button */
.view-btn{
    margin:10px 0 15px 0;
    padding:8px 12px;
    background:#fff;
    color:#000;
    border:1px solid #000;
    cursor:pointer;
    transition:all 0.3s ease;
    display:inline-block;
    text-decoration:none;
}

/* hover */
.view-btn:hover{
    background:#111;
    color:#fff;
    transform:translateY(-2px);
}
.info-section{
    width:90%;
    margin:40px auto;
}

.info-box{
    background:#f8f9fa;
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.info-box h2{
    text-align:center;
    margin-bottom:15px;
}

.info-box h3{
    margin-top:15px;
}

.info-box p{
    line-height:1.6;
    margin-bottom:10px;
}

.info-box ul{
    padding-left:20px;
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

<h1 class="animated bounceIn">Top Rated Movies</h1>

<div class="container">

    <div class="card animated fadeInUp">
        <span class="badge">⭐ 9.0</span>
        <img src="/movie-booking-master/images/theater.img/T-movie1.jpg">
        <h3>The Dark Knight</h3>
        <p>Action / Crime</p>
        <a href="#" class="view-btn">View Details</a>
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">⭐ 8.8</span>
        <img src="/movie-booking-master/images/theater.img/T-movie2.jpg">
        <h3>Inception</h3>
        <p>Sci-Fi / Thriller</p>
        <a href="#" class="view-btn">View Details</a>
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">⭐ 8.6</span>
        <img src="/movie-booking-master/images/theater.img/T-movie3.jpg">
        <h3>Interstellar</h3>
        <p>Sci-Fi / Drama</p>
        <a href="#" class="view-btn">View Details</a>
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">⭐ 9.2</span>
        <img src="/movie-booking-master/images/theater.img/T-movie4.jpg">
        <h3>Avengers Endgame</h3>
        <p>Action / Superhero</p>
        <a href="#" class="view-btn">View Details</a>
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">⭐ 8.5</span>
        <img src="/movie-booking-master/images/theater.img/T-movie5.jpg">
        <h3>Joker</h3>
        <p>Drama / Crime</p>
        <a href="#" class="view-btn">View Details</a>
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">⭐ 7.9</span>
        <img src="/movie-booking-master/images/theater.img/T-movie6.jpg">
        <h3>Titanic</h3>
        <p>Romance / Drama</p>
        <a href="#" class="view-btn">View Details</a>
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">⭐ 8.1</span>
        <img src="/movie-booking-master/images/theater.img/T-movie7.jpg">
        <h3>Avatar</h3>
        <p>Sci-Fi / Adventure</p>
        <a href="#" class="view-btn">View Details</a>
    </div>

    <div class="card animated fadeInUp">
        <span class="badge">⭐ 8.4</span>
        <img src="/movie-booking-master/images/theater.img/T-movie1.jpg">
        <h3>Spider-Man No Way Home</h3>
        <p>Action / Adventure</p>
        <a href="#" class="view-btn">View Details</a>
    </div>

</div>

<section class="info-section">

    <div class="info-box">

        <h2>🌟 Top Rated Movies Collection</h2>

        <p>
            Welcome to the Top Rated section of our Online Movie Booking System. 
            Here you will find the most loved and highly rated movies of all time.
            These films are selected based on audience ratings, reviews, and popularity worldwide.
        </p>

        <h3>🎬 What Makes a Movie Top Rated?</h3>

        <p>
            A movie becomes top rated when it delivers outstanding storylines, strong performances, 
            and unforgettable cinematic experience. These films are appreciated by both critics and audiences.
        </p>

        <h3>⭐ Why Watch These Movies?</h3>

        <ul>
            <li>Highly rated by global audiences</li>
            <li>Award-winning performances</li>
            <li>Best storytelling and direction</li>
            <li>Perfect choice for quality entertainment</li>
        </ul>

    </div>

</section>

</body>
</html>

<?php
include('../base/footer.php');
?>