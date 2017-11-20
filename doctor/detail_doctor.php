<?php
session_start();
include "../config.php";
$id = $_GET['id'];

// detail dokter
$query = "select * from dokter where id_dok = $id";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

// penyakit yg bisa ditangani dokter
$query2 = "SELECT penyakit.* FROM penyakit
JOIN dokter_penyakit ON penyakit.`id_penyakit` = dokter_penyakit.`id_penyakit`
JOIN dokter ON dokter.`id_dok` = dokter_penyakit.`id_dok`
WHERE dokter.`id_dok` = $id";
$penyakit = mysqli_query($db, $query2);
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

<!-- Navbar -->
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

<!-- Content -->
<div class="app pt-3">
    <div class="container">

        <!-- Detail dokter-->
        <div class="row">
            <div class="col-12">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <img src="../assets/img/<?php echo $row['gambar'] ?>" class="img-fluid">
            </div>
            <div class="col-8">
                <h1 class="title display-4"><?php echo $row['nama_dok'] ?></h1>
                <h4>Speciality: <?php echo $row['keahlian'] ?></h4>
                <h4>Phone: <?php echo $row['no_telp'] ?></h4>
                <br>
                <h5>Penyakit yang bisa ditangani: </h5>
                <?php while ($baris = mysqli_fetch_assoc($penyakit)) { ?>
                    <a href="../symptoms/detail_disease.php?disease=<?php echo $baris['nama_penyakit'] ?>"><?php echo $baris['nama_penyakit'] ?></a>
                    <br>
                <?php } ?>
                <br>
                <a href="../appointment/make.php?id=<?php echo $baris['id_dok'] ?>" class="btn btn-aka mt-1 btn-fluid">Make an Appointment</a>
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
