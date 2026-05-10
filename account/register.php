<?php
include('../base/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#000;
}

/* CENTER WRAPPER */
.wrapper{
    width:100%;
    min-height:80vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

/* CARD */
.register-box{
    width:380px;
    background:#666666;
    border:2px solid #E50914;
    border-radius:12px;
    box-shadow:0 0 15px rgba(0,0,0,0.1);
}

/* TITLE */
.register-box h2{
    text-align:center;
    margin-bottom:20px;
    color:#ffffff;
}

/* INPUTS */
.input-box{
    margin-bottom:15px;
}

.input-box input{
    width:100%;
    padding:10px;
    border:1px solid #cccccc;
    border-radius:6px;
    outline:none;
}

/* BUTTON */
.btn{
    width:100%;
    padding:10px;
    background:#666666;
    color:#fff;
    border:1px solid #666666;
    cursor:pointer;
    transition:0.3s;
    border-radius:6px;
}

.btn:hover{
    background:#E50914;
    color:#fff;
    transform:translateY(-2px);
}

/* FOOT TEXT */
.footer-text{
    text-align:center;
    margin-top:10px;
    font-size:13px;
}

.footer-text a{
    color:#E50914;
    font-weight:bold;
    text-decoration:none;
}

.footer-text a:hover{
    text-decoration:underline;
}
.register-page .header-area{
    background:#000 !important;
    position:fixed;
    top:0;
    width:100%;
    z-index:9999;
}
.register-page{
    padding-top:80px;
}

</style>
</head>

<body class="register-page">

<div class="wrapper">

    <div class="register-box">

        <h2>🎬 Create Account</h2>

        <form>

            <div class="input-box">
                <input type="text" placeholder="Full Name">
            </div>

            <div class="input-box">
                <input type="email" placeholder="Email Address">
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password">
            </div>

            <div class="input-box">
                <input type="password" placeholder="Confirm Password">
            </div>

            <button class="btn" type="submit">Register</button>

        </form>

        <div class="footer-text">
            Already have an account? <a href="login.php">Login</a>
        </div>

    </div>

</div>



</body>
</html>

<?php
include('../base/footer.php');
?>