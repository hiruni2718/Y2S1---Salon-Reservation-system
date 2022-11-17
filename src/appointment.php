<?php
include 'db.php';

try {
    if (isset($_POST['submit'])) {
        $name = test_input($_POST['name']);
        $phone = test_input($_POST['phone']);
        $date = test_input($_POST['date']);
        $time = test_input($_POST['time']);
        $email = test_input($_POST['email']);

        $query = mysqli_query($conn, "insert into  tblappointment(Name, Email, PhoneNumber,AptDate,AptTime) value('$name','$email','$phone','$date','$time)");
        if ($query) {
            echo "<script>alert('Service has been added.');</script>";
            echo "<script>window.location.href = 'appointment.php'</script>";
            $msg = "";
        } else {
            echo "<script>alert('Something Went Wrong. Please try again.');</script>";
        }
    }
} catch (\Throwable $th) {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";
}




function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>SMBarber - Responsive HTML5 Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body class="barber_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="cube-wrapper">
            <div class="cube-folding">
                <span class="leaf1"></span>
                <span class="leaf2"></span>
                <span class="leaf3"></span>
                <span class="leaf4"></span>
            </div>
            <span class="loading" data-name="Loading">SMBarber Loading</span>
        </div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">

        <!-- Sidebar-wrapper -->
        <div id="sidebar-wrapper">
            <div class="side-top">
                <div class="logo-sidebar">
                    <a href="index.html"><img src="images/logos/logo.png" alt="image"></a>
                </div>
                <ul class="sidebar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="services.html">Our Services</a></li>
                    <li><a href="barbers.html">Our Barbers</a></li>
                    <li><a class="active" href="appointment.php">Appointment</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="/admin">Admin</a></li>
                </ul>
            </div>
        </div>
        <!-- End Sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div id="appointment" class="section wb">
                <div class="container-fluid">
                    <div class="section-title row text-center">
                        <div class="col-md-8 col-md-offset-2">
                            <small>LET'S MAKE AN APPOINTMENT FOR YOUR LIFE</small>
                            <h3>Book now</h3>
                            <hr class="grd1">
                        </div>
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="appointment-left">
                                <h2>Opening Time</h2>
                                <div class="appointment-time">
                                    <ul>
                                        <li>
                                            <span>Monday </span><span>9am-6pm</span>
                                        </li>
                                        <li>
                                            <span>Tuesday </span><span>9am-6pm</span>
                                        </li>
                                        <li>
                                            <span>Wednesday </span><span>9am-6pm</span>
                                        </li>
                                        <li>
                                            <span>Thursday </span><span>9am-6pm</span>
                                        </li>
                                        <li>
                                            <span>Friday </span><span>9am-6pm</span>
                                        </li>
                                        <li>
                                            <span>Saturday </span><span>10am-4pm</span>
                                        </li>
                                        <li>
                                            <span>Sunday </span><span>CLOSED</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact_form">
                                <div id="message"></div>
                                <form class="row" role="form" method="post">
                                    <fieldset class="row-fluid">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Your Phone" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <small>Date:</small>
                                            <input type="date" name="date" id="date" class="form-control" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <small>Time:</small>
                                            <input type="time" name="time" id="time" class="form-control" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                            <button type="submit" name="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">Get
                                                Appointment</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->
        </div>
    </div><!-- end wrapper -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/responsive-tabs.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        (function($) {
            "use strict";
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            smoothScroll.init({
                selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
                selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
                speed: 500, // Integer. How fast to complete the scroll in milliseconds
                easing: 'easeInOutCubic', // Easing pattern to use
                offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
                callback: function(anchor, toggle) {} // Function to run after scrolling
            });
        })(jQuery);
    </script>

</body>

</html>