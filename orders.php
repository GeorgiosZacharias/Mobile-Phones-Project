<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Bootstrap Tutorial Sample Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="index.php">Logo</a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php include("navigation.php"); ?>
    </nav>
	
	
    
	  
	 
   
        <?php
          echo '<div class="container">';
          echo '<div class="table-responsive custom-table-responsive">';
          echo  ' <table class="table custom-table">';
          echo   '  <thead>';
          echo    '   <tr>     '  ;     
          echo         '<th scope="col">Order Id</th>';
          echo       ' <th scope="col">Product Id</th>';
          echo        ' <th scope="col">User Id</th>';
          echo        '<th scope="col">Date</th>';
          echo     ' </tr>';
          echo   ' </thead>';
         include('loginCon.php');
         $sql = "SELECT * FROM eshop.orders;";
         $result = mysqli_query($con,$sql);
		 $resultCheck = mysqli_num_rows($result);
         if ($resultCheck > 0){
         while ($row = mysqli_fetch_assoc($result)){
         
           echo    '<tbody>';
           echo      '<tr scope="row">';
           echo        '<td>';
           echo          $row['orderId'];
           echo        '</td>';
           echo         '<td>';
           echo           $row['productId'];
           echo          '</td>';
           echo         '<td>';
           echo           $row['userId'];
           echo         '</td>';
           echo         '<td>';
           echo          $row['date'];
           echo         '</td>';  
           echo       '</tr> ';
           echo     '</tbody>';
          
		 }
         } 
         echo   '</table>';
         echo '</div>';
         echo  '</div>';?>
		 
     

    </header>
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example21" class="form-control" />
                                <label class="form-label" for="form5Example21">Email address</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light mb-4">
                                Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    If you want to be notified about our new arrivals, you can always sign up to our newsletter so you
                    will never miss a chance.
                    For further inquires please try to reach us through our social media.
                </p>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">About</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">About</a>
                            </li>
                            <li>
                                <a href="#ContactUs.php" class="text-white">Contact us</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">FAQ</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Advertise</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">E-mails</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">NeverGonnaGiveYouUp@gmail.com</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">NeverGonnaLetYouDown@gmai.com</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">NeverGonnaRunAroundAndDesertYou@gmail.com</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">NeverGonnaMakeYouCry@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">NewCompany.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>