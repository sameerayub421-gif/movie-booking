<?php
include('../base/header.php');

$select_query = "SELECT * FROM theaters";
$result = mysqli_query($connection, $select_query);
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
    background:#000;
    font-family:Arial, sans-serif;
    color:#ffffff;
}

/* Title */
h1{
    text-align:center;
    margin:30px 0;
    font-size:40px;
    color:#ffffff;
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
    width: 280px;
    background:#666666;
    border:2px solid #E50914;
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
    color:#ffffff;
}


/* text */
.card p{
    margin:5px 0;
    color:#cccccc;
    font-size:14px;
}

/* button */
.btn{
    margin-top:10px;
    display:inline-block;
    padding:8px 12px;
    background:#666666;
    color:#fff;
    border:1px solid #666666;
    text-decoration:none;
    transition:0.3s;
}

.btn:hover{
    background:#E50914;
    color:#fff;
    transform:translateY(-2px);
}

.section-title{
    text-align:center;
    margin:20px 0 40px 0;
    color:#ffffff;
}

</style>
</head>

<body>

<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <div class="single-hero-slide d-flex align-items-center justify-content-center">

            <div class="slide-img bg-img" 
                 style="background-image: url(/movie-booking-master/images/index.img/background1.jpg);">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="hero-slides-content text-center">

                            <h6>Best Cinema Experience</h6>

                            <h2>
                                ALL THEATERS
                                <span>ALL THEATERS</span>
                            </h2>

                            <a href="#theaters"
                               class="btn oneMusic-btn mt-50">
                               Explore
                               <i class="fa fa-angle-double-right"></i>
                            </a>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<h1 class="animated bounceIn">All Theaters</h1>

<p class="section-title">
    Explore all available cinemas in our system.
</p>

<div class="container" id="theaters">

<?php while($theater = mysqli_fetch_array($result)){ ?>

    <div class="card animated fadeInUp">

        <h3>
            🎭 <?php echo $theater['name']; ?>
        </h3>

        <p>
            📍 <?php echo $theater['location']; ?>
        </p>

        <p>
            🎬 Total Screens:
            <?php echo $theater['total_screens']; ?>
        </p>

        <p>
            🎧 Dolby Sound + AC Hall
        </p>

       <a href="theater-movie.php?id=<?php echo $theater['theater_id']; ?>"
          class="btn">
          View Movies
       </a>

    </div>

<?php } ?>

</div>

</body>
</html>

<?php
include('../base/footer.php');
?>