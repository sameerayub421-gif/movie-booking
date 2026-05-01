<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Payments</h4>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Booking ID</th>
                        <th>User</th>
                        <th>Payment Method</th>
                        <th>Transaction ID</th>
                        <th>Amount</th>
                        <th>Payment Date</th>
                        <th>Status</th>
                        <th width="150">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>#BK001</td>
                        <td>Ali Khan</td>
                        <td>Credit Card</td>
                        <td>TXN987654</td>
                        <td>$20</td>
                        <td>29 Apr 2026</td>
                        <td>
                            <span class="badge bg-success">Completed</span>
                        </td>
                        <td>
                            <a href="payment-detail.php" class="btn btn-info btn-sm">
                                View
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>#BK002</td>
                        <td>Ahmed Raza</td>
                        <td>JazzCash</td>
                        <td>TXN654321</td>
                        <td>$10</td>
                        <td>28 Apr 2026</td>
                        <td>
                            <span class="badge bg-warning text-dark">Pending</span>
                        </td>
                        <td>
                            <a href="payment-detail.php" class="btn btn-info btn-sm">
                                View
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>#BK003</td>
                        <td>Sarah</td>
                        <td>Debit Card</td>
                        <td>TXN123789</td>
                        <td>$30</td>
                        <td>27 Apr 2026</td>
                        <td>
                            <span class="badge bg-danger">Failed</span>
                        </td>
                        <td>
                            <a href="payment-detail.php" class="btn btn-info btn-sm">
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