<?php
include('../base/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<style>
body{
    margin:0;
    background:#fff;
    font-family:Arial;
}

/* Title */
h1{
    text-align:center;
    margin:30px 0;
}

/* Search box */
.search-box{
    text-align:center;
    margin-bottom:30px;
}

select{
    padding:10px;
    width:250px;
    border:1px solid #000;
}

/* Container */
.container{
    width:100%;
    display:flex;
    justify-content:center;
}

/* Card */
.card{
    width:250px;
    background:#f8f9fa;
    text-align:center;
    border-radius:10px;
    overflow:hidden;
    display:none;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
    position:relative;
    transition:0.3s;
}

/* Hover */
.card:hover{
    transform:translateY(-5px);
    box-shadow:0 8px 20px rgba(0,0,0,0.15);
}

/* Image */
.card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

/* Badge */
.badge{
    position:absolute;
    top:10px;
    left:10px;
    background:red;
    color:#fff;
    padding:4px 8px;
    font-size:11px;
    border-radius:5px;
}

/* Text */
.card h3{
    margin:10px 0 5px 0;
}

.genre{
    font-size:13px;
    color:#777;
}

/* Rating */
.rating{
    margin-top:5px;
    font-size:13px;
    color:#f39c12;
}

/* Time */
.time{
    font-size:12px;
    color:#555;
    margin-bottom:5px;
}

/* Button */
.book-btn{
    margin:10px 0 15px;
    padding:8px 12px;
    background:#fff;
    border:1px solid #000;
    color:#000;
    cursor:pointer;
    transition:0.3s;
}

.book-btn:hover{
    background:#111;
    color:#fff;
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

<h1>Select Movie</h1>

<div class="search-box">
    <select id="movieSelect" onchange="showMovie()">
        <option value="">-- Select Movie --</option>
        <option value="m1">Avengers</option>
        <option value="m2">Fast 11</option>
        <option value="m3">Deadpool 3</option>
        <option value="m4">Avatar 3</option>
        <option value="m5">Batman</option>
        <option value="m6">Spider-Man</option>
        <option value="m7">Joker 2</option>
        <option value="m8">Horror Night</option>
        <option value="m9">Mission Impossible</option>
        <option value="m10">John Wick 5</option>
    </select>
</div>

<div class="container">

    <div class="card" id="m1">
        <span class="badge">Now Booking</span>
        <img src="/movie-booking-master/images/theater.img/T-movie1.jpg">
        <h3>Avengers</h3>
        <p class="genre">Action / Sci-Fi</p>
        <p class="rating">⭐ 8.5/10</p>
        <p class="time">⏱ 2h 30m</p>
        <button class="book-btn">Book Now</button>
    </div>

    <div class="card" id="m2">
        <span class="badge">Now Booking</span>
        <img src="/movie-booking-master/images/theater.img/T-movie2.jpg">
        <h3>Fast 11</h3>
        <p class="genre">Action</p>
        <p class="rating">⭐ 7.8/10</p>
        <p class="time">⏱ 2h 10m</p>
        <button class="book-btn">Book Now</button>
    </div>

    <div class="card" id="m3">
        <span class="badge">Now Booking</span>
        <img src="/movie-booking-master/images/theater.img/T-movie3.jpg">
        <h3>Deadpool 3</h3>
        <p class="genre">Action / Comedy</p>
        <p class="rating">⭐ 8.9/10</p>
        <p class="time">⏱ 2h 5m</p>
        <button class="book-btn">Book Now</button>
    </div>

    <div class="card" id="m4">
        <span class="badge">Now Booking</span>
        <img src="/movie-booking-master/images/theater.img/T-movie4.jpg">
        <h3>Avatar 3</h3>
        <p class="genre">Sci-Fi</p>
        <p class="rating">⭐ 8.7/10</p>
        <p class="time">⏱ 3h</p>
        <button class="book-btn">Book Now</button>
    </div>

    <div class="card" id="m5">
        <span class="badge">Now Booking</span>
        <img src="/movie-booking-master/images/theater.img/T-movie5.jpg">
        <h3>Batman</h3>
        <p class="genre">Action</p>
        <p class="rating">⭐ 8.2/10</p>
        <p class="time">⏱ 2h 40m</p>
        <button class="book-btn">Book Now</button>
    </div>

    <div class="card" id="m6">
        <span class="badge">Now Booking</span>
        <img src="/movie-booking-master/images/theater.img/T-movie6.jpg">
        <h3>Spider-Man</h3>
        <p class="genre">Adventure</p>
        <p class="rating">⭐ 8.6/10</p>
        <p class="time">⏱ 2h 20m</p>
        <button class="book-btn">Book Now</button>
    </div>

    <div class="card" id="m7">
        <span class="badge">Now Booking</span>
        <img src="/movie-booking-master/images/theater.img/T-movie7.jpg">
        <h3>Joker 2</h3>
        <p class="genre">Drama</p>
        <p class="rating">⭐ 8.4/10</p>
        <p class="time">⏱ 2h 15m</p>
        <button class="book-btn">Book Now</button>
    </div>

    <div class="card" id="m8">
        <span class="badge">Now Booking</span>
        <img src="/movie-booking-master/images/theater.img/T-movie1.jpg">
        <h3>Horror Night</h3>
        <p class="genre">Horror</p>
        <p class="rating">⭐ 7.5/10</p>
        <p class="time">⏱ 1h 50m</p>
        <button class="book-btn">Book Now</button>
    </div>

    <div class="card" id="m9">
        <span class="badge">Now Booking</span>
        <img src="/movie-booking-master/images/theater.img/T-movie2.jpg">
        <h3>Mission Impossible</h3>
        <p class="genre">Action</p>
        <p class="rating">⭐ 8.8/10</p>
        <p class="time">⏱ 2h 30m</p>
        <button class="book-btn">Book Now</button>
    </div>

    <div class="card" id="m10">
        <span class="badge">Now Booking</span>
        <img src="/movie-booking-master/images/theater.img/T-movie3.jpg">
        <h3>John Wick 5</h3>
        <p class="genre">Action</p>
        <p class="rating">⭐ 8.9/10</p>
        <p class="time">⏱ 2h 20m</p>
        <button class="book-btn">Book Now</button>
    </div>

</div>

<script>
function showMovie(){
    let value = document.getElementById("movieSelect").value;

    let cards = document.querySelectorAll(".card");
    cards.forEach(card => card.style.display = "none");

    if(value){
        document.getElementById(value).style.display = "block";
    }
}
</script>

</body>
</html>

<?php
include('../base/footer.php');
?>