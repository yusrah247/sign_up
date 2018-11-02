<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$pnumber=$_POST['pnumber'];
$gender=$_POST['gender'];
$country=$_POST['country'];
saveToDatabase($firstname,$lastname, $email, $password, $cpassword, $pnumber, $gender, $country );
header('Location:successpage.html');
function saveToDatabase($firstname,$lastname, $email, $password, $cpassword, $pnumber, $gender, $country ) {
$serverName = "localhost";
$database = "signup";
$username = "root";
$password = "";
//Open database connection
$conn = mysqli_connect($serverName, $firstname,$lastname, $email, $password, $cpassword, $pnumber, $gender, $country, $database);
// Check that connection exists
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO users_details (firstname,lastname, email, password, cpassword, pnumber, gender, country, created_date)
VALUES ('$firstname', '$lastname', '$email', '$password', '$cpassword', '$pnumber', '$gender', '$country', NOW())";
$result = mysqli_query($conn, $sql);
//Check for errors
if (!$result) {
die("Error: " . $sql . "<br>" . mysqli_error($conn));
}
//Close the connection
mysqli_close($conn);
}
?>