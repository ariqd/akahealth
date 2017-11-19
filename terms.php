<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AKA Health</title>
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
                <a class="nav-link" href="about.html">Help</a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="app app-alt">
            <div class="container">
                <div class="row" >
                    <div class="col-12">
                        <h2 class="text-secondary">Terms & Conditions </h2><br>
						&nbsp; &nbsp; Some of our Services allow you to upload, submit, store, send or receive content. You retain ownership of any intellectual 
						property rights that you hold in that content. In short, what belongs to you stays yours.

When you upload, submit, store, send or receive content to or through our Services, you give Google (and those we work with) a worldwide license to use,
host, store, reproduce, modify, create derivative works (such as those resulting from translations, adaptations or other changes we make so that your
content works better with our Services), communicate, publish, publicly perform, publicly display and distribute such content. The rights you grant in
this license are for the limited purpose of operating, promoting, and improving our Services, and to develop new ones. This license continues even if
you stop using our Services (for example, for a business listing you have added to Google Maps). Some Services may offer you ways to access and remove
content that has been provided to that Service. Also, in some of our Services, there are terms or settings that narrow the scope of our use of the content
submitted in those Services. Make sure you have the necessary rights to grant us this license for any content that you submit to our Services.
<br><br>
&nbsp; &nbsp; Our automated systems analyze your content (including emails) to provide you personally relevant product features, such as customized search results, 
tailored advertising, and spam and malware detection. This analysis occurs as the content is sent, received, and when it is stored.
<br><br>
&nbsp; &nbsp; If you have a Google Account, we may display your Profile name, Profile photo, and actions you take on Google or on third-party applications connected 
to your Google Account (such as +1’s, reviews you write and comments you post) in our Services, including displaying in ads and other commercial contexts.
We will respect the choices you make to limit sharing or visibility settings in your Google Account. For example, you can choose your settings so your
name and photo do not appear in an ad.
<br>
&nbsp; &nbsp; You can find more information about how Google uses and stores content in the privacy policy or additional terms for particular Services. If you 
submit feedback or suggestions about our Services, we may use your feedback or suggestions without obligation to you.
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
