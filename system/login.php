<?php
include('./includes/header.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container col-lg-5">
    <div class="title">Client Login</div>
    <div class="content">
        <form action="php_actions/user_login_action.php" method="post"  >
            <div class="">
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" class="form-control" placeholder="Enter your Email" name="email">
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" class="form-control" placeholder="Enter your password" name="pass">
                </div>    
            </div>
            <div class="">
                <button type="submit" class="button" name="action">Login</button>
            </div>
            <div class="">
            <p>Dont have an account..? Register<a href="registration.php"> Here</a></p>
            <p>Back<a href="/final/index.php"> HOME</a></p>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>