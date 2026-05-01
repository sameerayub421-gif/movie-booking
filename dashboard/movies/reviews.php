<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-white mb-0">Movie Reviews</h4>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-white align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Movie</th>
                        <th>Rating</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th width="120">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ali Khan</td>
                        <td>Avengers Endgame</td>
                        <td>
                            <span class="badge bg-warning text-dark">5 / 5</span>
                        </td>
                        <td>Amazing movie with great action scenes.</td>
                        <td>29 Apr 2026</td>
                        <td>
                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Ahmed Raza</td>
                        <td>Batman</td>
                        <td>
                            <span class="badge bg-warning text-dark">4 / 5</span>
                        </td>
                        <td>Dark and thrilling story, loved it.</td>
                        <td>28 Apr 2026</td>
                        <td>
                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Sarah</td>
                        <td>Spider-Man</td>
                        <td>
                            <span class="badge bg-warning text-dark">5 / 5</span>
                        </td>
                        <td>Best Marvel movie this year.</td>
                        <td>27 Apr 2026</td>
                        <td>
                            <button class="btn btn-danger btn-sm">
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