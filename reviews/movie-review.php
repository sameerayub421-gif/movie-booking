<?php
include('../base/header.php');

// Movie query waisi hi rahegi
$movie_query = "SELECT DISTINCT movies.* FROM movies INNER JOIN reviews ON movies.movie_id = reviews.movie_id ORDER BY movies.movie_id DESC";
$movie_result = mysqli_query($connection, $movie_query);
?>

<section class="breadcumb-area bg-img bg-overlay" style="background-image: url('<?php echo $base_url; ?>img/bg-img/breadcumb.jpg');">
    <div class="bradcumbContent">
        <p>What Audiences Are Saying</p>
        <h2>Movie Reviews</h2>
    </div>
</section>

<section class="section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <p>Movies with User Reviews</p>
                    <h2>Review & Ratings</h2>
                </div>
            </div>
        </div>

        <?php
        while($movie = mysqli_fetch_assoc($movie_result)){
            $movie_id = $movie['movie_id'];
            
            // Average Rating Query
            $avg_query = "SELECT AVG(rating) as avg_rating FROM reviews WHERE movie_id = '$movie_id'";
            $avg_result = mysqli_query($connection, $avg_query);
            $avg_data = mysqli_fetch_assoc($avg_result);
            $avg_rating = round($avg_data['avg_rating'], 1);
            
            // Review Query (Database columns ke mutabiq)
            $review_query = "SELECT reviews.*, users.name FROM reviews 
                            INNER JOIN users ON reviews.user_id = users.user_id 
                            WHERE reviews.movie_id = '$movie_id' 
                            ORDER BY review_id DESC";
            $review_result = mysqli_query($connection, $review_query);
        ?>

        <div class="row mb-50">
            <div class="col-12">
                <div class="single-event-area">
                    <div class="event-text" style="padding: 30px;">
                        <h4>🎬 <?php echo $movie['title']; ?></h4>
                        <div class="rating mb-20">
                            ⭐ <span style="color: gold; font-weight: bold;"><?php echo $avg_rating; ?></span> / 5.0
                        </div>

                        <div style="margin-top: 25px;">
                            <?php while($review = mysqli_fetch_assoc($review_result)){ ?>
                            <div class="card mb-20" style="background: #1c1c1c; border: none; border-radius: 10px;">
                                <div class="card-body">
                                    <div style="margin-bottom: 10px;">
                                        <strong style="color: #fff;"><?php echo $review['name']; ?></strong>
                                        <span style="color: gold; font-size: 16px; margin-left: 10px;">
                                            <?php 
                                            // Star logic
                                            for($i=1; $i<=5; $i++){
                                                echo ($i <= $review['rating']) ? "⭐" : "☆";
                                            }
                                            ?>
                                        </span>
                                    </div>
                                    <!-- FIX 1: 'review_text' ko 'comment' kar diya -->
                                    <p style="color: #ccc; line-height: 1.6;"><?php echo $review['comment']; ?></p>
                                    
                                    <!-- FIX 2: 'review_date' ko 'created_at' kar diya -->
                                    <small style="color: #999;"><?php echo date('d M, Y', strtotime($review['created_at'])); ?></small>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<?php include('../base/footer.php'); ?>