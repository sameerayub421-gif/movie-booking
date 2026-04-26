<?php
include('../base/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Movie Reviews</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#fff;
}

h1{
    text-align:center;
    margin:30px 0 10px;
}

p.desc{
    text-align:center;
    color:#555;
    margin-bottom:20px;
}

/* dropdown */
.select-box{
    text-align:center;
    margin-bottom:25px;
}

select{
    padding:10px;
    width:260px;
    border:1px solid #000;
    border-radius:5px;
}

/* review box */
.review-box{
    display:none;
    width:90%;
    margin:20px auto;
}

.movie-title{
    text-align:center;
    font-size:28px;
    font-weight:800;
    margin-bottom:25px;
}

/* grid */
.review-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:20px;
}

/* review card */
.review-card{
    background:#f8f9fa;
    padding:15px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.08);
    transition:0.3s;
    position:relative;
}

.review-card:hover{
    transform:translateY(-5px);
}

/* avatar */
.avatar{
    width:40px;
    height:40px;
    border-radius:50%;
    background:#111;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:14px;
    font-weight:bold;
    margin-bottom:8px;
}

/* name + tag */
.user{
    font-weight:bold;
}

.tag{
    font-size:11px;
    color:green;
    font-weight:bold;
}

/* stars */
.stars{
    color:#f5b301;
    margin:5px 0;
}

/* text */
.review-card p{
    font-size:13px;
    color:#444;
    line-height:1.4;
}

/* date */
.date{
    font-size:11px;
    color:#888;
    margin-top:8px;
}

/* responsive */
@media(max-width:900px){
    .review-grid{
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:600px){
    .review-grid{
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

<h1>Movie Reviews</h1>
<p class="desc">Select a movie to see user experiences and ratings</p>

<div class="select-box">
    <select onchange="showReviews(this.value)">
        <option value="">-- Select Movie --</option>
        <option value="avengers">Avengers</option>
        <option value="fast">Fast & Furious 11</option>
        <option value="deadpool">Deadpool 3</option>
        <option value="avatar">Avatar 3</option>
        <option value="batman">Batman</option>
        <option value="spiderman">Spider-Man</option>
        <option value="joker">Joker 2</option>
    </select>
</div>

<!-- ================= AVENGERS ================= -->
<div class="review-box" id="avengers">
<div class="movie-title">🎬 Avengers</div>

<div class="review-grid">

<?php for($i=0;$i<8;$i++){ ?>
<div class="review-card">
    <div class="avatar">A<?php echo $i+1; ?></div>
    <div class="user">User <?php echo $i+1; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐⭐</div>
    <p>Epic action scenes, emotional story and best Marvel experience ever.</p>
    <div class="date">2 days ago</div>
</div>
<?php } ?>

</div>
</div>

<!-- ================= FAST ================= -->
<div class="review-box" id="fast">
<div class="movie-title">🎬 Fast & Furious 11</div>

<div class="review-grid">

<?php for($i=0;$i<8;$i++){ ?>
<div class="review-card">
    <div class="avatar">F<?php echo $i+1; ?></div>
    <div class="user">User <?php echo $i+1; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐</div>
    <p>Full action, speed and car stunts are insane.</p>
    <div class="date">1 week ago</div>
</div>
<?php } ?>

</div>
</div>

<!-- ================= DEADPOOL ================= -->
<div class="review-box" id="deadpool">
<div class="movie-title">🎬 Deadpool 3</div>

<div class="review-grid">

<?php for($i=0;$i<8;$i++){ ?>
<div class="review-card">
    <div class="avatar">D<?php echo $i+1; ?></div>
    <div class="user">User <?php echo $i+1; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐⭐</div>
    <p>Comedy + action perfect mix, very entertaining movie.</p>
    <div class="date">3 days ago</div>
</div>
<?php } ?>

</div>
</div>

<!-- ================= AVATAR ================= -->
<div class="review-box" id="avatar">
<div class="movie-title">🎬 Avatar 3</div>

<div class="review-grid">

<?php for($i=0;$i<8;$i++){ ?>
<div class="review-card">
    <div class="avatar">V<?php echo $i+1; ?></div>
    <div class="user">User <?php echo $i+1; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐⭐</div>
    <p>Visual masterpiece, world building is next level.</p>
    <div class="date">5 days ago</div>
</div>
<?php } ?>

</div>
</div>

<!-- ================= BATMAN ================= -->
<div class="review-box" id="batman">
<div class="movie-title">🎬 Batman</div>

<div class="review-grid">

<?php for($i=0;$i<8;$i++){ ?>
<div class="review-card">
    <div class="avatar">B<?php echo $i+1; ?></div>
    <div class="user">User <?php echo $i+1; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐</div>
    <p>Dark tone, strong acting and great storyline.</p>
    <div class="date">4 days ago</div>
</div>
<?php } ?>

</div>
</div>

<!-- ================= SPIDERMAN ================= -->
<div class="review-box" id="spiderman">
<div class="movie-title">🎬 Spider-Man</div>

<div class="review-grid">

<?php for($i=0;$i<8;$i++){ ?>
<div class="review-card">
    <div class="avatar">S<?php echo $i+1; ?></div>
    <div class="user">User <?php echo $i+1; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐⭐</div>
    <p>Very emotional and fun experience for all ages.</p>
    <div class="date">6 days ago</div>
</div>
<?php } ?>

</div>
</div>

<!-- ================= JOKER ================= -->
<div class="review-box" id="joker">
<div class="movie-title">🎬 Joker 2</div>

<div class="review-grid">

<?php for($i=0;$i<8;$i++){ ?>
<div class="review-card">
    <div class="avatar">J<?php echo $i+1; ?></div>
    <div class="user">User <?php echo $i+1; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐⭐</div>
    <p>Dark psychological masterpiece, very deep meaning.</p>
    <div class="date">2 weeks ago</div>
</div>
<?php } ?>

</div>
</div>

<script>
function showReviews(id){
    let boxes = document.querySelectorAll('.review-box');
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