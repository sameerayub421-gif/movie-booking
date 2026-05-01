<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Movie Booking Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="/movie-booking-master/dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="/movie-booking-master/dashboard/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid position-relative d-flex p-0">

    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <a href="/movie-booking-master/dashboard/index.php" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-film me-2"></i>Movie Admin</h3>
            </a>

            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="img/user.jpg" style="width:40px;height:40px;">
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">Admin</h6>
                    <span>Administrator</span>
                </div>
            </div>

            <div class="navbar-nav w-100">
                <a href="/movie-booking-master/dashboard/index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-film me-2"></i>Movies</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="/movie-booking-master/dashboard/movies/manage-movies.php" class="dropdown-item">Manage Movies</a>
                        <a href="/movie-booking-master/dashboard/movies/reviews.php" class="dropdown-item">Movie Reviews</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-building me-2"></i>Theaters</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="/movie-booking-master/dashboard/theaters/manage-theaters.php" class="dropdown-item">Manage Theaters</a>
                        <a href="/movie-booking-master/dashboard/theaters/manage-screens.php" class="dropdown-item">Manage Screens</a>
                        <a href="/movie-booking-master/dashboard/theaters/manage-shows.php" class="dropdown-item">Manage Shows</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-ticket-alt me-2"></i>Bookings</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="/movie-booking-master/dashboard/bookings/all-booking.php" class="dropdown-item">All Bookings</a>
                        <a href="/movie-booking-master/dashboard/bookings/payments.php" class="dropdown-item">Payments</a>
                        <a href="/movie-booking-master/dashboard/bookings/manage-users.php" class="dropdown-item">Manage Users</a>
                    </div>
                </div>

                <a href="logout.php" class="nav-item nav-link"><i class="fa fa-sign-out-alt me-2"></i>Logout</a>
            </div>
        </nav>
    </div>

    <div class="content">
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control bg-dark border-0" type="search" placeholder="Search movies, users, bookings...">
            </form>
        </nav>

        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-users fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Users</p>
                            <h6 class="mb-0">150</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-film fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Movies</p>
                            <h6 class="mb-0">35</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-ticket-alt fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Bookings</p>
                            <h6 class="mb-0">420</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-money-bill fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Revenue</p>
                            <h6 class="mb-0">$5200</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <h4 class="mb-4">Recent Activity</h4>
                <table class="table text-start align-middle table-bordered table-hover mb-0 text-white">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Movie</th>
                            <th>Seats</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ali</td>
                            <td>Avengers</td>
                            <td>A1, A2</td>
                            <td>$20</td>
                            <td>Confirmed</td>
                        </tr>
                        <tr>
                            <td>Ahmed</td>
                            <td>Batman</td>
                            <td>B4</td>
                            <td>$10</td>
                            <td>Confirmed</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="/movie-booking-master/dashboard/js/bootstrap.bundle.min.js"></script>
</body>
</html>
