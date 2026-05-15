<?php


include('../base/header.php');

$user_id = $_SESSION['user_id'];


$booking_query = "SELECT

bookings.*,

movies.title,
movies.poster,

shows.show_date,
shows.start_time,

theaters.name as theater_name

FROM bookings

INNER JOIN shows
ON bookings.show_id = shows.show_id

INNER JOIN movies
ON shows.movie_id = movies.movie_id

INNER JOIN screens
ON shows.screen_id = screens.screen_id

INNER JOIN theaters
ON screens.theater_id = theaters.theater_id

WHERE bookings.user_id = '$user_id'

ORDER BY bookings.booking_id DESC";

$booking_result = mysqli_query($connection, $booking_query);

?>

<style>

body{
    background:#000;
    color:#fff;
    font-family:Arial;
}

.booking-container{
    width:90%;
    margin:auto;
    padding:50px 0;
}

.page-title{
    text-align:center;
    margin-bottom:40px;
}

.page-title h1{
    color:#E50914;
}

.booking-card{
    background:#111;
    border:2px solid #E50914;
    border-radius:10px;
    padding:20px;
    margin-bottom:25px;
    display:flex;
    gap:20px;
    align-items:center;
}

.booking-card img{
    width:140px;
    height:180px;
    object-fit:cover;
    border-radius:10px;
}

.booking-details{
    flex:1;
}

.booking-details h3{
    color:#E50914;
    margin-bottom:15px;
}

.info{
    margin-bottom:10px;
}

.info span{
    color:#E50914;
    font-weight:bold;
}

.status{
    display:inline-block;
    padding:8px 15px;
    border-radius:5px;
    margin-top:10px;
    font-weight:bold;
}

.confirmed{
    background:green;
}

.cancelled{
    background:red;
}

.no-booking{
    background:#111;
    padding:30px;
    border-radius:10px;
    text-align:center;
    border:2px solid #E50914;
}

</style>

<div class="booking-container">

    <div class="page-title">

        <h1>
            My Bookings
        </h1>

        <p>
            Your Movie Ticket Booking History
        </p>

    </div>

    <?php

    if(mysqli_num_rows($booking_result) > 0){

        while($booking = mysqli_fetch_assoc($booking_result)){

    ?>

    <div class="booking-card">

        <img src="../dashboard/uploads/<?php echo $booking['poster']; ?>">

        <div class="booking-details">

            <h3>

                <?php echo $booking['title']; ?>

            </h3>

            <div class="info">

                <span>Theater :</span>

                <?php echo $booking['theater_name']; ?>

            </div>

            <div class="info">

                <span>Show Date :</span>

                <?php echo $booking['show_date']; ?>

            </div>

            <div class="info">

                <span>Show Time :</span>

                <?php echo $booking['start_time']; ?>

            </div>

            <div class="info">

                <span>Total Amount :</span>

                Rs <?php echo $booking['total_amount']; ?>

            </div>

            <div class="info">

                <span>Booking Date :</span>

                <?php echo $booking['booking_date']; ?>

            </div>

            <div class="status <?php echo $booking['status']; ?>">

                <?php echo ucfirst($booking['status']); ?>

            </div>

        </div>

    </div>

    <?php

        }

    }else{

    ?>

    <div class="no-booking">

        <h3>
            No Booking Found
        </h3>

        <p>
            You have not booked any movie ticket yet.
        </p>

    </div>

    <?php } ?>

</div>

<?php
include('../base/footer.php');
?>