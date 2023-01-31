<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Adder Assignment</title>
</head>
<body>
<h1>Adder.php</h1>
<form action="" method="post">
<fieldset>
<label>Enter the first number:</label>
<input type="number" name="num1">

<label>Enter the second number:</label>
<input type="number" name="num2">

<input type="submit" value="Send it!">
<p><a href="">Reset!</a></p>
</fieldset>
</form>

<?php
// logic: if isset num1 and num2 --- good!
// if statement for when there are empty fields -- echo 'please fill out fields'

if(isset($_POST['num1'],
$_POST['num2'])) {

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if(empty($_POST['num1'] &&
$_POST['num2'])) {

echo '<p class="error">Please fill out all fields!</p>';
} else {
echo '
<div class="box">
<h2>'
}
} 

?>
</body>
</html>