<?php
// Cari dokter berdasarkan keahlian (AJAX)
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
    $query ="SELECT DISTINCT keahlian FROM dokter WHERE keahlian like '%" . $_POST["keyword"] . "%' ORDER BY keahlian";
    $result = mysqli_query($db, $query);
    if(!empty($result)) {
        ?>
        <ul id="autocomplete-list">
            <?php
            foreach($result as $expertise) {
                ?>
                <li onClick="selectExpertise('<?php echo $expertise["keahlian"]; ?>');"><?php echo $expertise["keahlian"]; ?></li>
            <?php } ?>
        </ul>
    <?php } } ?>