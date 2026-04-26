<?php
include('../base/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#fff;
}
.login-page .header-area{
    background:#000 !important;
    position:fixed;
    top:0;
    width:100%;
    z-index:9999;
}

.login-page{
    padding-top:80px;
}

.wrapper{
    width:100%;
    min-height:80vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-box{
    width:360px;
    background:#f8f9fa;
    padding:30px;
    border-radius:12px;
    box-shadow:0 0 15px rgba(0,0,0,0.1);
}

h2{
    text-align:center;
    margin-bottom:20px;
}

.input-box{
    margin-bottom:10px;
}

.input-box input{
    width:100%;
    padding:10px;
    border:1px solid #ddd;
    border-radius:6px;
    outline:none;
}

.error{
    font-size:12px;
    color:red;
    margin-bottom:10px;
    display:none;
}

.btn{
    width:100%;
    padding:10px;
    background:#fff;
    color:#000;
    border:1px solid #000;
    cursor:pointer;
    transition:0.3s;
    border-radius:6px;
}

.btn:hover{
    background:#111;
    color:#fff;
}

.footer-text{
    text-align:center;
    margin-top:10px;
    font-size:13px;
}

.footer-text a{
    color:#000;
    font-weight:bold;
}

</style>
</head>

<body class="login-page">

<div class="wrapper">

    <div class="login-box">

        <h2>🎬 Login</h2>

        <form onsubmit="return validateLogin()">

            <div class="input-box">
                <input type="text" id="email" placeholder="Email Address">
                <div class="error" id="emailErr">Invalid email</div>
            </div>

            <div class="input-box">
                <input type="password" id="password" placeholder="Password">
                <div class="error" id="passErr">Password must be 6+ characters</div>
            </div>

            <button class="btn" type="submit">Login</button>

        </form>

        <div class="footer-text">
            Don’t have an account? <a href="register.php">Register</a>
        </div>

    </div>

</div>

<script>

function validateLogin(){

    let email = document.getElementById("email").value.trim();
    let pass = document.getElementById("password").value.trim();

    let emailErr = document.getElementById("emailErr");
    let passErr = document.getElementById("passErr");

    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    let valid = true;

    // reset errors
    emailErr.style.display = "none";
    passErr.style.display = "none";

    // email check
    if(email === "" || !email.match(emailPattern)){
        emailErr.style.display = "block";
        valid = false;
    }

    // password check
    if(pass === "" || pass.length < 6){
        passErr.style.display = "block";
        valid = false;
    }

    if(valid){
        alert("Login Successful 🎉");
        return true;
    }else{
        return false;
    }
}

</script>

</body>
</html>

<?php
include('../base/footer.php');
?>