<?php 
// this file demonstrates for loops and adds php inside the HTML
// the for loop - loops through a block of code a specified number of times
// for (init counter; test counter; incemrement counter) { code to be executed for each iteration; }
// celcius and farenheit 

// far = ($celsius * 9/5) + 32;

// kilometers and mileage

// km = ($miles * 1.609);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>My Celcius Table</title>
        <style>

* {
    padding:0;
    margin:0;
    box-sizing:border-box;
}

table {
    width:500px;
    margin:20px auto;
    border-collapse:collapse;
    border:1px solid lightblue;
}

td, th {
    border:1px solid lightblue;
    border-collapse:collapse;
    padding:5px;
}

h1, h2 {
    text-align:center;
    margin: 10px 0;
    color:green;
}

        </style>

</head>
<body>
    <h1>My Celsius / Farenheit Table!</h1>
<table>
<tr>
<th>Celcius</th>
<th>Farenheit</th>
</tr>
<?php
for($cel = 0; $cel <= 100; $cel += 5){
    $far = ($celcius * 9/5) + 32;
    echo '<tr>';
    echo '<td> '.$cel.' degrees  </td>';
    echo '<td> '.$far.' degrees  </td>';
    echo '</tr>';
}
?>

<h1>My Kilometer / Mileage Table!</h1>
<table>
<tr>
    <th>Kilometer</th>
    <th>Mileage</th>
</tr>
<?php
for($miles = 0; $miles <= 100; $miles += 5){
    $km = ($miles * 1.609);
    echo '<tr>';
    echo '<td> '.$km.' kilometers  </td>';
    echo '<td> '.$miles.' miles </td>';
    echo '</tr>';
}
?>

</body>
</html>
