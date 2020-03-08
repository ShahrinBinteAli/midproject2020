<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
		<h1>Welcome home! <?= $_SESSION['uname']?></h1>
		<a href="section.html">see sections</a></br>
		<a href="result.html">Results</a></br>
		<a href="course.html">Offered Courses</a></br>
		<a href="book.html">Available books</a></br>
		<a href="student.html">Student Details</a></br>
		<a href="contact.html">Student & Parent Contacts</a></br>
		<a href="payment.html">Payment</a></br>
		<a href="logout.php">Logout</a>
</body>
</html>