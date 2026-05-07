<?php
include('../base/header.php');

$movie_id = $_GET['movie_id'];

$select_query = "SELECT 
movies.*,
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

WHERE movies.movie_id = $movie_id";

$result = mysqli_query($connection, $select_query);

$show = mysqli_fetch_array($result);
?>

<section class="breadcumb-area bg-img bg-overlay"
style="background-image: url(<?php echo $base_url; ?>img/bg-img/breadcumb.jpg);">

    <div class="bradcumbContent">
        <p>Movie Ticket Booking</p>
        <h2>Book Now</h2>
    </div>

</section>

<section class="contact-area section-padding-100">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 col-lg-8">

                <div class="contact-content mb-100">

                    <div class="section-heading">
                        <p>Complete Your Booking</p>
                        <h2>Movie Booking Form</h2>
                    </div>

                    <div class="contact-form-area">

                        <form action="insert-booking.php" method="POST">

                            <input type="hidden"
                                   name="show_id"
                                   value="<?php echo $show['show_id']; ?>">

                            <div class="form-group">

                                <label>Movie</label>

                                <input type="text"
                                       class="form-control"
                                       value="<?php echo $show['title']; ?>"
                                       readonly>

                            </div>

                            <div class="form-group">

                                <label>Theater</label>

                                <input type="text"
                                       class="form-control"
                                       value="<?php echo $show['theater_name']; ?>"
                                       readonly>

                            </div>

                            <div class="form-group">

                                <label>Screen</label>

                                <input type="text"
                                       class="form-control"
                                       value="<?php echo $show['screen_name']; ?>"
                                       readonly>

                            </div>

                            <div class="form-group">

                                <label>Show Date</label>

                                <input type="text"
                                       class="form-control"
                                       value="<?php echo $show['show_date']; ?>"
                                       readonly>

                            </div>

                            <div class="form-group">

                                <label>Show Time</label>

                                <input type="text"
                                       class="form-control"
                                       value="<?php echo $show['start_time']; ?> - <?php echo $show['end_time']; ?>"
                                       readonly>

                            </div>

                            <div class="form-group">

                                <label>Select Seat Category</label>

                                <select name="seat_category"
                                        class="form-control"
                                        required>

                                    <option value="">
                                        Select Category
                                    </option>

                                    <option value="Gold">
                                        Gold
                                    </option>

                                    <option value="Platinum">
                                        Platinum
                                    </option>

                                    <option value="Box">
                                        Box
                                    </option>

                                </select>

                            </div>

                            <div class="form-group">

                                <label>Total Seats</label>

                                <input type="number"
                                       name="total_seats"
                                       class="form-control"
                                       min="1"
                                       required>

                            </div>

                            <div class="form-group">

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

                            <div class="form-group">

                                <label>Concession</label>

                                <select name="concession"
                                        class="form-control">

                                    <option value="None">
                                        No Concession
                                    </option>

                                    <option value="Student">
                                        Student
                                    </option>

                                    <option value="Senior Citizen">
                                        Senior Citizen
                                    </option>

                                </select>

                            </div>

                            <button type="submit"
                                    class="btn oneMusic-btn mt-30">

                                Confirm Booking
                                <i class="fa fa-angle-double-right"></i>

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php include('../base/footer.php'); ?>