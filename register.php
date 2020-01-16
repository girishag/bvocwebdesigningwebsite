<?php

$email = $phone = $name ="";

$email=$_POST['email'];
$phone = $_POST['phone'];
$name = $_POST['name'];

$dbc = mysqli_connect('localhost', 'root','','wdinfo')
or die('error connecting to mysql server');

$query ="INSERT INTO register(name,phoneno,email) values('$name','$phone','$email')";

$result =mysqli_query($dbc, $query)
or die("error querying database");

mysqli_close($dbc);
	
echo "thanku for submitting the form";	

?>
