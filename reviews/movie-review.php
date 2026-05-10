<?php
include('../base/header.php');


$movie_query = "

SELECT DISTINCT

movies.*

FROM movies

INNER JOIN reviews
ON movies.movie_id = reviews.movie_id

ORDER BY movies.movie_id DESC

";

$movie_result = mysqli_query($connection, $movie_query);

?>

<style>

body{
    background:#000;
    color:#fff;
    font-family:Arial;
}

.review-container{
    width:90%;
    margin:auto;
    padding:40px 0;
}

.page-title{
    text-align:center;
    margin-bottom:40px;
}

.movie-review-box{
    background:#111;
    border:2px solid #E50914;
    border-radius:10px;
    padding:25px;
    margin-bottom:40px;
}

.movie-review-box h2{
    color:#E50914;
    margin-bottom:25px;
}

.review-card{
    background:#1c1c1c;
    border-radius:10px;
    padding:20px;
    margin-bottom:20px;
}

.review-user{
    font-size:18px;
    font-weight:bold;
    color:#fff;
}

.review-stars{
    color:gold;
    margin:10px 0;
    font-size:20px;
}

.review-comment{
    color:#ccc;
    line-height:1.7;
}

.review-date{
    color:#999;
    font-size:13px;
    margin-top:10px;
}

.avg-rating{
    background:#E50914;
    display:inline-block;
    padding:8px 15px;
    border-radius:5px;
    margin-bottom:20px;
    font-weight:bold;
}

</style>

<div class="review-container">

    <div class="page-title">

        <h1>
            Movie Reviews & Ratings
        </h1>

        <p>
            Movies Having User Reviews
        </p>

    </div>

    <?php

    while($movie = mysqli_fetch_assoc($movie_result)){

        $movie_id = $movie['movie_id'];


        $avg_query = "SELECT AVG(rating) as avg_rating

        FROM reviews

        WHERE movie_id = '$movie_id'";

        $avg_result = mysqli_query($connection, $avg_query);

        $avg_data = mysqli_fetch_assoc($avg_result);

        $avg_rating = round($avg_data['avg_rating'],1);


        $review_query = "SELECT

        reviews.*,
        users.name

        FROM reviews

        INNER JOIN users
        ON reviews.user_id = users.user_id

        WHERE reviews.movie_id = '$movie_id'

        ORDER BY reviews.review_id DESC";

        $review_result = mysqli_query($connection, $review_query);

        ?>

        <div class="movie-review-box">

            <h2>

                🎬 <?php echo $movie['title']; ?>

            </h2>

            <div class="avg-rating">

                ⭐ Average Rating :
                <?php echo $avg_rating; ?>

            </div>

            <?php

            while($review = mysqli_fetch_assoc($review_result)){

            ?>

            <div class="review-card">

                <div class="review-user">

                    <?php echo $review['name']; ?>

                </div>

                <div class="review-stars">

                    <?php

                    for($i=1; $i<=5; $i++){

                        if($i <= $review['rating']){

                            echo "⭐";

                        }else{

                            echo "☆";
                        }
                    }

                    ?>

                </div>

                <div class="review-comment">

                    <?php echo $review['comment']; ?>

                </div>

                <div class="review-date">

                    <?php echo $review['created_at']; ?>

                </div>

            </div>

            <?php } ?>

        </div>

    <?php } ?>

</div>

<?php
include('../base/footer.php');
?>