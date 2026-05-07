<?php
include('../base/header.php');

$theater_query = "SELECT * FROM theaters";
$theater_result = mysqli_query($connection, $theater_query);

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

/* Theater title */
.theater-title{
    font-size:28px;
    font-weight:800;
    margin-bottom:25px;
    text-align:center;
    color:#111;
    letter-spacing:0.5px;
    text-transform:uppercase;
}

/* Grid */
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
    display:inline-block;
    margin:10px 0 15px;
    padding:7px 12px;
    border:1px solid #000;
    background:#fff;
    color:#000;
    text-decoration:none;
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

                                BOOK BY THEATER

                                <span>BOOK BY THEATER</span>

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


<h1>Select Theater</h1>

<div class="select-box">

    <select onchange="showTheater(this.value)">

        <option value="">-- Select Theater --</option>

        <?php while($theater = mysqli_fetch_array($theater_result)){ ?>

            <option value="theater<?php echo $theater['theater_id']; ?>">

                <?php echo $theater['name']; ?>

            </option>

        <?php } ?>

    </select>

</div>


<?php

$theater_movie_query = "SELECT
theaters.theater_id,
theaters.name as theater_name,
movies.movie_id,
movies.title,
movies.genre,
movies.duration,
movies.poster,
shows.start_time,
shows.end_time

FROM shows

INNER JOIN movies
ON shows.movie_id = movies.movie_id

INNER JOIN screens
ON shows.screen_id = screens.screen_id

INNER JOIN theaters
ON screens.theater_id = theaters.theater_id

ORDER BY theaters.theater_id ASC";

$movie_result = mysqli_query($connection, $theater_movie_query);

$current_theater = "";

?>


<?php while($movie = mysqli_fetch_array($movie_result)){ ?>

    <?php if($current_theater != $movie['theater_id']){ ?>

        <?php
        if($current_theater != ""){
            echo "</div></div>";
        }

        $current_theater = $movie['theater_id'];
        ?>

        <div class="theater-box"
             id="theater<?php echo $movie['theater_id']; ?>">

            <div class="theater-title">

                🎭 <?php echo $movie['theater_name']; ?>

            </div>

            <div class="movie-grid">

    <?php } ?>


    <div class="card">

        <img src="../dashboard/uploads/<?php echo $movie['poster']; ?>">

        <h3>

            <?php echo $movie['title']; ?>

        </h3>

        <p>

            <?php echo $movie['genre']; ?>

        </p>

        <p>

            ⭐ Rating: 5 / 5

        </p>

        <p>

            ⏱ Duration:
            <?php echo $movie['duration']; ?> Min

        </p>

        <p>

            🕒 Show:
            <?php echo $movie['start_time']; ?>
            -
            <?php echo $movie['end_time']; ?>

        </p>

        <a href="../book-ticket/select-seat.php?id=<?php echo $movie['movie_id']; ?>"
           class="btn">

           Book Now

        </a>

    </div>

<?php } ?>


<?php
if($current_theater != ""){
    echo "</div></div>";
}
?>


<script>

function showTheater(id){

    let boxes =
    document.querySelectorAll('.theater-box');

    boxes.forEach(box => {

        box.style.display = "none";

    });

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