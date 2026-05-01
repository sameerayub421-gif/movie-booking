<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Manage Shows</h4>

            <a href="add-show.php" class="btn btn-primary">
                <i class="fa fa-plus me-2"></i>Add Show
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Movie</th>
                        <th>Theater</th>
                        <th>Screen</th>
                        <th>Show Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Avengers Endgame</td>
                        <td>Cinepax Mega Mall</td>
                        <td>Screen 1</td>
                        <td>30 Apr 2026</td>
                        <td>06:00 PM</td>
                        <td>09:00 PM</td>
                        <td>
                            <a href="edit-show.php" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this show?')">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Batman</td>
                        <td>Nueplex Cinema</td>
                        <td>Screen 2</td>
                        <td>30 Apr 2026</td>
                        <td>03:00 PM</td>
                        <td>05:30 PM</td>
                        <td>
                            <a href="edit-show.php" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this show?')">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Spider-Man</td>
                        <td>Universal Cinema</td>
                        <td>VIP Screen</td>
                        <td>01 May 2026</td>
                        <td>08:00 PM</td>
                        <td>10:30 PM</td>
                        <td>
                            <a href="edit-show.php" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this show?')">
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