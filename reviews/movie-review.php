<?php
include('../base/header.php');

$movie_query = "SELECT DISTINCT movies.* 
                FROM movies 
                INNER JOIN reviews 
                ON movies.movie_id = reviews.movie_id 
                ORDER BY movies.movie_id DESC";

$movie_result = mysqli_query($connection, $movie_query);
?>

<style>

.review-box{
    background:#111;
    border-radius:12px;
    padding:25px;
    margin-bottom:40px;
}

.movie-title{
    color:#fff;
    margin-bottom:10px;
    font-size:28px;
}

.movie-rating{
    color:gold;
    font-size:18px;
    margin-bottom:25px;
}

/* SMALL REVIEW CARD */

.review-card{
    background:#1c1c1c;
    border-left:4px solid #E50914;
    border-radius:8px;
    padding:15px;
    margin-bottom:15px;
}

.review-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:8px;
}

.review-user{
    color:#fff;
    font-size:15px;
    font-weight:bold;
}

.review-stars{
    color:gold;
    font-size:14px;
}

.review-text{
    color:#ccc;
    font-size:14px;
    line-height:1.5;
    margin-bottom:8px;
}

.review-date{
    color:#999;
    font-size:12px;
}

</style>

<section class="breadcumb-area bg-img bg-overlay"
style="background-image: url('<?php echo $base_url; ?>img/bg-img/breadcumb.jpg');">

    <div class="bradcumbContent">
        <p>What Audiences Are Saying</p>
        <h2>Movie Reviews</h2>
    </div>

</section>

<section class="section-padding-100">

<div class="container">

<?php
while($movie = mysqli_fetch_assoc($movie_result)){

    $movie_id = $movie['movie_id'];

    $avg_query = "SELECT AVG(rating) as avg_rating 
                  FROM reviews 
                  WHERE movie_id = '$movie_id'";

    $avg_result = mysqli_query($connection, $avg_query);

    $avg_data = mysqli_fetch_assoc($avg_result);

    $avg_rating = round($avg_data['avg_rating'],1);

    $review_query = "SELECT reviews.*, users.name 
                     FROM reviews
                     INNER JOIN users
                     ON reviews.user_id = users.user_id
                     WHERE reviews.movie_id = '$movie_id'
                     ORDER BY review_id DESC";

    $review_result = mysqli_query($connection, $review_query);
?>

<div class="review-box">

    <h3 class="movie-title">

        🎬 <?php echo $movie['title']; ?>

    </h3>

    <div class="movie-rating">

        ⭐ <?php echo $avg_rating; ?> / 5.0

    </div>

    <?php while($review = mysqli_fetch_assoc($review_result)){ ?>

    <div class="review-card">

        <div class="review-top">

            <div class="review-user">

                <?php echo $review['name']; ?>

            </div>

            <div class="review-stars">

                <?php
                for($i=1; $i<=5; $i++){

                    echo ($i <= $review['rating']) ? "⭐" : "☆";

                }
                ?>

            </div>

        </div>

        <div class="review-text">

            <?php echo $review['comment']; ?>

        </div>

        <div class="review-date">

            <?php echo date('d M, Y', strtotime($review['created_at'])); ?>

        </div>

    </div>

    <?php } ?>

</div>

<?php } ?>

</div>

</section>

<?php include('../base/footer.php'); ?>