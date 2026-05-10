<?php
include('../base/header.php');

$movie_id = $_GET['movie_id'];


$select_query = "SELECT

movies.movie_id,
movies.title,

shows.show_id,
shows.show_date,
shows.start_time,
shows.end_time,

screens.screen_name,
theaters.name as theater_name

FROM movies

INNER JOIN shows
ON movies.movie_id = shows.movie_id

INNER JOIN screens
ON shows.screen_id = screens.screen_id

INNER JOIN theaters
ON screens.theater_id = theaters.theater_id

WHERE movies.movie_id = '$movie_id'

LIMIT 1";

$result = mysqli_query($connection, $select_query);

if(!$result){

    die(mysqli_error($connection));

}

$show = mysqli_fetch_assoc($result);

if(!$show){

    die("No Show Found");

}


$category_query = "SELECT

show_prices.price as show_price,

seat_categories.category_id,
seat_categories.category_name,
seat_categories.category_price

FROM show_prices

INNER JOIN seat_categories
ON show_prices.category_id = seat_categories.category_id

WHERE show_prices.show_id = '".$show['show_id']."'";

$category_result = mysqli_query($connection, $category_query);

if(!$category_result){

    die(mysqli_error($connection));

}


$concession_query = "SELECT * FROM concessions";

$concession_result = mysqli_query($connection, $concession_query);

?>

<style>

body{
    background:#000;
    color:#fff;
}

.form-control{
    background:#222;
    color:#fff;
    border:1px solid #555;
}

.form-control:focus{
    background:#222;
    color:#fff;
    border-color:#E50914;
}

.booking-box{
    background:#111;
    padding:40px;
    border-radius:10px;
}

.price-box{
    background:#1c1c1c;
    padding:20px;
    border-radius:10px;
    margin-top:20px;
    text-align:center;
}

.total-price{
    font-size:32px;
    color:#E50914;
    font-weight:bold;
}

.category-card{
    background:#1a1a1a;
    padding:15px;
    border-radius:10px;
    margin-bottom:15px;
}

.category-card span{
    color:#E50914;
    font-weight:bold;
}

</style>

<section class="breadcumb-area bg-img bg-overlay"
style="background-image:url(<?php echo $base_url; ?>img/bg-img/breadcumb.jpg);">

    <div class="bradcumbContent">

        <p>Movie Ticket Booking</p>

        <h2>Book Now</h2>

    </div>

</section>

