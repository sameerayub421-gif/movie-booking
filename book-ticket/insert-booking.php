<?php
include('../base/header.php');

$user_id = 1;

$show_id = $_POST['show_id'];

$seat_category = $_POST['seat_category'];

$total_seats = $_POST['total_seats'];

$payment_method = $_POST['payment_method'];

$concession = $_POST['concession'];


// PRICE SET
if($seat_category == "Gold"){
    $price = 500;
}
elseif($seat_category == "Platinum"){
    $price = 800;
}
else{
    $price = 1200;
}


// CONCESSION DISCOUNT
$discount = 0;

if($concession == "Student"){
    $discount = 10;
}
elseif($concession == "Senior Citizen"){
    $discount = 15;
}


// TOTAL
$total_amount = $price * $total_seats;

$discount_amount = ($total_amount * $discount) / 100;

$final_amount = $total_amount - $discount_amount;


// INSERT BOOKING
$insert_booking = "INSERT INTO bookings
(user_id, show_id, total_amount, status)

VALUES

('$user_id',
'$show_id',
'$final_amount',
'confirmed')";

mysqli_query($connection, $insert_booking);

$booking_id = mysqli_insert_id($connection);


// INSERT PAYMENT
$insert_payment = "INSERT INTO payments
(booking_id, payment_method, amount, payment_status)

VALUES

('$booking_id',
'$payment_method',
'$final_amount',
'completed')";

mysqli_query($connection, $insert_payment);

?>

<section class="section-padding-100">

    <div class="container text-center">

        <h2>
            Booking Successful
        </h2>

        <h4 class="mt-4">
            Total Payment:
            Rs <?php echo $final_amount; ?>
        </h4>

        <a href="../movies/all-movies.php"
           class="btn oneMusic-btn mt-4">

           Back To Movies

        </a>

    </div>

</section>

<?php include('../base/footer.php'); ?>