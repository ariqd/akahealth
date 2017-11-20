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
    $query ="SELECT * FROM rumahsakit WHERE nama_rs like '%" . $_POST["keyword"] . "%' ORDER BY nama_rs";
    $result = mysqli_query($db, $query);
    if(!empty($result)) {
        ?>
        <ul id="autocomplete-list">
            <?php
            foreach($result as $hospital) {
                ?>
                <li onClick="selectCountry('<?php echo $hospital["nama_rs"]; ?>');"><?php echo $hospital["nama_rs"]; ?></li>
            <?php } ?>
        </ul>
    <?php } } ?>