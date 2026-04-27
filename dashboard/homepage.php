<?php include('./base/header.php'); ?>

<div class="dh-home-wrapper">

    <div class="dh-welcome-box">
        <h2>Welcome Back, Admin 👋</h2>
        <p>Manage your movie booking platform from one place.</p>
    </div>

    <div class="dh-stats-grid">

        <div class="dh-stat-card">
            <div class="dh-icon-box">🎬</div>
            <div class="dh-stat-info">
                <h3>10</h3>
                <p>Total Movies</p>
            </div>
        </div>

        <div class="dh-stat-card">
            <div class="dh-icon-box">🏢</div>
            <div class="dh-stat-info">
                <h3>3</h3>
                <p>Total Theaters</p>
            </div>
        </div>

        <div class="dh-stat-card">
            <div class="dh-icon-box">🕒</div>
            <div class="dh-stat-info">
                <h3>18</h3>
                <p>Total Shows</p>
            </div>
        </div>

        <div class="dh-stat-card">
            <div class="dh-icon-box">🎟️</div>
            <div class="dh-stat-info">
                <h3>245</h3>
                <p>Bookings</p>
            </div>
        </div>

        <div class="dh-stat-card">
            <div class="dh-icon-box">👥</div>
            <div class="dh-stat-info">
                <h3>92</h3>
                <p>Users</p>
            </div>
        </div>

        <div class="dh-stat-card">
            <div class="dh-icon-box">💰</div>
            <div class="dh-stat-info">
                <h3>$3,250</h3>
                <p>Revenue</p>
            </div>
        </div>

    </div>

    <div class="dh-bottom-grid">

        <div class="dh-panel">
            <h4>Recent Bookings</h4>

            <table class="dh-table">
                <tr>
                    <th>User</th>
                    <th>Movie</th>
                    <th>Seats</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td>Ali Khan</td>
                    <td>Avengers</td>
                    <td>A1, A2</td>
                    <td><span class="dh-status dh-completed">Completed</span></td>
                </tr>

                <tr>
                    <td>Sarah</td>
                    <td>Batman</td>
                    <td>B4</td>
                    <td><span class="dh-status dh-pending">Pending</span></td>
                </tr>

                <tr>
                    <td>Ahmed</td>
                    <td>Deadpool 3</td>
                    <td>C2, C3</td>
                    <td><span class="dh-status dh-completed">Completed</span></td>
                </tr>
            </table>
        </div>

        <div class="dh-panel">
            <h4>Quick Actions</h4>

            <a href="movies/add-movie.php" class="dh-btn">+ Add New Movie</a>
            <a href="theaters/add-theater.php" class="dh-btn">+ Add Theater</a>
            <a href="shows/add-show.php" class="dh-btn">+ Add Show</a>
            <a href="bookings/manage-bookings.php" class="dh-btn">View Bookings</a>
            <a href="users/manage-users.php" class="dh-btn">Manage Users</a>
        </div>

    </div>

</div>

<?php include('./base/footer.php'); ?>