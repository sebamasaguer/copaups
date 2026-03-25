<?php
include('conection.php');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS `normativas` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `titulo` varchar(255) NOT NULL,
    `archivo` varchar(255) NOT NULL,
    `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

if (mysqli_query($con, $sql)) {
    echo "Table `normativas` created successfully or already exists.\n";
} else {
    echo "Error creating table: " . mysqli_error($con) . "\n";
}
?>
