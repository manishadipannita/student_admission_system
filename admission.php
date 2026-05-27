<!DOCTYPE html>
<html>
<head>

<title>Admission Form</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<h1>Admission Form</h1>

<nav>
<a href="index.php">Home</a>
<a href="admission.php">Admission Form</a>
<a href="students.php">Student List</a>
<a href="contact.php">Contact</a>
</nav>

<div class="container">

<form action="save_student.php"
method="POST"
enctype="multipart/form-data">

<label>Full Name</label>
<input type="text" name="fullname" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Phone</label>
<input type="text" name="phone" required>

<label>Course</label>
<input type="text" name="course" required>

<label>Gender</label>

<select name="gender">

<option value="Male">Male</option>

<option value="Female">Female</option>

</select>

<br><br>

<label>Profile Picture</label>

<input type="file" name="photo" required>

<br><br>

<button type="submit">Submit</button>

</form>

</div>

</body>
</html>