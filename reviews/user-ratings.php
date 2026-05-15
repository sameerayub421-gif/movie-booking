<?php
include('../base/header.php');

/* INSERT REVIEW */

if(isset($_POST['submit_review'])){

    $user_id = $_SESSION['user_id'];

    $movie_id = $_POST['movie_id'];

    $rating = $_POST['rating'];

    $comment = mysqli_real_escape_string(
        $connection,
        $_POST['comment']
    );

    $insert_query = "INSERT INTO reviews
    (
        user_id,
        movie_id,
        rating,
        comment
    )

    VALUES
    (
        '$user_id',
        '$movie_id',
        '$rating',
        '$comment'
    )";

    mysqli_query($connection, $insert_query);

    echo "

    <script>

    alert('Review Submitted Successfully');

    window.location='user-ratings.php';

    </script>

    ";
}

/* MOVIES */

$movie_query = "SELECT * FROM movies";

$movie_result = mysqli_query($connection, $movie_query);

?>

<style>

body{
    background:#000;
    color:#fff;
    font-family:Arial;
}

.main-box{
    width:90%;
    margin:auto;
    padding:50px 0;
}

.review-form{
    background:#111;
    padding:30px;
    border-radius:10px;
    margin-bottom:50px;
}

.review-card{
    background:#1b1b1b;
    border:2px solid #E50914;
    border-radius:10px;
    padding:20px;
    margin-bottom:20px;
}

.review-card h3{
    color:#E50914;
}

input,
select,
textarea{
    width:100%;
    background:#222;
    border:1px solid #555;
    color:#fff;
    padding:12px;
    border-radius:5px;
    margin-bottom:15px;
}

textarea{
    height:120px;
}

.btn-review{
    background:#E50914;
    color:#fff;
    border:none;
    padding:12px 25px;
    border-radius:5px;
}

.btn-review:hover{
    background:#b20710;
}

.stars{
    color:gold;
    margin:10px 0;
    font-size:20px;
}

</style>

<div class="main-box">

    <h1 class="text-center mb-5">
        Movie Ratings & Reviews
    </h1>

    <!-- REVIEW FORM -->

    <div class="review-form">

        <h3 class="mb-4">
            Submit Your Review
        </h3>

        <form action=""
              method="POST">

            <!-- MOVIE -->

            <select name="movie_id" required>

                <option value="">
                    Select Movie
                </option>

                <?php while($movie = mysqli_fetch_assoc($movie_result)){ ?>

                <option value="<?php echo $movie['movie_id']; ?>">

                    <?php echo $movie['title']; ?>

                </option>

                <?php } ?>

            </select>

            <!-- RATING -->

            <select name="rating" required>

                <option value="">
                    Select Rating
                </option>

                <option value="1">1 Star</option>
                <option value="2">2 Star</option>
                <option value="3">3 Star</option>
                <option value="4">4 Star</option>
                <option value="5">5 Star</option>

            </select>

            <!-- COMMENT -->

            <textarea
            name="comment"
            placeholder="Write your review..."
            required></textarea>

            <button type="submit"
                    name="submit_review"
                    class="btn-review">

                Submit Review

            </button>

        </form>

    </div>

    <!-- ALL REVIEWS -->

    <?php

    $review_query = "

    SELECT

    reviews.*,
    movies.title,
    users.name

    FROM reviews

    INNER JOIN movies
    ON reviews.movie_id = movies.movie_id

    INNER JOIN users
    ON reviews.user_id = users.user_id

    ORDER BY reviews.review_id DESC

    ";

    $review_result = mysqli_query($connection, $review_query);

    while($review = mysqli_fetch_assoc($review_result)){

    ?>

    <div class="review-card">

        <h3>

            🎬 <?php echo $review['title']; ?>

        </h3>

        <strong>

            <?php echo $review['name']; ?>

        </strong>

        <div class="stars">

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

        <p>

            <?php echo $review['comment']; ?>

        </p>

        <small>

            <?php echo $review['created_at']; ?>

        </small>

    </div>

    <?php } ?>

</div>

<?php
include('../base/footer.php');
?>