<?php
include('../base/header.php');

$select_query = "SELECT * FROM payments";

$result = mysqli_query($connection, $select_query);

$count = 1;
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <h4 class="text-white mb-4">Payment Details</h4>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Payment ID</th>
                        <th>Booking ID</th>
                        <th>Payment Method</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Transaction ID</th>
                        <th>Payment Date</th>
                    </tr>
                </thead>

                <tbody>

                    <?php while($payment = mysqli_fetch_array($result)){ ?>

                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $payment['payment_id']; ?></td>
                        <td><?php echo $payment['booking_id']; ?></td>
                        <td><?php echo $payment['payment_method']; ?></td>
                        <td><?php echo $payment['amount']; ?></td>
                        <td><?php echo $payment['payment_status']; ?></td>
                        <td><?php echo $payment['transaction_id']; ?></td>
                        <td><?php echo $payment['payment_date']; ?></td>
                    </tr>

                    <?php } ?>

                </tbody>

            </table>
        </div>

    </div>
</div>

<?php include('./base/footer.php'); ?>