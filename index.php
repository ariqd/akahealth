<?php
session_start();
include "config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AKA Health</title>
        <link rel="icon" type="image/png" href="assets/img/logohospital.png" sizes="16x16" />
        <link rel="" href="/css/master.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="index.php">
            <img src="assets/img/logohospital.png" alt="logo aka hospital" width="35">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
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
                        <div class="tab mt-4">
                             <button class="tablinks" onclick="openCity(event, 'a')" id="defaultOpen">Find a Doctor</button>
                             <button class="tablinks" onclick="openCity(event, 'b')">Symptoms Checker</button>
                        </div>
                        <div id="a" class="tabcontent">

                            <!-- Form Hospital -->
                            <form action="hospital/detail_hospital.php" method="get" id="hospitalForm">
                             <div class="form-row">
                                 <div class="col-9 frmSearch">
                                     <label class="col-form-label">Search by Hospital Name</label>
                                     <input type="text" class="form-control" id="search-box" placeholder="Enter Hospital Name" name="nama_rs" autocomplete="off" >
                                     <div id="suggesstion-box"></div>
                                 </div>
                                 <div class="col-3">
                                     <label class="col-form-label">&nbsp;</label>
                                     <button type="submit" class="btn btn-aka btn-block">Go</button>
                                 </div>
                             </div>
                           </form>

                            <div class="text-center mt-4">
                                <div style="width: 100%; height: 20px; border-bottom: 3px solid #eee; text-align: center" class="mt-3">
                                  <span style="font-size: 20px; background-color: #fff; padding: 0 10px;" class="text-secondary">
                                    Or
                                  </span>
                                </div>
                            </div>

                            <form action="expertise/detail_expertise.php" method="get" id="expertiseForm">
                                <br>
                                <div class="form-row">
                                    <div class="col-9 frmSearch2">
                                        <label class="col-form-label">Search by Doctor's Speciality</label>
                                        <input type="text" class="form-control" id="search-box2" placeholder="Enter Doctors Speciality" name="expertise" autocomplete="off" >
                                        <div id="suggesstion-box2"></div>
                                    </div>
                                    <div class="col-3">
                                        <label class="col-form-label">&nbsp;</label>
                                        <button type="submit" class="btn btn-aka btn-block">Go</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="b" class="tabcontent">
                            <form>
                             <div class="form-row">
                               <div class="col-10">
                                   <label class="col-form-label">Enter your symptomp(s)</label>
                                 <input type="text" class="form-control" placeholder="e.g. Headache, sore eyes, etc.">
                               </div>
                               <div class="col-2">
                                   <label class="col-form-label">&nbsp;</label>
                                   <button type="submit" class="btn btn-aka btn-block">Search</button>
                               </div>
                             </div>
                           </form>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col">
                            <div class="text-center mt-4">
                                <h2>AKA Health helps you get professional treatment as fast as possible</h2>
                                <div style="width: 100%; height: 20px; border-bottom: 3px solid #eee; text-align: center" class="mt-3">
                                  <span style="font-size: 25px; background-color: #fff; padding: 0 10px;" class="text-secondary">
                                    How? <!--Padding is optional-->
                                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="page-block" id="block1" style="left:-3000px">
                                <h3 class="title">Find a Doctor</h3>
                                <h5 class="far">
                                    Find a Doctor from hospitals near you with expertise related to your symptomps.
                                </h5>
                            </div>
                        </div>
                        <div class="col-4">
                            <img class="page-block-img" src="assets/img/doc.png" alt="stethoscope" width="200" style="left:15%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <img class="page-block-img" src="assets/img/Stethoscope-512.png" alt="stethoscope" width="200" style="left:35%">
                        </div>
                        <div class="col-8">
                            <div class="page-block text-right">
                                <h3 class="title">Check your Symptomps</h3>
                                <h5 class="far">
                                    Figure out your illness with the help of Doctors and our state-of-the-art AI.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-4">
                                <h5 class="title">100+ Hospitals</h5>
                            </div>
                            <div class="col-4">
                                <h5 class="title">500+ Doctors</h5>
                            </div>
                            <div class="col-4">
                                <h5 class="title">1000+ Symptomps Recorded</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mt-5">
                                    <a href="#" class="btn btn-aka btn-lg" id="totop">Find a Doctor Now!</a>
                                </div>
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
                                <a href="terms.php" class="aka">Terms & Conditions</a>
                                <a href="about.php" class="aka">About</a>
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
        </div>

        <script src="assets/js/jquery.js" charset="utf-8"></script>
        <script src="assets/js/popper.min.js" charset="utf-8"></script>
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
            });

            // Hospital
            // AJAX call for autocomplete
            $(document).ready(function(){
                $("#search-box").keyup(function(){
                    $.ajax({
                        type: "POST",
                        url: "hospital/find_hospital.php",
                        data:'keyword='+$(this).val(),
                        beforeSend: function(){
                            $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
                        },
                        success: function(data){
                            $("#suggesstion-box").show();
                            $("#suggesstion-box").html(data);
                            $("#search-box").css("background","#FFF");
                        }
                    });
                });
            });

            // When select hospital name
            function selectHospital(val) {
                $("#search-box").val(val);
                $('#hospitalForm').attr('action', 'hospital/detail_hospital.php?nama_rs=' + $("#search-box").val());
                $("#suggesstion-box").hide();
            }

            // Expertise
            // AJAX call for autocomplete
            $(document).ready(function(){
                $("#search-box2").keyup(function(){
                    $.ajax({
                        type: "POST",
                        url: "expertise/find_expertise.php",
                        data:'keyword='+$(this).val(),
                        beforeSend: function(){
                            $("#search-box2").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
                        },
                        success: function(data){
                            $("#suggesstion-box2").show();
                            $("#suggesstion-box2").html(data);
                            $("#search-box2").css("background","#FFF");
                        }
                    });
                });
            });

            // When select expertise name
            function selectExpertise(val) {
                $("#search-box2").val(val);
                $('#expertiseForm').attr('action', 'expertise/detail_expertise.php?expertise=' + $("#search-box2").val());
                $("#suggesstion-box2").hide();
            }
        </script>
    </body>
</html>
