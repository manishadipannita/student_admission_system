<?php

include("db.php");


$id = $_GET['id'];


$query = "DELETE FROM students WHERE id='$id'";


$result = mysqli_query($conn, $query);


if($result)
{
    echo "Student Deleted Successfully";

   
    header("refresh:2;url=students.php");
}
else
{
    echo "Delete Failed";
}

?>