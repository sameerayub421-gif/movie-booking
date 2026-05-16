<?php

session_start();

include('./config/db_connection.php');

if(isset($_POST['signin'])){

    $email    = $_POST['email'];
    $password = $_POST['password'];

    $select_query = "SELECT * FROM users 
                     WHERE email='$email' 
                     AND password='$password'";

    $result = mysqli_query($connection, $select_query);

    if(mysqli_num_rows($result) > 0){

        $fetch = mysqli_fetch_array($result);

        /* SESSION */

        $_SESSION['user_id'] = $fetch['user_id'];
        $_SESSION['email']   = $fetch['email'];
        $_SESSION['role']    = $fetch['role'];

        /* ADMIN LOGIN */

        if($_SESSION['role'] == 'admin'){

            echo "<script>
                alert('Logged in as Admin');
                window.location='index.php';
            </script>";

        }

        /* USER LOGIN */

        else{

            echo "<script>
                alert('Logged in as User');
                window.location='../index.php';
            </script>";

        }

    }else{

        echo "<script>
            alert('Invalid Email or Password');
        </script>";

    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Movie Admin Login</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<div class="container-fluid position-relative d-flex p-0">

    <div class="container-fluid">

        <div class="row h-100 align-items-center justify-content-center"
             style="min-height: 100vh;">

            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">

                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">

                    <div class="d-flex align-items-center justify-content-between mb-3">

                        <h3 class="text-primary">

                            <i class="fa fa-user-edit me-2"></i>

                            Cinema Admin

                        </h3>

                        <h3>
                            Sign In
                        </h3>

                    </div>

                    <form method="POST">

                        <div class="form-floating mb-3">

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Email"
                                   required>

                            <label>
                                Email Address
                            </label>

                        </div>

                        <div class="form-floating mb-4">

                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Password"
                                   required>

                            <label>
                                Password
                            </label>

                        </div>

                        <button type="submit"
                                name="signin"
                                class="btn btn-primary py-3 w-100 mb-4">

                            Sign In

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- JS -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/main.js"></script>

</body>

</html>