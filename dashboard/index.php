<?php
include('./base/header.php');

$user_query = "SELECT * FROM users";
$user_result = mysqli_query($connection, $user_query);
$total_users = mysqli_num_rows($user_result);

$movie_query = "SELECT * FROM movies";
$movie_result = mysqli_query($connection, $movie_query);
$total_movies = mysqli_num_rows($movie_result);

$theater_query = "SELECT * FROM theaters";
$theater_result = mysqli_query($connection, $theater_query);
$total_theaters = mysqli_num_rows($theater_result);

$booking_query = "SELECT * FROM bookings";
$booking_result = mysqli_query($connection, $booking_query);
$total_bookings = mysqli_num_rows($booking_result);
?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-users fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Users</p>
                    <h6 class="mb-0"><?php echo $total_users; ?></h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-film fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Movies</p>
                    <h6 class="mb-0"><?php echo $total_movies; ?></h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-building fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Theaters</p>
                    <h6 class="mb-0"><?php echo $total_theaters; ?></h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-ticket-alt fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Bookings</p>
                    <h6 class="mb-0"><?php echo $total_bookings; ?></h6>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('./base/footer.php'); ?>
