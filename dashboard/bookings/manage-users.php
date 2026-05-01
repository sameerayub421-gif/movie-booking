<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Manage Users</h4>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Registered At</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ali Khan</td>
                        <td>ali@gmail.com</td>
                        <td>03001234567</td>
                        <td>
                            <span class="badge bg-info">User</span>
                        </td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td>29 Apr 2026</td>
                        <td>
                            <a href="user-detail.php" class="btn btn-info btn-sm">
                                View
                            </a>

                            <button class="btn btn-warning btn-sm">
                                Block
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Ahmed Raza</td>
                        <td>ahmed@gmail.com</td>
                        <td>03111234567</td>
                        <td>
                            <span class="badge bg-info">User</span>
                        </td>
                        <td>
                            <span class="badge bg-danger">Inactive</span>
                        </td>
                        <td>28 Apr 2026</td>
                        <td>
                            <a href="user-detail.php" class="btn btn-info btn-sm">
                                View
                            </a>

                            <button class="btn btn-success btn-sm">
                                Unblock
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Sarah</td>
                        <td>sarah@gmail.com</td>
                        <td>03221234567</td>
                        <td>
                            <span class="badge bg-warning text-dark">Admin</span>
                        </td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td>27 Apr 2026</td>
                        <td>
                            <a href="user-detail.php" class="btn btn-info btn-sm">
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