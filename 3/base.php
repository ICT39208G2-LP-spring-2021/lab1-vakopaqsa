<?php 

$conn = new mysqli('localhost', 'root', '', 'gtu_lms');

if (!$conn) {
    die("კავშირი ბაზასთან ვერ დამყარდა" . $conn->connect_error);
}

$sql = 'SELECT * FROM students WHERE `registredUsers` = true';
$value = mysqli_query($conn, $sql);

$sql = 'SELECT * FROM students WHERE `registredUsers` = false';
$valuee = mysqli_query($conn, $sql);

if (!$value) {
    echo "მონაცემები ვერ მოიძებნა";
}
?>