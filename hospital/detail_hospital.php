<?php
session_start();
include "../config.php";
$nama_rs = $_POST['nama_rs'];
$query ="SELECT * FROM rumahsakit WHERE nama_rs ='$nama_rs'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AKA Health</title>
    <link rel="icon" type="image/png" href="../assets/img/logohospital.png" sizes="16x16" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php">
        <img src="../assets/img/logohospital.png" alt="logo aka hospital"
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
            <?php if (array_key_exists('login_user', $_SESSION)) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['login_user']['nama'] ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../logout.php">Log Out</a>
                    </div>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php">Log In / Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about.php">Help</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>

<div class="app pt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-4"><?php echo $row['nama_rs'] ?></h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <img src="../assets/img/rs/<?php echo $row['gambar'] ?>" alt="" class="img-fluid">
            </div>
            <div class="col-6">
                <h4>Alamat: <?php echo $row['alamat'] ?></h4>
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
                <img src="../assets/img/logohospital.png" alt="logo aka hospital"
                     width="100" class="mt-4">
                <p class="text-secondary text-center mt-2">&copy;2017 AKA Health</p>
            </div>
        </div>
    </div>
</div>


<script src="../assets/js/jquery.js" charset="utf-8"></script>
<script src="../assets/js/popper.min.js" charset="utf-8"></script>
<script src="../assets/js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
