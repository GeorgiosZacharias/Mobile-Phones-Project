<html lang="en">

<head>

    <title>Registration Page</title>
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
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <?php include("navigation.php"); ?>
    </nav>
    <div class="container register-form">
        <div class="form">
            <div class="note">
                <p>Registering to our dumbsterfuck of a website :)</p>
            </div>

            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <form action="process.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" name="first_name"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" name="last_name"
                                    required="required" />
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" id="email-input" class="form-control" placeholder="E-mail *" name="email"
                                required="required" />
                        </div>
                        <div class="form-group">
                            <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password *"
                                class="form-control" type="password" name="password" id="password-input"
                                onkeydown="verifyPassword()">
                            <span id="message-password" style="color:red" required="required"> </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input placeholder="Password Confirmation *" class="form-control" type="password"
                                name="pass-text" id="password-Conf" name="password"
                                onkeydown="ValidatePasswordConfirm()">
                            <span id="message-password" style="color:red" required="required"> </span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address *" name="address"
                                required="required" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City *" name="city"
                                required="required" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Postal Code *" name="postalcode"
                                required="required" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Mobile phone *" name="phonenumber"
                                required="required" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <br>
                            <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a
                                    href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-sm" value="Register Now" />
                </form>
                <div id="formFooter">
                    <div class="text-center">Already have an account? <a href="sing-in.html">Sign in</a></div>
                </div>
            </div>
        </div>
    </div>
    <header class="page-header header2 container-fluid">

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
                                <a href="#ContactUs.html" class="text-white">Contact us</a>
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