<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Shopping Cart | TEAM-X </title>
    <link rel="stylesheet" href="./assets/styles/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="assets/styles/tittle.css">
</head>
<body>
    <!--Main Navigation-->
    
    <!--php
    // include_once('./database/Connection.php');
    // include_once('./database/Database.php')
    ?-->
    
    <header>
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container-fluid justify-content-center justify-content-md-between">
            <div class="d-flex my-2 my-sm-0">
            <a class="navbar-brand me-2 mb-1 d-flex justify-content-center" href="#">
                <h4 class="my-auto pe-lg-3 fw-bolder"> TEAM-X </h4>
            </a>
    
            <!-- Search form -->
            <form class="d-flex input-group w-auto my-auto">
                <input autocomplete="off" type="search" class="form-control rounded fst-italic" placeholder="Search"
                style="min-width: 125px" />
                <span class="input-group-text border-0 d-none d-md-flex"><i class="fas fa-search"></i></span>
            </form>
            </div>
    
            <ul class="navbar-nav flex-row">
                <li class="nav-item me-3 me-lg-0 px-lg-2">
                    <a class="nav-link" href="home.php">
                        <span class="d-none d-lg-inline-block fst-italic">
                            Home
                        </span>
                        <i class="fas fa-shopping-bag d-inline-block d-lg-none"></i>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-0 px-lg-2">
                <a class="nav-link" href="#contact">
                    <span class="d-none d-lg-inline-block fst-italic">
                        Contact
                    </span>
                    <i class="fas fa-envelope d-inline-block d-lg-none"></i>
                </a>
                </li>
                <li class="nav-item me-3 me-lg-0 px-lg-2">
                <a class="nav-link" href="cart.php">
                    <span class="d-none d-lg-inline-block fst-italic">
                        Cart
                    </span>
                    <i class="fas fa-envelope d-inline-block d-lg-none"></i>
                </a>
                </li>
                </li>
                <li class="nav-item me-3 me-lg-0 ps-lg-2 pe-lg-5">
                <a class="nav-link" href="profile.php">
                    <span class="d-none d-lg-inline-block fst-italic">
                        Profile
                    </span>
                    <i class="fas fa-envelope d-inline-block d-lg-none"></i>
                </a>
                </li>
            <!-- Avatar -->
            <li class="nav-item px-4 py-1 bg-primary text-center">
                <a class="nav-link d-flex align-items-center text-white fw-bolder" href="logout.php" id="navbarDropdownMenuLink" role="button">
                    <h6 class="my-auto pe-2"> LOGOUT </h6>
                </a>
            </li>
            </ul>
        </div>
        </nav>
        <!-- Navbar -->
    </header>

    <div class="h-20 p-5 d-inline-block"></div>

    <section id="checkout">
        <h2 class="tittle">Your Shopping Cart</h2>
        <div class="container d-flex flex-row ">

            <form id="billing" method="POST" class="flex-fill mx-5">
                <div class="form-group mb-2">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" name="fname" id="fname" require placeholder="John">
                </div>
                <div class="form-group mb-2">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" require placeholder="Doe">
                </div>
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="emailCheckout" require placeholder="jhondoe@email.com">
                </div>
                <div class="form-group mb-2">
                    <label for="telephone">Phone Number</label>
                    <input type="tel" class="form-control" id="telephone" require  placeholder="0000 0000 0000">
                </div>
                <div class="form-group mb-2">
                    <label>Billing Address</label>
                    <input type="text" class="form-control mb-1" id="billadd" require placeholder="Address 1">
                </div>
                <div class="form-group mb-2">
                    <label for="lname">City</label>
                    <input type="text" class="form-control" require id="city">
                </div>
                <div class="form-group mb-2">
                    <label for="lname">Postal Code</label>
                    <input type="number" class="form-control" require id="postalcode">
                </div>
                <div class="form-group mb-2">
                    <label for="lname">Country</label>
                    <input type="text" class="form-control" require id="country">
                </div>

                    <button type="submit" name="orderCheckout" class="btn btn-primary w-100 mt-2">Checkout</button>
            </form>

            <div id="order-summary" class="flex-fill">
                <h2 class="mb-2">Order Summary</h2>

                <div id="checkOut"></div>
                
            </div>
        </div>
    </section>


<?php include_once('./modal/footer.php'); ?>
<?php include_once('script.php'); ?>
<script src="assets/js/checkout.js"></script>
</html>
