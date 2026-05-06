<?php
include('./base/header.php');

$select_query = "SELECT booking_details.*, bookings.booking_id, seats.seat_number
                 FROM booking_details
                 INNER JOIN bookings ON booking_details.booking_id = bookings.booking_id
                 INNER JOIN seats ON booking_details.seat_id = seats.seat_id";

$result = mysqli_query($connection, $select_query);
$count = 1;
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <h4 class="text-white mb-4">Booking Details</h4>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Booking ID</th>
                        <th>Seat Number</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($detail = mysqli_fetch_array($result)){ ?>

                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $detail['booking_id']; ?></td>
                        <td><?php echo $detail['seat_number']; ?></td>
                        <td><?php echo $detail['price']; ?></td>
                    </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>
</div>

<?php include('./base/footer.php'); ?>