<section class="contact-area section-padding-100">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="booking-box">

                    <div class="section-heading">

                        <p>Complete Your Booking</p>

                        <h2>Movie Booking Form</h2>

                    </div>

                    <form action="insert-booking.php"
                          method="POST">

                        <input type="hidden"
                               name="show_id"
                               value="<?php echo $show['show_id']; ?>">


                        <div class="form-group mb-3">

                            <label>Movie</label>

                            <input type="text"
                                   class="form-control"
                                   value="<?php echo $show['title']; ?>"
                                   readonly>

                        </div>


                        <div class="form-group mb-3">

                            <label>Theater</label>

                            <input type="text"
                                   class="form-control"
                                   value="<?php echo $show['theater_name']; ?>"
                                   readonly>

                        </div>


                        <div class="form-group mb-3">

                            <label>Screen</label>

                            <input type="text"
                                   class="form-control"
                                   value="<?php echo $show['screen_name']; ?>"
                                   readonly>

                        </div>


                        <div class="form-group mb-3">

                            <label>Show Date</label>

                            <input type="text"
                                   class="form-control"
                                   value="<?php echo $show['show_date']; ?>"
                                   readonly>

                        </div>


                        <div class="form-group mb-3">

                            <label>Show Time</label>

                            <input type="text"
                                   class="form-control"
                                   value="<?php echo $show['start_time']; ?> - <?php echo $show['end_time']; ?>"
                                   readonly>

                        </div>


                        <div class="mb-4">

                            <h5 class="mb-3">
                                Available Seat Categories
                            </h5>

                            <?php

                            mysqli_data_seek($category_result, 0);

                            while($cat = mysqli_fetch_assoc($category_result)){

                                $final_ticket_price =
                                $cat['show_price']
                                +
                                $cat['category_price'];

                            ?>

                            <div class="category-card">

                                <h6>
                                    <?php echo $cat['category_name']; ?>
                                </h6>

                                Show Price :
                                <span>
                                    Rs <?php echo $cat['show_price']; ?>
                                </span>

                                <br>

                                Seat Category Price :
                                <span>
                                    Rs <?php echo $cat['category_price']; ?>
                                </span>

                                <br>

                                Final Ticket Price :
                                <span>
                                    Rs <?php echo $final_ticket_price; ?>
                                </span>

                            </div>

                            <?php } ?>

                        </div>


                        <div class="form-group mb-3">

                            <label>Select Seat Category</label>

                            <select name="category_id"
                                    id="category"
                                    class="form-control"
                                    onchange="calculatePrice()"
                                    required>

                                <option value="">
                                    Select Category
                                </option>

                                <?php

                                mysqli_data_seek($category_result, 0);

                                while($category = mysqli_fetch_assoc($category_result)){

                                    $ticket_price =
                                    $category['show_price']
                                    +
                                    $category['category_price'];

                                ?>

                                <option

                                value="<?php echo $category['category_id']; ?>"

                                data-price="<?php echo $ticket_price; ?>">

                                <?php echo $category['category_name']; ?>

                                -

                                Rs <?php echo $ticket_price; ?>

                                </option>

                                <?php } ?>

                            </select>

                        </div>


                        <div class="form-group mb-3">

                            <label>Total Seats</label>

                            <input type="number"
                                   name="total_seats"
                                   id="total_seats"
                                   class="form-control"
                                   value="1"
                                   min="1"
                                   onchange="calculatePrice()"
                                   onkeyup="calculatePrice()"
                                   required>

                        </div>


                        <div class="form-group mb-3">

                            <label>Payment Method</label>

                            <select name="payment_method"
                                    class="form-control"
                                    required>

                                <option value="">
                                    Select Payment
                                </option>

                                <option value="JazzCash">
                                    JazzCash
                                </option>

                                <option value="EasyPaisa">
                                    EasyPaisa
                                </option>

                                <option value="Cash">
                                    Cash
                                </option>

                            </select>

                        </div>


                        <div class="form-group mb-3">

                            <label>Concession / Discount</label>

                            <select name="concession_id"
                                    class="form-control">

                                <option value="0">
                                    No Concession
                                </option>

                                <?php while($concession = mysqli_fetch_assoc($concession_result)){ ?>

                                <option value="<?php echo $concession['concession_id']; ?>">

                                    <?php echo $concession['category']; ?>

                                    -

                                    <?php echo $concession['discount_percentage']; ?>% OFF

                                </option>

                                <?php } ?>

                            </select>

                        </div>

                        <!-- TOTAL PRICE -->

                        <div class="price-box">

                            <h4>Total Ticket Price</h4>

                            <div class="total-price">

                                Rs
                                <span id="final_price">
                                    0
                                </span>

                            </div>

                        </div>


                        <button type="submit"
                                class="btn oneMusic-btn mt-4">

                            Confirm Booking

                            <i class="fa fa-angle-double-right"></i>

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<script>

function calculatePrice(){

    let category =
    document.getElementById("category");

    let seats =
    document.getElementById("total_seats").value;

    let ticketPrice = 0;

    if(category.selectedIndex > 0){

        ticketPrice =
        category.options[category.selectedIndex]
        .getAttribute("data-price");
    }

    let finalPrice =
    parseInt(ticketPrice || 0)
    *
    parseInt(seats || 1);

    document.getElementById("final_price")
    .innerHTML = finalPrice;
}

</script>

<?php include('../base/footer.php'); ?>