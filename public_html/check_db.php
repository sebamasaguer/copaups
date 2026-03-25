<?php
include('conection.php');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Tables in database:\n";
$result = mysqli_query($con, "SHOW TABLES");
while ($row = mysqli_fetch_row($result)) {
    echo $row[0] . "\n";
    $columns = mysqli_query($con, "SHOW COLUMNS FROM " . $row[0]);
    while ($col = mysqli_fetch_assoc($columns)) {
        echo "  - " . $col['Field'] . " (" . $col['Type'] . ")\n";
    }
}
?>
