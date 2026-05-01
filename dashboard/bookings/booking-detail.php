<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Booking Details</h4>

            <a href="all-booking.php" class="btn btn-secondary">
                Back
            </a>
        </div>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="bg-dark rounded p-4 h-100">
                    <h5 class="text-primary mb-3">Customer Information</h5>

                    <p><strong>Name:</strong> Ali Khan</p>
                    <p><strong>Email:</strong> ali@gmail.com</p>
                    <p><strong>Phone:</strong> 03001234567</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="bg-dark rounded p-4 h-100">
                    <h5 class="text-primary mb-3">Movie Information</h5>

                    <p><strong>Movie:</strong> Avengers Endgame</p>
                    <p><strong>Theater:</strong> Cinepax Mega Mall</p>
                    <p><strong>Screen:</strong> Screen 1</p>
                    <p><strong>Show Date:</strong> 30 Apr 2026</p>
                    <p><strong>Time:</strong> 06:00 PM - 09:00 PM</p>
                </div>
            </div>

            <div class="col-md-12">
                <div class="bg-dark rounded p-4">
                    <h5 class="text-primary mb-3">Booking Summary</h5>

                    <div class="table-responsive">
                        <table class="table table-bordered text-white">
                            <thead>
                                <tr>
                                    <th>Seat Number</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>A1</td>
                                    <td>Gold</td>
                                    <td>$10</td>
                                </tr>

                                <tr>
                                    <td>A2</td>
                                    <td>Gold</td>
                                    <td>$10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3 text-end">
                        <h5 class="text-success">Total Amount: $20</h5>
                        <span class="badge bg-success">Confirmed</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?php include("../base/footer.php"); ?>