<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Adder Assignment</title>
    <style>
    </style>
</head>
<body>
 <h1>Adder.php</h1> 
<form action="" method="post">
<label>Enter the first number:</label><input type="number" name="num1"><br>
<label>Enter the second number:</label><input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> 
</form>
<?php     //adder-wrong.php repaired

if (isset($_POST['num1'])) {
$num1 = intval($_POST['num1']);
$num2 = intval($_POST['num2']);
$myTotal = $num1 + $num2;
echo '<p>You added '.$num1.' and '.$num2.' </p>';
echo '<p> and the answer is <br>
<style=color:red> '.$myTotal.' </p>';
echo '<p><a href="">Reset page</a></p>';
}

?> 
</body>
</html>


<!-- added consistent capitalization to variables (num1 and num2), fixed the double strings 
to single strings on lines 6-8, fixed echo statement on line 10, fixed form opening and closing
tag, fixed submit button !--> 