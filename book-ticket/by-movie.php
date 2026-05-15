<?php
include('../base/header.php');

$select_query = "SELECT * FROM movies ORDER BY movie_id DESC";
$result = mysqli_query($connection, $select_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<style>

body{
    margin:0;
    background:#000;
    font-family:Arial;
}

h1{
    text-align:center;
    margin:30px 0;
    color:#ffffff;
}

.search-box{
    text-align:center;
    margin-bottom:30px;
}

select{
    padding:10px;
    width:250px;
    border:1px solid #E50914;
    outline:none;
}

.container{
    width:100%;
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:20px;
    padding-bottom:50px;
}

card{
    width:280px;
    background:#666666;
    border:2px solid #E50914;
    text-align:center;
    border-radius:10px;
    overflow:hidden;
    display:none;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
    position:relative;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-5px);
    box-shadow:0 8px 20px rgba(0,0,0,0.15);
}

.card img{
    width:100%;
    height:320px;
    object-fit:cover;
}

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

.card h3{
    margin:10px 0 5px 0;
    color:#ffffff;
}

.genre{
    font-size:13px;
    color:#cccccc;
}

.rating{
    margin-top:5px;
    font-size:13px;
    color:#f39c12;
}

.time{
    font-size:12px;
    color:#cccccc;
    margin-bottom:5px;
}

.book-btn{
    display:inline-block;
    margin:10px 0 15px;
    padding:8px 12px;
    background:#666666;
    border:1px solid #666666;
    color:#fff;
    text-decoration:none;
    transition:0.3s;
}

.book-btn:hover{
    background:#E50914;
    color:#fff;
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

                            <h6 data-animation="fadeInUp" data-delay="100ms">
                                SuperHit Movie
                            </h6>

                            <h2 data-animation="fadeInUp" data-delay="300ms">

                                SELECT MOVIE

                                <span>SELECT MOVIE</span>

                            </h2>

                            <a data-animation="fadeInUp"
                               data-delay="500ms"
                               href="#"
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


<h1>Select Movie</h1>

<div class="search-box">

    <select id="movieSelect" onchange="showMovie()">

        <option value="">-- Select Movie --</option>

        <?php while($movie = mysqli_fetch_array($result)){ ?>

            <option value="movie<?php echo $movie['movie_id']; ?>">

                <?php echo $movie['title']; ?>

            </option>

        <?php } ?>

    </select>

</div>


<?php

$select_query = "SELECT * FROM movies ORDER BY movie_id DESC";
$movie_result = mysqli_query($connection, $select_query);

?>

<div class="container">

<?php while($movie = mysqli_fetch_array($movie_result)){ ?>

    <div class="card"
         id="movie<?php echo $movie['movie_id']; ?>">

        <span class="badge">

            Now Booking

        </span>

        <img src="../dashboard/uploads/<?php echo $movie['poster']; ?>">

        <h3>

            <?php echo $movie['title']; ?>

        </h3>

        <p class="genre">

            <?php echo $movie['genre']; ?>

        </p>

        <p class="rating">

            ⭐ 5/5

        </p>

        <p class="time">

            ⏱ <?php echo $movie['duration']; ?> Min

        </p>

        <a href="../book-ticket/by-movie.php?id=<?php echo $movie['movie_id']; ?>"
           class="book-btn">

           Book Now

        </a>

    </div>

<?php } ?>

</div>


<script>

function showMovie(){

    let value =
    document.getElementById("movieSelect").value;

    let cards =
    document.querySelectorAll(".card");

    cards.forEach(card => {

        card.style.display = "none";

    });

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