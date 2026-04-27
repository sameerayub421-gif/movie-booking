<?php
include("//config/db_connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Movie Booking Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative d-flex p-0">

    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <a href="index.php" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary">
                    <i class="fa fa-film me-2"></i>Movie Admin
                </h3>
            </a>

            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">Admin</h6>
                    <span>Administrator</span>
                </div>
            </div>

            <div class="navbar-nav w-100">

                <a href="index.php" class="nav-item nav-link active">
                    <i class="fa fa-tachometer-alt me-2"></i>Dashboard
                </a>

                <a href="homepage.php" class="nav-item nav-link">
                    <i class="fa fa-home me-2"></i>Homepage
                </a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-film me-2"></i>Movies
                    </a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="add-movie.php" class="dropdown-item">Add Movie</a>
                        <a href="manage-movies.php" class="dropdown-item">Manage Movies</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-building me-2"></i>Theaters
                    </a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="add-theater.php" class="dropdown-item">Add Theater</a>
                        <a href="manage-theaters.php" class="dropdown-item">Manage Theaters</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-clock me-2"></i>Shows
                    </a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="add-show.php" class="dropdown-item">Add Show</a>
                        <a href="manage-shows.php" class="dropdown-item">Manage Shows</a>
                    </div>
                </div>

                <a href="seat-pricing.php" class="nav-item nav-link">
                    <i class="fa fa-tags me-2"></i>Seat Pricing
                </a>

                <a href="bookings.php" class="nav-item nav-link">
                    <i class="fa fa-ticket-alt me-2"></i>Bookings
                </a>

                <a href="users.php" class="nav-item nav-link">
                    <i class="fa fa-users me-2"></i>Users
                </a>

                <a href="reviews.php" class="nav-item nav-link">
                    <i class="fa fa-star me-2"></i>Reviews
                </a>

                <a href="contact-messages.php" class="nav-item nav-link">
                    <i class="fa fa-envelope me-2"></i>Contact Messages
                </a>

                <a href="settings.php" class="nav-item nav-link">
                    <i class="fa fa-cog me-2"></i>Settings
                </a>

                <a href="logout.php" class="nav-item nav-link text-danger">
                    <i class="fa fa-sign-out-alt me-2"></i>Logout
                </a>

            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>

            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">Admin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="profile.php" class="dropdown-item">My Profile</a>
                        <a href="settings.php" class="dropdown-item">Settings</a>
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
        </nav>


        <!-- Dashboard Cards -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">

                <div class="col-sm-6 col-xl-4">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-film fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Movies</p>
                            <h6 class="mb-0">0</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-building fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Theaters</p>
                            <h6 class="mb-0">0</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-clock fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Shows</p>
                            <h6 class="mb-0">0</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-ticket-alt fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Bookings</p>
                            <h6 class="mb-0">0</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-users fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Users</p>
                            <h6 class="mb-0">0</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-money-bill fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Revenue</p>
                            <h6 class="mb-0">$0</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Content End -->

</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>