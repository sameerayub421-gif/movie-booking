<?php
include('./base/header.php');

$select_query = "SELECT 

bookings.booking_id,
bookings.booking_date,
bookings.total_amount,
bookings.status,

users.name,

movies.title,

payments.payment_method,
payments.payment_status

FROM bookings

INNER JOIN users
ON bookings.user_id = users.user_id

INNER JOIN shows
ON bookings.show_id = shows.show_id

INNER JOIN movies
ON shows.movie_id = movies.movie_id

LEFT JOIN payments
ON bookings.booking_id = payments.booking_id

ORDER BY bookings.booking_id DESC";

$result = mysqli_query($connection, $select_query);
?>

<div class="container-fluid pt-4 px-4">

<div class="bg-secondary rounded p-4">

<div class="d-flex align-items-center justify-content-between mb-4">

<h4 class="mb-0 text-white">
Manage Bookings
</h4>

</div>

<div class="table-responsive">

<table class="table table-bordered table-hover text-white align-middle">

<thead>

<tr>

<th>ID</th>
<th>User</th>
<th>Movie</th>
<th>Booking Date</th>
<th>Total Amount</th>
<th>Payment</th>
<th>Payment Status</th>
<th>Booking Status</th>

</tr>

</thead>

<tbody>

<?php while($booking = mysqli_fetch_array($result)){ ?>

<tr>

<td>

<?php echo $booking['booking_id']; ?>

</td>

<td>

<?php echo $booking['name']; ?>

</td>

<td>

<?php echo $booking['title']; ?>

</td>

<td>

<?php echo $booking['booking_date']; ?>

</td>

<td>

Rs <?php echo $booking['total_amount']; ?>

</td>

<td>

<?php echo $booking['payment_method']; ?>

</td>

<td>

<?php echo $booking['payment_status']; ?>

</td>

<td>

<?php echo $booking['status']; ?>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

<?php
include('./base/footer.php');
?>