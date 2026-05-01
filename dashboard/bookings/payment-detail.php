<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Payment Details</h4>

            <a href="payment.php" class="btn btn-secondary">
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
                    <h5 class="text-primary mb-3">Payment Information</h5>

                    <p><strong>Booking ID:</strong> #BK001</p>
                    <p><strong>Payment Method:</strong> Credit Card</p>
                    <p><strong>Transaction ID:</strong> TXN987654</p>
                    <p><strong>Payment Date:</strong> 29 Apr 2026</p>
                    <p><strong>Status:</strong> <span class="badge bg-success">Completed</span></p>
                </div>
            </div>

            <div class="col-md-12">
                <div class="bg-dark rounded p-4">
                    <h5 class="text-primary mb-3">Booking Summary</h5>

                    <p><strong>Movie:</strong> Avengers Endgame</p>
                    <p><strong>Theater:</strong> Cinepax Mega Mall</p>
                    <p><strong>Screen:</strong> Screen 1</p>
                    <p><strong>Seats:</strong> A1, A2</p>

                    <hr class="bg-light">

                    <div class="d-flex justify-content-between">
                        <h5>Total Amount</h5>
                        <h5 class="text-success">$20</h5>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?php include("../base/footer.php"); ?>