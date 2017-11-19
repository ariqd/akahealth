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
        
  <a class="navbar-brand" href="index.html">

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

 <a class="nav-link" href="login.html">Log In</a>
              </li>

 <li class="nav-item">

 <a class="nav-link" href="#">Help</a>

 </li>
            </ul>
          </div>
        </nav>


   <div class="app app-alt">

    <div class="container">

<div class="row">

  <div class="col-12">

    <h1 class="title display-3">AKA Health</h1>

          <h3 class="text-secondary">Book hospital room and doctor at comfort from your home. </h2>

          </div>

 <div class="col-12">

 </br>
 <h3 class="text-secondary">History of AKA Health</h3>
<div  class="text-secondary">
AKA Health was found and built on October 7th 2017, only 3 people working on the website itself, one of them is a programmer, another a designer, and one more a leader.</div>
<br>
<div  class="text-secondary">
<h3 class="text-secondary">Contact Us</h3> </div>
<div  class="text-secondary">
<ul>
  <li> E-Mail : AKAHealth@AKA.com </li>
  <li> Phone : 555-2196 </li>
</ul>




</div>

                         </div>

      <div class="row">
                            <div class="col">

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
