<?php
include('../base/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Movie Reviews & Rating</title>

<style>

/* ===== BASIC ===== */
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

/* ===== DROPDOWN ===== */
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

/* ===== REVIEW SECTION ===== */
.review-box{
    display:none;
    width:90%;
    margin:20px auto;
}

.movie-title{
    text-align:center;
    font-size:28px;
    font-weight:800;
    margin-bottom:20px;
}

.review-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
}

/* card */
.review-card{
    background:#f8f9fa;
    padding:15px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.08);
    transition:0.3s;
}

.review-card:hover{
    transform:translateY(-5px);
}

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

.user{
    font-weight:bold;
}

.tag{
    font-size:11px;
    color:green;
}

.stars{
    color:#f5b301;
    margin:5px 0;
}

.review-card p{
    font-size:13px;
    color:#444;
}

.date{
    font-size:11px;
    color:#888;
    margin-top:8px;
}

/* ===== RATING BOX ===== */
.rating-box{
    text-align:center;
    background:#f8f9fa;
    padding:25px;
    margin:40px auto;
    width:80%;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.rating-box h2{
    margin-bottom:10px;
}

.overall{
    font-size:22px;
    font-weight:bold;
}

.overall span{
    font-size:14px;
    color:#666;
}

.stars span{
    font-size:32px;
    cursor:pointer;
    color:#ccc;
    transition:0.2s;
}

.stars span.active{
    color:#f5b301;
}

.btn{
    margin-top:15px;
    padding:8px 15px;
    border:1px solid #000;
    background:#fff;
    cursor:pointer;
    transition:0.3s;
}

.btn:hover{
    background:#111;
    color:#fff;
}

/* ===== RESPONSIVE ===== */
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
<p class="desc">Select movie to see reviews & ratings</p>

<!-- DROPDOWN -->
<div class="select-box">
    <select onchange="showMovie(this.value)">
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
<?php for($i=1;$i<=8;$i++){ ?>
<div class="review-card">
    <div class="avatar">A</div>
    <div class="user">User <?php echo $i; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐⭐</div>
    <p>Epic action, emotional story and best Marvel experience ever.</p>
    <div class="date">2 days ago</div>
</div>
<?php } ?>
</div>
</div>

<!-- ================= FAST ================= -->
<div class="review-box" id="fast">
<div class="movie-title">🎬 Fast & Furious 11</div>

<div class="review-grid">
<?php for($i=1;$i<=8;$i++){ ?>
<div class="review-card">
    <div class="avatar">F</div>
    <div class="user">User <?php echo $i; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐</div>
    <p>Full action, car stunts and speed madness.</p>
    <div class="date">1 week ago</div>
</div>
<?php } ?>
</div>
</div>

<!-- ================= DEADPOOL ================= -->
<div class="review-box" id="deadpool">
<div class="movie-title">🎬 Deadpool 3</div>

<div class="review-grid">
<?php for($i=1;$i<=8;$i++){ ?>
<div class="review-card">
    <div class="avatar">D</div>
    <div class="user">User <?php echo $i; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐⭐</div>
    <p>Comedy + action perfect mix, very funny.</p>
    <div class="date">3 days ago</div>
</div>
<?php } ?>
</div>
</div>

<!-- ================= AVATAR ================= -->
<div class="review-box" id="avatar">
<div class="movie-title">🎬 Avatar 3</div>

<div class="review-grid">
<?php for($i=1;$i<=8;$i++){ ?>
<div class="review-card">
    <div class="avatar">V</div>
    <div class="user">User <?php echo $i; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐⭐</div>
    <p>Visual masterpiece and stunning world.</p>
    <div class="date">5 days ago</div>
</div>
<?php } ?>
</div>
</div>

<!-- ================= BATMAN ================= -->
<div class="review-box" id="batman">
<div class="movie-title">🎬 Batman</div>

<div class="review-grid">
<?php for($i=1;$i<=8;$i++){ ?>
<div class="review-card">
    <div class="avatar">B</div>
    <div class="user">User <?php echo $i; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐</div>
    <p>Dark tone and strong storyline.</p>
    <div class="date">4 days ago</div>
</div>
<?php } ?>
</div>
</div>

<!-- ================= SPIDERMAN ================= -->
<div class="review-box" id="spiderman">
<div class="movie-title">🎬 Spider-Man</div>

<div class="review-grid">
<?php for($i=1;$i<=8;$i++){ ?>
<div class="review-card">
    <div class="avatar">S</div>
    <div class="user">User <?php echo $i; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐⭐</div>
    <p>Very emotional and entertaining.</p>
    <div class="date">6 days ago</div>
</div>
<?php } ?>
</div>
</div>

<!-- ================= JOKER ================= -->
<div class="review-box" id="joker">
<div class="movie-title">🎬 Joker 2</div>

<div class="review-grid">
<?php for($i=1;$i<=8;$i++){ ?>
<div class="review-card">
    <div class="avatar">J</div>
    <div class="user">User <?php echo $i; ?> <span class="tag">✔ Verified</span></div>
    <div class="stars">⭐⭐⭐⭐⭐</div>
    <p>Dark psychological masterpiece.</p>
    <div class="date">2 weeks ago</div>
</div>
<?php } ?>
</div>
</div>

<!-- ================= RATING ================= -->
<div class="rating-box">

<h2>⭐ User Rating</h2>

<div class="overall">
    ⭐ <span id="avg">4.7</span> / 5 <span>(150 users)</span>
</div>

<div class="stars" id="starBox">
    <span onclick="rate(1)">★</span>
    <span onclick="rate(2)">★</span>
    <span onclick="rate(3)">★</span>
    <span onclick="rate(4)">★</span>
    <span onclick="rate(5)">★</span>
</div>

<button class="btn" onclick="submitRating()">Submit Rating</button>

</div>

<script>

function showMovie(id){
    let boxes = document.querySelectorAll('.review-box');
    boxes.forEach(b => b.style.display = "none");
    if(id){
        document.getElementById(id).style.display = "block";
    }
}

let selected = 0;

function rate(v){
    selected = v;
    let stars = document.querySelectorAll('#starBox span');

    stars.forEach((s,i)=>{
        s.classList.toggle('active', i < v);
    });
}

function submitRating(){
    if(selected == 0){
        alert("Select rating first!");
        return;
    }

    alert("Thanks for rating " + selected + " stars!");

    document.getElementById('avg').innerText =
    (4.7 + selected/10).toFixed(1);
}

</script>

</body>
</html>

<?php
include('../base/footer.php');
?>