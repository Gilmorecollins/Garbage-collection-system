<?php
include('includes/header.php');
?>
</head>
<body id="home">  
   <header class="head">
     <div class="navbar top" id="navbar">
       <a href="/final/index.php"><h1 class="logo">
        <i class="fas fa-seedling"></i>
          <span class="text-primary"> HOME</span>
       </h1>
       </a>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<div class="container col-lg-5">
    <div class="title">Administrator Login</div>
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
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>