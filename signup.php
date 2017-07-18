<?php

$dbc = mysqli_connect("localhost","root","root","grad");
if(!$dbc)
{
	die("Not connected");
}


$firstname = ($_POST["firstname"]);
$lastname = ($_POST["lastname"]);
$email = ($_POST["email"]);
$password = ($_POST["password"]);

$check = "SELECT * FROM person WHERE email='$email'";
$result = mysqli_query($dbc, $check);
$count = mysqli_num_rows($result);

if($count <= 0)
{
	
$query = "INSERT INTO person (firstname,lastname,email,password)VALUES ('$firstname','$lastname','$email','$password')";


if (mysqli_query($dbc, $query)) {
    header('Location: gradRoomFinal-guest.html');
	//header('Location: profile.php');
	exit;
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($dbc);
}


}
else
{
	header('Location: signup_error.php');
exit;
}
mysqli_close($dbc);
?>