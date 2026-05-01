```php id="s6u3vm"
<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Manage Screens</h4>

            <a href="add-screen.php" class="btn btn-primary">
                <i class="fa fa-plus me-2"></i>Add Screen
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Theater Name</th>
                        <th>Screen Name</th>
                        <th>Total Seats</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cinepax Mega Mall</td>
                        <td>Screen 1</td>
                        <td>120</td>
                        <td>
                            <a href="edit-screen.php" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this screen?')">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Nueplex Cinema</td>
                        <td>Screen 2</td>
                        <td>150</td>
                        <td>
                            <a href="edit-screen.php" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this screen?')">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Universal Cinema</td>
                        <td>VIP Screen</td>
                        <td>80</td>
                        <td>
                            <a href="edit-screen.php" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this screen?')">
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
```
