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
            <a class="nav-link" href="/Project/index.php">Αρχική Σελίδα</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Project/pages/Phones.php">Mobile Phones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Project/LogInPage.php">Log In</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Project/Register.php">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Project/pages/ContactUs.php">Contact Us</a>
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
            <a class="nav-link" href="/Project/pages/IndexLogged.php">Αρχική Σελίδα</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Project/pages/MyOrders.php">My orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Project/pages/Phones.php">Mobile Phones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Project/pages/ContactUs.php">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Project/logOut.php">Log Out </a>
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
            <a class="nav-link" href="/Project/pages/IndexLogged.php">Αρχική Σελίδα</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Project/pages/Phones.php">Λίστα Κινητών</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="/Project/pages/ContactUs.php">Contact Us</a>
        </li>
     
        <li class="nav-item">
            <a class="nav-link" href="/Project/Clients.php">Clients</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Project/Orders.php">Orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Project/logOut.php">Log Out </a>
        </li>
    </ul>
</div>
<?php } ?>