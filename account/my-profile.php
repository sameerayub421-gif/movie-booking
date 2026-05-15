<?php

include('../base/header.php');


$user_id = $_SESSION['user_id'];


$user_query = "SELECT * FROM users
               WHERE user_id = '$user_id'";

$user_result = mysqli_query($connection, $user_query);

$user = mysqli_fetch_assoc($user_result);

?>

<style>

body{
    background:#000;
    color:#fff;
    font-family:Arial;
}

.profile-container{
    width:90%;
    margin:auto;
    padding:50px 0;
}

.profile-box{
    background:#111;
    border:2px solid #E50914;
    border-radius:10px;
    padding:40px;
}

.profile-title{
    text-align:center;
    margin-bottom:40px;
}

.profile-title h1{
    color:#E50914;
}

.profile-card{
    background:#1c1c1c;
    padding:25px;
    border-radius:10px;
}

.profile-row{
    margin-bottom:20px;
}

.profile-label{
    color:#E50914;
    font-weight:bold;
    margin-bottom:5px;
}

.profile-value{
    background:#222;
    padding:12px;
    border-radius:5px;
    color:#fff;
}

.edit-btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 25px;
    background:#E50914;
    color:#fff;
    text-decoration:none;
    border-radius:5px;
    transition:0.3s;
}

.edit-btn:hover{
    background:#b20710;
    color:#fff;
}

</style>

<div class="profile-container">

    <div class="profile-box">

        <div class="profile-title">

            <h1>
                My Profile
            </h1>

            <p>
                User Account Information
            </p>

        </div>

        <div class="profile-card">

            <!-- NAME -->

            <div class="profile-row">

                <div class="profile-label">
                    Full Name
                </div>

                <div class="profile-value">

                    <?php echo $user['name']; ?>

                </div>

            </div>

            <!-- EMAIL -->

            <div class="profile-row">

                <div class="profile-label">
                    Email Address
                </div>

                <div class="profile-value">

                    <?php echo $user['email']; ?>

                </div>

            </div>

            <!-- PHONE -->

            <div class="profile-row">

                <div class="profile-label">
                    Phone Number
                </div>

                <div class="profile-value">

                    <?php echo $user['phone']; ?>

                </div>

            </div>

            <!-- ROLE -->

            <div class="profile-row">

                <div class="profile-label">
                    User Role
                </div>

                <div class="profile-value">

                    <?php echo $user['role']; ?>

                </div>

            </div>

            <!-- STATUS -->

            <div class="profile-row">

                <div class="profile-label">
                    Account Status
                </div>

                <div class="profile-value">

                    <?php echo $user['status']; ?>

                </div>

            </div>

            <!-- CREATED -->

            <div class="profile-row">

                <div class="profile-label">
                    Account Created
                </div>

                <div class="profile-value">

                    <?php echo $user['created_at']; ?>

                </div>

            </div>

            <a href="edit-profile.php"
               class="edit-btn">

               Edit Profile

            </a>

        </div>

    </div>

</div>

<?php
include('../base/footer.php');
?>