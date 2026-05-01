<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">User Details</h4>

            <a href="manage-user.php" class="btn btn-secondary">
                Back
            </a>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="bg-dark rounded p-4 text-center h-100">
                    <img src="../img/user.jpg" class="rounded-circle mb-3" width="120" height="120" alt="User">
                    <h5>Ali Khan</h5>
                    <span class="badge bg-success">Active</span>
                </div>
            </div>

            <div class="col-md-8">
                <div class="bg-dark rounded p-4 h-100">
                    <h5 class="text-primary mb-3">Basic Information</h5>

                    <p><strong>User ID:</strong> #USR001</p>
                    <p><strong>Name:</strong> Ali Khan</p>
                    <p><strong>Email:</strong> ali@gmail.com</p>
                    <p><strong>Phone:</strong> 03001234567</p>
                    <p><strong>Role:</strong> User</p>
                    <p><strong>Registered At:</strong> 29 Apr 2026</p>
                </div>
            </div>

            <div class="col-md-12">
                <div class="bg-dark rounded p-4">
                    <h5 class="text-primary mb-3">Booking History</h5>

                    <div class="table-responsive">
                        <table class="table table-bordered text-white">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Movie</th>
                                    <th>Theater</th>
                                    <th>Seats</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Avengers Endgame</td>
                                    <td>Cinepax Mega Mall</td>
                                    <td>A1, A2</td>
                                    <td>$20</td>
                                    <td>29 Apr 2026</td>
                                    <td>
                                        <span class="badge bg-success">Confirmed</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Batman</td>
                                    <td>Nueplex Cinema</td>
                                    <td>B4</td>
                                    <td>$10</td>
                                    <td>25 Apr 2026</td>
                                    <td>
                                        <span class="badge bg-danger">Cancelled</span>
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?php include("../base/footer.php"); ?>