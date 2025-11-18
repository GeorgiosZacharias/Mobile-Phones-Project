<?php 
include("check.php");   
?>
<?php 
if ($loginst == 0){ ?>
<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="main-navigation">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Αρχική Σελίδα</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Phones.php">Mobile Phones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="LogInPage.php">Log In</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Register.php">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ContactUs.php">Contact Us</a>
        </li>
    </ul>
</div>
<?php } else if($loginst == 1){ ?>
<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="main-navigation">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="IndexLogged.php">Αρχική Σελίδα</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="MyOrders.php">My orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Phones.php">Mobile Phones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ContactUs.php">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logOut.php">Log Out </a>
        </li>
    </ul>
</div>
<?php } else { ?>
<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="main-navigation">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="IndexLogged.php">Αρχική Σελίδα</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Phones.php">Λίστα Κινητών</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="ContactUs.php">Contact Us</a>
        </li>
     
        <li class="nav-item">
            <a class="nav-link" href="Clients.php">Clients</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Orders.php">Orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logOut.php">Log Out </a>
        </li>
    </ul>
</div>
<?php } ?>