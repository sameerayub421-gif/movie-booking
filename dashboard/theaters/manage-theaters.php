<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Manage Theaters</h4>

            <a href="add-theater.php" class="btn btn-primary">
                <i class="fa fa-plus me-2"></i>Add Theater
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Theater Name</th>
                        <th>Location</th>
                        <th>Total Screens</th>
                        <th>Created At</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cinepax Mega Mall</td>
                        <td>Karachi</td>
                        <td>5</td>
                        <td>29 Apr 2026</td>
                        <td>
                            <a href="edit-theater.php" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this theater?')">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Nueplex Cinema</td>
                        <td>Karachi</td>
                        <td>8</td>
                        <td>28 Apr 2026</td>
                        <td>
                            <a href="edit-theater.php" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this theater?')">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Universal Cinema</td>
                        <td>Lahore</td>
                        <td>6</td>
                        <td>27 Apr 2026</td>
                        <td>
                            <a href="edit-theater.php" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this theater?')">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>
</div>

<?php include("../base/footer.php"); ?>