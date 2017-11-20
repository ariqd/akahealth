<?php
include "../config.php";
?>
    <html>
    <head>
        <style>
            #autocomplete-list {
                list-style: none;
                padding: 0;
                border: 1px solid #e0e0e0;
            }
            #autocomplete-list li {
                padding: 8px 15px;
            }
            #autocomplete-list li:hover {
                background: #eee;
                cursor: pointer;
            }
        </style>
    </head>
    </html>
<?php
if(!empty($_POST["keyword"])) {
//    $query ="SELECT * FROM rumahsakit WHERE nama_rs like '%" . $_POST["keyword"] . "%' ORDER BY nama_rs";
    $query ="SELECT gejala.`nama_gejala`, penyakit.`nama_penyakit`, penyakit.id_penyakit FROM penyakit
JOIN penyakit_gejala ON penyakit.`id_penyakit` = penyakit_gejala.`id_penyakit`
JOIN gejala ON gejala.`id_gejala` = penyakit_gejala.`id_gejala` WHERE nama_gejala LIKE '%" . $_POST["keyword"] . "%'";
    $result = mysqli_query($db, $query);
    if(!empty($result)) {
        ?>
        <ul id="autocomplete-list">
            <li class="disabled"><b>Disease(s) with "<?php echo $_POST['keyword'] ?>" symptom</b></li>
            <?php
            foreach($result as $symptoms) {
                ?>
                <li onClick="selectDisease('<?php echo $symptoms["nama_penyakit"]; ?>');"><?php echo $symptoms["nama_penyakit"]; ?></li>
            <?php } ?>
        </ul>
    <?php } } ?>