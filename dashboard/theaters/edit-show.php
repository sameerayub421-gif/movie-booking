<?php include("../base/header.php"); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <h4 class="mb-4 text-white">Edit Show</h4>

        <form action="" method="POST">
            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label text-white">Select Movie</label>
                    <select class="form-select bg-dark text-white">
                        <option>Select Movie</option>
                        <option>Avengers Endgame</option>
                        <option>Batman</option>
                        <option>Spider-Man</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Select Theater</label>
                    <select class="form-select bg-dark text-white">
                        <option>Select Theater</option>
                        <option>Cinepax Mega Mall</option>
                        <option>Nueplex Cinema</option>
                        <option>Universal Cinema</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Select Screen</label>
                    <select class="form-select bg-dark text-white">
                        <option>Select Screen</option>
                        <option>Screen 1</option>
                        <option>Screen 2</option>
                        <option>VIP Screen</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Show Date</label>
                    <input type="date" class="form-control bg-dark text-white">
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">Start Time</label>
                    <input type="time" class="form-control bg-dark text-white">
                </div>

                <div class="col-md-6">
                    <label class="form-label text-white">End Time</label>
                    <input type="time" class="form-control bg-dark text-white">
                </div>

                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">
                        Update Show
                    </button>

                    <a href="shows.php" class="btn btn-secondary">
                        Cancel
                    </a>
                </div>

            </div>
        </form>
    </div>
</div>

<?php include("../base/footer.php"); ?>