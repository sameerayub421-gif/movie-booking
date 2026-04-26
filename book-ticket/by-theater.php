<?php
include('../base/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Book by Theater</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#fff;
}

/* Title */
h1{
    text-align:center;
    margin:30px 0;
}

/* Dropdown */
.select-box{
    text-align:center;
    margin-bottom:20px;
}

select{
    padding:10px;
    width:250px;
    border:1px solid #000;
}

/* Theater section */
.theater-box{
    display:none;
    width:100%;
    margin:20px auto;
    text-align:center;
}

/* 🔥 Theater title improved */
.theater-title{
    font-size:28px;
    font-weight:800;
    margin-bottom:25px;
    text-align:center;
    color:#111;
    letter-spacing:0.5px;
    text-transform:uppercase;
}

/* 🔥 CENTERED GRID FIX */
.movie-grid{
    display:grid;
    grid-template-columns:repeat(2, 220px);
    gap:20px;
    justify-content:center;
    align-content:start;
    width:fit-content;
    margin:0 auto;
}

/* Card */
.card{
    background:#f8f9fa;
    border-radius:10px;
    overflow:hidden;
    text-align:center;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
    transition:0.3s;
    padding-bottom:12px;
}

.card:hover{
    transform:translateY(-5px);
}

/* Image */
.card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

/* Text */
.card h3{
    margin:10px 0 5px;
}

.card p{
    font-size:13px;
    color:#555;
    margin:3px 0;
}

/* Button */
.btn{
    margin:10px 0 15px;
    padding:7px 12px;
    border:1px solid #000;
    background:#fff;
    cursor:pointer;
    transition:0.3s;
}

.btn:hover{
    background:#111;
    color:#fff;
}

/* responsive */
@media(max-width:992px){
    .movie-grid{
        grid-template-columns:repeat(2, 220px);
    }
}

@media(max-width:600px){
    .movie-grid{
        grid-template-columns:repeat(1, 220px);
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

<h1>Select Theater</h1>

<div class="select-box">
    <select onchange="showTheater(this.value)">
        <option value="">-- Select Theater --</option>
        <option value="t1">Cineplex Cinema</option>
        <option value="t2">Mega Movies Hall</option>
        <option value="t3">Star Cine Gold</option>
    </select>
</div>

<!-- THEATERS SAME AS BEFORE -->
<div class="theater-box" id="t1">
    <div class="theater-title">🎭 Cineplex Cinema</div>

    <div class="movie-grid">

        <div class="card">
            <img src="/movie-booking-master/images/theater.img/T-movie1.jpg">
            <h3>Avengers</h3>
            <p>Action / Sci-Fi</p>
            <p>⭐ Rating: 4.7 / 5</p>
            <p>⏱ Duration: 2h 35m</p>
            <p>🕒 Show: 10:00 AM - 1:00 PM</p>
            <button class="btn">Book Now</button>
        </div>

        <div class="card">
            <img src="/movie-booking-master/images/theater.img/T-movie2.jpg">
            <h3>Fast 11</h3>
            <p>Action</p>
            <p>⭐ Rating: 4.5 / 5</p>
            <p>⏱ Duration: 2h 20m</p>
            <p>🕒 Show: 1:30 PM - 4:00 PM</p>
            <button class="btn">Book Now</button>
        </div>

    </div>
</div>

<div class="theater-box" id="t2">
    <div class="theater-title">🎭 Mega Movies Hall</div>

    <div class="movie-grid">

        <div class="card">
            <img src="/movie-booking-master/images/theater.img/T-movie3.jpg">
            <h3>Deadpool 3</h3>
            <p>Action / Comedy</p>
            <p>⭐ Rating: 4.8 / 5</p>
            <p>⏱ Duration: 2h 10m</p>
            <p>🕒 Show: 5:00 PM - 7:10 PM</p>
            <button class="btn">Book Now</button>
        </div>

        <div class="card">
            <img src="/movie-booking-master/images/theater.img/T-movie4.jpg">
            <h3>Avatar 3</h3>
            <p>Sci-Fi</p>
            <p>⭐ Rating: 4.9 / 5</p>
            <p>⏱ Duration: 3h 00m</p>
            <p>🕒 Show: 7:30 PM - 10:30 PM</p>
            <button class="btn">Book Now</button>
        </div>

    </div>
</div>

<div class="theater-box" id="t3">
    <div class="theater-title">🎭 Star Cine Gold</div>

    <div class="movie-grid">

        <div class="card">
            <img src="/movie-booking-master/images/theater.img/T-movie5.jpg">
            <h3>Batman</h3>
            <p>Action</p>
            <p>⭐ Rating: 4.6 / 5</p>
            <p>⏱ Duration: 2h 25m</p>
            <p>🕒 Show: 2:00 PM - 4:25 PM</p>
            <button class="btn">Book Now</button>
        </div>

        <div class="card">
            <img src="/movie-booking-master/images/theater.img/T-movie6.jpg">
            <h3>Spider-Man</h3>
            <p>Adventure</p>
            <p>⭐ Rating: 4.7 / 5</p>
            <p>⏱ Duration: 2h 15m</p>
            <p>🕒 Show: 6:00 PM - 8:15 PM</p>
            <button class="btn">Book Now</button>
        </div>

    </div>
</div>

<script>
function showTheater(id){
    let boxes = document.querySelectorAll('.theater-box');
    boxes.forEach(b => b.style.display = "none");

    if(id){
        document.getElementById(id).style.display = "block";
    }
}
</script>

</body>
</html>

<?php
include('../base/footer.php');
?>