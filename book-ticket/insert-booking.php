<?php
include('../base/header.php');

$user_id = 1;


$show_id         = $_POST['show_id'];
$category_id     = $_POST['category_id'];
$total_seats     = $_POST['total_seats'];
$payment_method  = $_POST['payment_method'];
$concession_id   = $_POST['concession_id'];


$price_query = "SELECT

show_prices.price as show_price,

seat_categories.category_name,
seat_categories.category_price

FROM show_prices

INNER JOIN seat_categories
ON show_prices.category_id = seat_categories.category_id

WHERE show_prices.show_id = '$show_id'

AND show_prices.category_id = '$category_id'";

$price_result = mysqli_query($connection, $price_query);

if(!$price_result){

    die(mysqli_error($connection));

}

$price_data = mysqli_fetch_assoc($price_result);

if(!$price_data){

    die("Price Data Not Found");

}


$single_ticket_price =
$price_data['show_price']
+
$price_data['category_price'];


$total_amount =
$single_ticket_price * $total_seats;


$discount_percentage = 0;

if($concession_id != 0){

    $concession_query = "SELECT * FROM concessions
    WHERE concession_id = '$concession_id'";

    $concession_result =
    mysqli_query($connection, $concession_query);

    $concession =
    mysqli_fetch_assoc($concession_result);

    if($concession){

        $discount_percentage =
        $concession['discount_percentage'];
    }
}


$discount_amount =
($total_amount * $discount_percentage) / 100;

$final_amount =
$total_amount - $discount_amount;


$insert_booking = "INSERT INTO bookings
(
user_id,
show_id,
total_amount,
status
)

VALUES
(
'$user_id',
'$show_id',
'$final_amount',
'confirmed'
)";

$booking_result = mysqli_query($connection, $insert_booking);

if(!$booking_result){

    die(mysqli_error($connection));

}

$booking_id = mysqli_insert_id($connection);


$insert_payment = "INSERT INTO payments
(
booking_id,
payment_method,
amount,
payment_status
)

VALUES
(
'$booking_id',
'$payment_method',
'$final_amount',
'completed'
)";

$payment_result = mysqli_query($connection, $insert_payment);

if(!$payment_result){

    die(mysqli_error($connection));

}

?>

<style>

.booking-success{
    background:#111;
    color:#fff;
    padding:40px;
    border-radius:10px;
    text-align:center;
}

.booking-success h2{
    color:#28a745;
    margin-bottom:20px;
}

.booking-success p{
    font-size:18px;
    margin-bottom:10px;
}

.price-line{
    color:#E50914;
    font-weight:bold;
}

.done-btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 25px;
    background:#E50914;
    color:#fff;
    text-decoration:none;
    border-radius:5px;
}

.done-btn:hover{
    background:#b20710;
    color:#fff;
}

</style>

<section class="section-padding-100">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="booking-success">

                    <h2>
                        Booking Successful 🎉
                    </h2>

                    <p>

                        Seat Category :

                        <span class="price-line">

                            <?php echo $price_data['category_name']; ?>

                        </span>

                    </p>

                    <p>

                        Show Price :

                        <span class="price-line">

                            Rs <?php echo $price_data['show_price']; ?>

                        </span>

                    </p>

                    <p>

                        Seat Category Price :

                        <span class="price-line">

                            Rs <?php echo $price_data['category_price']; ?>

                        </span>

                    </p>

                    <p>

                        Single Ticket Price :

                        <span class="price-line">

                            Rs <?php echo $single_ticket_price; ?>

                        </span>

                    </p>

                    <p>

                        Total Seats :

                        <span class="price-line">

                            <?php echo $total_seats; ?>

                        </span>

                    </p>

                    <p>

                        Total Amount :

                        <span class="price-line">

                            Rs <?php echo $total_amount; ?>

                        </span>

                    </p>

                    <p>

                        Discount :

                        <span class="price-line">

                            <?php echo $discount_percentage; ?>%

                        </span>

                    </p>

                    <hr style="background:#444;">

                    <h4>

                        Final Payment :

                        <span class="price-line">

                            Rs <?php echo number_format($final_amount); ?>

                        </span>

                    </h4>

                    <a href="../movies/all-movies.php"
                       class="done-btn">

                        Done

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<?php include('../base/footer.php'); ?>