<?php
/*
$conn = new mysqli('localhost', 'root', '', 'gtu_lms');

if (!$conn) {
    die("კავშირი ბაზასთან ვერ დამყარდა" . $conn->connect_error);
}

$sql = 'SELECT FirstName, LastName, PersonalNumber FROM students';
$value = mysqli_query($conn, $sql);

if (!$value) {
    echo "მონაცემები ვერ მოიძებნა";
}*/
/*
echo "<ul>";
    while($row = mysqli_fetch_assoc($value)){
        echo "<li> First name : {$row['FirstName']} </li> ";
        echo "<li> First name : {$row['LastName']} </li> ";
        echo "<li> First name : {$row['PersonalNumber']} </li> ";
    }
echo "</ul>";
*/
//გამოგვაქვს სტუდენტის სახელი გვარი და პერსონალური ნომერი.
/*
echo "<table style='width: 50%; margin: auto;padding: 0px'>";
while ($row = mysqli_fetch_assoc($value)) {
    echo "First name : {$row['FirstName']} <br> ";
    echo "Last name : {$row['LastName']} <br> ";
    echo "Personal Number : {$row['PersonalNumber']} <br> ";
    echo "<hr>";
}
echo "</table>";*/
//

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        //require_once ('for-fill.php');
    ?>
<div class="container p-5 w-75 m-auto ">
    <table class="table">
        <thead>
        <tr style="background-color: coral">
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Personal Number</th>
        </tr>
        </thead>
        <?php require_once ('for-fill.php'); ?>
    </table>
</div>

</body>
</html>