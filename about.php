<?php
session_start();
include "config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AKA Health About</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/logohospital.png" alt="logo aka hospital" width="35">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php if (array_key_exists('login_user', $_SESSION)) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION['login_user']['nama'] ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Log Out</a>
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log In / Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Help</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>

    <div class="app app-alt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title display-3">AKA Health</h1>
                    <h3 class="text-secondary">Book hospital room and doctor at comfort from your home. </h3>
                </div>
                <div class="col-12">
                    <br>
                    <h3 class="text-secondary">History of AKA Health</h3>
                    <div class="text-secondary">
                        AKA Health was found and built on October 7th 2017, only 3 people working on the website itself, one of them is a programmer, another a designer, and one more a leader.
                        <br><br>
                        <h3>Contact Us</h3>
                        <ul>
                            <li> E-Mail : AKAHealth@AKA.com </li>
                            <li> Phone : 555-2196 </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <a href="#" class="aka">Hospitals</a>
                        <a href="#" class="aka">Doctors</a>
                        <a href="#" class="aka">Symptomps Checker</a>
                        <a href="#" class="aka">Help</a>
                        <a href="#" class="aka">About</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="assets/img/logohospital.png" alt="logo aka hospital" width="100" class="mt-4">
                    <p class="text-secondary text-center mt-2">&copy;2017 AKA Health</p>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.js" charset="utf-8"></script>
    <script src="assets/js/popper.min.js" charset="utf-8"></script>
    <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
    </body>
</html>
