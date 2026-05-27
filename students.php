<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Student List</h1>

<nav>
    <a href="index.php">Home</a>
    <a href="admission.php">Admission Form</a>
    <a href="students.php">Student List</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="container">

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Photo</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Course</th>
    <th>Gender</th>
    <th>Admission Date</th>
    <th>Action</th>
</tr>

<?php

$result = mysqli_query($conn, "SELECT * FROM students");

while($row = mysqli_fetch_assoc($result)){

echo "<tr>

<td>".$row['id']."</td>

<td>
<img src='".$row['photo']."'
width='80' height='80'>
</td>

<td>".$row['fullname']."</td>

<td>".$row['email']."</td>

<td>".$row['phone']."</td>

<td>".$row['course']."</td>

<td>".$row['gender']."</td>

<td>".$row['admission_date']."</td>

<td>

<a href='delete.php?id=".$row['id']."'
onclick=\"return confirm('Are you sure?')\">

Delete

</a>

</td>

</tr>";

}

?>

</table>

</div>

</body>
</html>