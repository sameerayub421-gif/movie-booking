<?php
include('../base/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>About Us</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#fff;
    color:#333;
}

/* PAGE TITLE */
.page-title{
    text-align:center;
    margin:40px 0 10px;
    font-size:42px;
    font-weight:bold;
}

.sub-title{
    text-align:center;
    width:70%;
    margin:auto;
    color:#666;
    line-height:1.6;
    margin-bottom:40px;
}

/* SECTION WRAPPER */
.section{
    width:85%;
    margin:auto;
}

/* CARDS */
.card{
    background:#f8f9fa;
    padding:25px;
    margin-bottom:20px;
    border-radius:12px;
    box-shadow:0 0 12px rgba(0,0,0,0.08);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
}

/* HEADINGS */
.card h2{
    margin-bottom:10px;
    font-size:22px;
}

/* TEXT */
.card p{
    line-height:1.6;
    color:#555;
}

/* GRID FEATURES */
.features{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:15px;
    margin-top:15px;
}

.feature-box{
    background:#fff;
    padding:15px;
    border-radius:8px;
    border:1px solid #eee;
    font-size:14px;
}

/* HIGHLIGHT */
.highlight{
    font-weight:bold;
    color:#000;
}

/* RESPONSIVE */
@media(max-width:768px){
    .features{
        grid-template-columns:1fr;
    }
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
<div class="page-title">🎬 About Us</div>

<div class="sub-title">
We are a modern Movie Booking Platform where users can explore movies, check reviews, and book tickets easily without any hassle.
</div>

<div class="section">

<!-- WHO WE ARE -->
<div class="card">
    <h2>⭐ Who We Are</h2>
    <p>
        We are a team passionate about movies and technology. Our goal is to make movie booking fast, simple, and enjoyable for everyone.
    </p>
</div>

<!-- WHAT WE OFFER -->
<div class="card">
    <h2>🎟️ What We Offer</h2>
    <p>
        Everything you need for a complete movie experience in one place:
    </p>

    <div class="features">
        <div class="feature-box">🎬 Now Showing & Coming Soon Movies</div>
        <div class="feature-box">🎟️ Online Ticket Booking System</div>
        <div class="feature-box">🎭 Nearby & All Theaters</div>
        <div class="feature-box">⭐ User Reviews & Ratings</div>
    </div>
</div>

<!-- WHY US -->
<div class="card">
    <h2>🔥 Why Choose Us?</h2>
    <p>
        We focus on user experience, speed, and simplicity. Our system is designed so anyone can book tickets in seconds.
    </p>

    <p class="highlight">
        ✔ Fast Booking  
        ✔ Clean UI  
        ✔ Real Movie Data  
        ✔ Easy Navigation
    </p>
</div>

<!-- VISION -->
<div class="card">
    <h2>🚀 Our Vision</h2>
    <p>
        To become a smart digital cinema platform where users can discover, review, and book movies with a modern experience.
    </p>
</div>

</div>

</body>
</html>

<?php
include('../base/footer.php');
?>