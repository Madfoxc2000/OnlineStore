<?php require_once "app/config/config.php";
require_once "app/classes/User.php";
$user = new User();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
                <div class="container">
                    <a class="navbar-brand" href="#">Shop</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target = "#nav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <?php if(!$user->isLoged()) : ?>
                            <li class="nav-item"> 
                                <a class="nav-link" href="register.php">Register</a>
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                            <?php else : ?>
                            <li class="nav-item"> 
                                <a class="nav-link" href="cart.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                                </a>
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" href="orders.php">My Orders</a>
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                            <?php endif?>
                        </ul>
                        </div>
                </div>
        </nav>



    <?php if(isset($_SESSION['message'])) : ?>
        
        <div class="alert alert-<?php echo $_SESSION['message']['type'];?> alert-dismissible fade show" role="alert">
        <?php
        echo $_SESSION['message']['text'];
        unset($_SESSION['message']);
        ?>
        </div>
    <?php endif; ?>


        