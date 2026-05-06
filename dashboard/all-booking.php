<?php
include('./base/header.php');

$select_query = "SELECT bookings.*, users.name, movies.title
                 FROM bookings
                 INNER JOIN users ON bookings.user_id = users.user_id
                 INNER JOIN shows ON bookings.show_id = shows.show_id
                 INNER JOIN movies ON shows.movie_id = movies.movie_id";

$result = mysqli_query($connection, $select_query);

$count = 1;
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <h4 class="text-white mb-4">All Bookings</h4>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>Movie</th>
                        <th>Booking Date</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while($booking = mysqli_fetch_array($result)){ ?>

                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $booking['name']; ?></td>
                        <td><?php echo $booking['title']; ?></td>
                        <td><?php echo $booking['booking_date']; ?></td>
                        <td><?php echo $booking['total_amount']; ?></td>
                        <td><?php echo ucfirst($booking['status']); ?></td>
                    </tr>

                    <?php } ?>

                </tbody>

            </table>
        </div>

    </div>
</div>

<?php include('./base/footer.php'); ?>