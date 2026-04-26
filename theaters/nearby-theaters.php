<?php
include('../base/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Nearby Theaters</title>

<link rel="stylesheet" href="animate.css">

<style>

body{
    margin:0;
    font-family:Arial, sans-serif;
    background:linear-gradient(to bottom, #fff, #f4f4f4);
    color:#222;
}

/* Title */
h1{
    text-align:center;
    margin:40px 0 10px 0;
    font-size:42px;
}

/* Description */
p.desc{
    text-align:center;
    width:70%;
    margin:0 auto 30px auto;
    color:#666;
}

/* Search box */
.search-box{
    text-align:center;
    margin-bottom:40px;
}

.search-box input{
    width:280px;
    padding:10px;
    border:1px solid #000;
    outline:none;
    border-radius:6px;
}

.search-box button{
    padding:10px 14px;
    border:1px solid #000;
    background:#fff;
    cursor:pointer;
    transition:0.3s;
    border-radius:6px;
}

.search-box button:hover{
    background:#111;
    color:#fff;
}

/* Grid */
.container{
    width:90%;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(260px, 1fr));
    gap:25px;
    padding-bottom:60px;
}

/* Card */
.card{
    background:#fff;
    padding:25px;
    border-radius:15px;
    text-align:center;
    transition:0.3s ease;
    box-shadow:0 5px 15px rgba(0,0,0,0.06);
}

/* hover */
.card:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 30px rgba(0,0,0,0.12);
}

/* text */
.card h3{
    margin-bottom:10px;
}

.card p{
    margin:6px 0;
    color:#555;
}

/* badge */
.distance{
    display:inline-block;
    margin-top:10px;
    padding:5px 10px;
    font-size:12px;
    border-radius:20px;
    background:#000;
    color:#fff;
}

/* button */
.btn{
    margin-top:15px;
    display:inline-block;
    padding:9px 16px;
    background:#fff;
    color:#000;
    border:1px solid #000;
    border-radius:8px;
    text-decoration:none;
    transition:0.3s;
}

.btn:hover{
    background:#111;
    color:#fff;
}

/* hide class */
.hide{
    display:none;
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

<h1 class="animated fadeInDown">Nearby Theaters</h1>

<p class="desc animated fadeIn">
Find cinemas near your location and book your seats instantly.
</p>

<!-- SEARCH BOX -->
<div class="search-box">
    <input type="text" id="searchInput" placeholder="Enter city e.g Lahore, Karachi">
    <button onclick="filterTheaters()">Search</button>
    <button onclick="resetFilter()">Reset</button>
</div>

<div class="container" id="theaterContainer">

    <div class="card" data-city="lahore">
        <h3>🎬 Cineplex Cinema</h3>
        <p>📍 Lahore Mall Road</p>
        <span class="distance">2.5 km</span>
        <p>⏱ 10 min drive</p>
        <a href="#" class="btn">Book Seat</a>
    </div>

    <div class="card" data-city="lahore">
        <h3>🎬 Mega Movies Hall</h3>
        <p>📍 DHA Phase 5</p>
        <span class="distance">4 km</span>
        <p>⏱ 15 min drive</p>
        <a href="#" class="btn">Book Seat</a>
    </div>

    <div class="card" data-city="karachi">
        <h3>🎬 IMAX Cinema</h3>
        <p>📍 Clifton Karachi</p>
        <span class="distance">6 km</span>
        <p>⏱ 20 min drive</p>
        <a href="#" class="btn">Book Seat</a>
    </div>

    <div class="card" data-city="karachi">
        <h3>🎬 Star Cinema</h3>
        <p>📍 DHA Karachi</p>
        <span class="distance">5 km</span>
        <p>⏱ 18 min drive</p>
        <a href="#" class="btn">Book Seat</a>
    </div>

</div>

<script>

// filter function
function filterTheaters(){
    let input = document.getElementById("searchInput").value.toLowerCase();
    let cards = document.querySelectorAll(".card");

    cards.forEach(card => {
        let city = card.getAttribute("data-city");

        if(input === "" || city.includes(input)){
            card.classList.remove("hide");
        } else {
            card.classList.add("hide");
        }
    });
}

// reset function
function resetFilter(){
    document.getElementById("searchInput").value = "";

    document.querySelectorAll(".card").forEach(card => {
        card.classList.remove("hide");
    });
}

</script>

</body>
</html>

<?php
include('../base/footer.php');
?>