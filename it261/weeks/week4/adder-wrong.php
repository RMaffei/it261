<?php     //adder-wrong.php

if (isset($_POST['num1'])) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
echo '<p>You added '.$num1.' and '.$num2.' </p>';
echo '<p> and the answer is <br>
<style=color:red>, '.$myTotal.' "!"</p>';
echo '<p><a href="">Reset page</a></p>';
}
?> 

<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="">
<label>Enter the first number:</label><input type="number" name="num1"><br>
<label>Enter the second number:</label><input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> 
</form>

