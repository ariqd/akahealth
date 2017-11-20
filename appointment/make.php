<?php
include "../session.php";
$id = $_GET['id'];

// detail dokter
$query = "select * from dokter where id_dok = $id";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if (isset($_POST['make'])) {
    $id_user = $_SESSION['login_user']['id_user'];
    $id_dok = $row['id_dok'];
    $tgl_appoint = date('Y')."-".$_POST['bln']."-".$_POST['tgl'];
    $jam_appoint = $_POST['jam'].':00';

    $query = "INSERT INTO appointment (id_dok, id_user, tgl_appoint, jam_appoint) 
VALUES ('$id_dok', '$id_user', '$tgl_appoint', '$jam_appoint')";
    echo $query;
    $result = mysqli_query($db, $query);
    $_SESSION['signup_success'] = "Appointment success!";
    header('location:../index.php');
}
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
        <div class="row">
            <div class="col-12">
                <h3>Make an appointment with <?php echo $row['nama_dok'] ?></h3>
                <form action="" method="post" class="mt-4">
                    <div class="form-row">
                        <div class="col-3">
                            <label for="date">Tanggal</label>
                            <select class="form-control" id="date" name="tgl">
                                <?php for ($i = 1; $i <= 30; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                } ?>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="date">Bulan</label>
                            <select class="form-control" id="date" name="bln">
                                <?php for ($i = 11; $i <= 12; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row pt-3">
                        <div class="col-3">
                            <label for="date">Jam</label>
                            <select class="form-control" id="date" name="jam">
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-aka mt-5" name="make">Make Appointment</button>
                </form>
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
