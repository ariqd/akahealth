<?php
include "session.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AKA Health</title>
        <link rel="icon" type="image/png" href="assets/img/logohospital.png" sizes="16x16" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="index.php">
            <img src="assets/img/logohospital.png" alt="logo aka hospital"
            width="35">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="login.php">Log In / Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Help</a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="app app-alt">
            <div class="container">
                <div class="row" >
                    <div class="col-12">
                        <h1 class="title display-3">AKA Health</h1>
                        <!-- <h3 class="text-secondary">Book hospital room and doctor at comfort from your home. </h2> -->
                        <h3 class="text-secondary">Log In or Sign Up to get the best experience of AKA Health</h2>
                    </div>
                    <div class="col-12">
                        <div class="tab mt-4">
                             <button class="tablinks" onclick="openCity(event, 'a')" id="defaultOpen">Login</button>
                             <button class="tablinks" onclick="openCity(event, 'b')">Sign Up</button>
                        </div>
                        <div id="a" class="tabcontent">
                            <form action="" method="post">
                                <div class="form-row">
        							<div class="col-8">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
        							</div>
                                    <div class="col-6">
        								<button type="submit" class="btn btn-aka btn-block mt-1 btn-lg" name="login">Log In</button>
        							</div>
        						</div>
                           </form>
                        </div>
                        <div id="b" class="tabcontent">
                            <form action="" method="post">
                                <div class="form-row">
        							<div class="col-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
        								<input type="checkbox" id="terms" name="terms">
        								<label for="terms">Have you read our <a href="terms.php">Terms &amp; Conditions</a> ?</label>
        							</div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <textarea name="alamat" rows="4" class="form-control" placeholder="Alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
        						</div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-aka btn-block mt-1 btn-lg" name="signup">Sign Up</button>
                                    </div>
                                </div>
                           </form>
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
                        <img src="assets/img/logohospital.png" alt="logo aka hospital"
                        width="100" class="mt-4">
                        <p class="text-secondary text-center mt-2">&copy;2017 AKA Health</p>
                    </div>
                </div>
            </div>
        </div>


        <script src="assets/js/jquery.js" charset="utf-8"></script>
        <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
        <script type="text/javascript">
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
            }
            document.getElementById("defaultOpen").click();

            $('#totop').click(function () {
                $('html, body').animate({scrollTop: '0px'}, 300);
            })
        </script>
    </body>
</html>
