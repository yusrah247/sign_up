<?php
$message = '';
if (isset($_POST['submit'])) {
$fullName = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$tribe = $_POST['tribe'];
if (empty($fullName) || empty($email) || empty($phone) || empty($tribe)) {
$message = 'All fields are required';
}
elseif (strlen($fullName) < 3 || strlen($fullName) > 20) {
$message .= '<p class="error">Full name must be between 3 and 20 characters</p>';
}
elseif (!is_numeric($phone)) {
$message .= '<p class="error">Phone number should be numeric</p>';
}
elseif (strlen($phone) != 11) {
$message .= '<p class="error">Phone number should be 11 digits long</p>';
}
if (empty($message)) {
$message = '<p class="success">All inputs are valid, thank you</p>';
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
    <style>
.error {
color: red;
}
.success {
color: green;
}
</style>
</head>
<body>
<h3>A Simple Registration Form</h3>
    <?php echo $message ?>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" id="full_name"><br>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" id="phone"><br>
        <label for="tribe">Tribe:</label>
        <select name="tribe">
            <option value="-1" selected>Choose one</option>
            <option value="ladi-kwali">Ladi Kwali</option>
            <option value="queen-amina">Queen Amina</option>
            <option value="margaret-ekpo">Margaret Ekpo</option>
        </select><br>
        <input type="submit" name="submit" value="Submit" >
    </form>
</body>
</html>