<?php

include 'db.php';


$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
$gender = $_POST['gender'];


$fileName = $_FILES['photo']['name'];

$tempName = $_FILES['photo']['tmp_name'];


$folder = "uploads/" . $fileName;


move_uploaded_file($tempName, $folder);


$date = date("Y-m-d H:i:s");


$sql = "INSERT INTO students
(fullname,email,phone,course,gender,photo,admission_date)

VALUES

('$fullname','$email','$phone',
'$course','$gender','$folder','$date')";


if(mysqli_query($conn, $sql))
{
    echo "<h2>Admission Successful!</h2>";

    echo "<a href='students.php'>View Students</a>";
}
else
{
    echo "Error";
}

?>