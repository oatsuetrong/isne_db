<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Order Status</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="home.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="home.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="product-add.php">Add Product</a></li>
                    <li><a href="product-table.php">Product</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li class="active"><a href="order.php">Order</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="customer.php" class="btn amado-btn mb-15">Customer List</a>
                <a href="employee.php" class="btn amado-btn mb-15 emp">Employee List</a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart.html" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
                <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between sc-emp">
                <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Employee Name</a>
            </div>
        </header>
        <!-- Header Area End -->

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">
                <div class="cart-title mt-50">
                    <h2>Order Status: Bott Larry</h2>
                    <br>
                </div>
                <div class="row">
                    <div class="col-12">
                    <table class="table">
                        <thead >
                        <tr class="table-info">
                            <th scope="col">Order No.</th>
                            <th scope="col">Order D.</th>
                            <th scope="col">Required D.</th>
                            <th scope="col">Shipped D.</th>
                            <th scope="col">Status</th>
                            <th scope="col">Customer No.</th>
                            <th scope="col" style="width: 15%;">Comment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">10408</th>
                                <td>2005-04-22</td>
                                <td>2005-04-29</td>
                                <td>2005-04-27</td>
                                <td>
                                    <!-- <select class="form-control">
                                        <option selected>Shipped</option>
                                        <option value="1">Cancelled</option>
                                        <option value="2">Disputed</option>
                                        <option value="3">In process</option>
                                        <option value="4">On hold</option>
                                        <option value="5">Resolved</option>
                                        <option value="6">Shipped</option>
                                    </select> -->
                                    <div class="dropdown">
                                        <button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Shipped
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <button class="dropdown-item" type="button">Cancelled</button>
                                            <button class="dropdown-item" type="button">Disputed</button>
                                            <button class="dropdown-item" type="button">In process</button>
                                            <button class="dropdown-item" type="button">On hold</button>
                                            <button class="dropdown-item" type="button">Resolved</button>
                                            <button class="dropdown-item" type="button">Shipped</button>
                                        </div>
                                    </div>
                                </td>
                                <td>398</td>
                                <td></td>
                                </tr>
                            <tr>
                                <th scope="row">10421</th>
                                <td>2005-05-29</td>
                                <td>2005-06-06</td>
                                <td></td>
                                <td>
                                    <select class="form-control">
                                        <option selected>In process</option>
                                        <option value="1">Cancelled</option>
                                        <option value="2">Disputed</option>
                                        <option value="3">In process</option>
                                        <option value="4">On hold</option>
                                        <option value="5">Resolved</option>
                                        <option value="6">Shipped</option>
                                    </select>
                                </td>
                                <td>124</td>
                                <td>Custom shipping instructions were sent to warehouse</td>
                            </tr>
                        </tbody>
                        </table>
                        
                    </div>
                </div>


            </div>
        </div>
        </div>
    <!-- ##### Main Content Wrapper End ##### -->



    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="home.php"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite">
                            Database 1/62 Term Project | Faculty of Engineering, Chiangmai University
                        </p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="home.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product-add.php">Add Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product-table.php">Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.php">Cart</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="order.php">Order</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>