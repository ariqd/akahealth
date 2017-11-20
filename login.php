<?php
session_start();
include "config.php";
if (array_key_exists('login', $_POST)) {
    // username dan password dari form login
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // Jika result email dan password benar, row pasti hanya 1 baris
    if ($count == 1) {
        $_SESSION['login_user']['email'] = $email;
        $_SESSION['login_user']['nama'] = $row['nama'];
        $_SESSION['login_user']['alamat'] = $row['alamat'];
        $_SESSION['login_user']['no_telp'] = $row['no_telp'];
        $_SESSION['login_user']['id_user'] = $row['id_user'];

        header("location:index.php");
    } else {
        $_SESSION['error'] = "Username atau password salah!";
        header("location:login.php");
    }
} else if (array_key_exists('signup', $_POST)) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO user (nama, email, password, no_telp, alamat) VALUES ('$nama', '$email', '$password', '$no_telp', '$alamat')";
    $result = mysqli_query($db, $query);
    $_SESSION['signup_success'] = true;
}
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
                        <h3 class="text-secondary">Log In or Sign Up to get the best experience of AKA Health</h3>
                        <?php if (isset($_SESSION['signup_success'])) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Sign Up successful!</strong> Go ahead and Log In.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                        <?php if (array_key_exists('error', $_SESSION)) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Login failed!</strong> wrong username or password
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                        <?php if (array_key_exists('declined', $_SESSION)) { ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?php echo $_SESSION['declined'] ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
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
                                            <input required type="email" class="form-control" placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input required type="password" class="form-control" placeholder="Password" name="password">
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
                                            <input required type="text" class="form-control" placeholder="Full Name" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <input required type="email" class="form-control" placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input required type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
        								<input required type="checkbox" id="terms" name="terms">
        								<label for="terms">Have you read our <a href="terms.php">Terms &amp; Conditions</a> ?</label>
        							</div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <textarea name="alamat" rows="4" class="form-control" placeholder="Alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input required type="text" class="form-control" placeholder="Phone Number" name="no_telp">
                                        </div>
                                    </div>
        						</div>
                                <div class="row">
                                    <div class="col-7">
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
        <script src="assets/js/popper.min.js" charset="utf-8"></script>
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
<?php
unset($_SESSION["signup_success"]);
unset($_SESSION["error"]);
unset($_SESSION["declined"]);

?>