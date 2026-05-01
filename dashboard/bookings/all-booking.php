<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">All Bookings</h4>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>Movie</th>
                        <th>Theater</th>
                        <th>Screen</th>
                        <th>Seats</th>
                        <th>Total Amount</th>
                        <th>Booking Date</th>
                        <th>Status</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ali Khan</td>
                        <td>Avengers Endgame</td>
                        <td>Cinepax Mega Mall</td>
                        <td>Screen 1</td>
                        <td>A1, A2</td>
                        <td>$20</td>
                        <td>29 Apr 2026</td>
                        <td>
                            <span class="badge bg-success">Confirmed</span>
                        </td>
                        <td>
                            <a href="booking-detail.php" class="btn btn-info btn-sm">
                                View
                            </a>

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Cancel this booking?')">
                                Cancel
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Ahmed Raza</td>
                        <td>Batman</td>
                        <td>Nueplex Cinema</td>
                        <td>Screen 2</td>
                        <td>B4</td>
                        <td>$10</td>
                        <td>28 Apr 2026</td>
                        <td>
                            <span class="badge bg-success">Confirmed</span>
                        </td>
                        <td>
                            <a href="booking-detail.php" class="btn btn-info btn-sm">
                                View
                            </a>

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Cancel this booking?')">
                                Cancel
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Sarah</td>
                        <td>Spider-Man</td>
                        <td>Universal Cinema</td>
                        <td>VIP Screen</td>
                        <td>C3, C4</td>
                        <td>$30</td>
                        <td>27 Apr 2026</td>
                        <td>
                            <span class="badge bg-danger">Cancelled</span>
                        </td>
                        <td>
                            <a href="booking-detail.php" class="btn btn-info btn-sm">
                                View
                            </a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>
</div>

<?php include("../base/footer.php"); ?>