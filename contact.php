<?php

$email = $phone = $name ="";

$email=$_POST['email'];
$subject = $_POST['subject'];
$name = $_POST['name'];
$message = $_POST['message'];

$dbc = mysqli_connect('localhost', 'root','','wdinfo')
or die('error connecting to mysql server');

$query ="INSERT INTO contact(name,email,subject,message) values('$name','$email','$subject','$message')";

$result =mysqli_query($dbc, $query)
or die("error querying database");

mysqli_close($dbc);
	
echo "thanku for submitting the form";	

?>
