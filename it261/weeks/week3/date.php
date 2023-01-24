<?php
// creating date function
echo date('Y');
echo '<br>';
echo date('l, F j, Y h:i A');
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date('l, F j, Y h:i A');
echo '<br>';
$name  = 'Rae';
$our_time = date('H:i A');
echo '<br>';
echo $our_time;

// create function : IF time is less or equal to 11,
// then it is morning. less or equal to 17 (5pm) 
// then it is afternoon. the else statement is evening

if($our_time <= 11) {
    echo '<h2 style="color:yellow;">Good Morning, '.$name.'</h2>
    <img src="./images/sun.png" alt="sun">
    <p>It\'s time to get up!</p>';
} elseif ($our_time <= 17) {
    echo '<h2 style="color:orange;">Good Afternoon, '.$name.'</h2>
    <img src="./images/afternoon.png" alt="afternoon">
    <p>It\'s the afternoon!</p>';
} else {
    echo '<h2 style="color:blue;"Good Evening, '.$name.'</h2>
    <img src="./images/moon.png" alt="moon">
    <p>It\'s time to wind down.</p>';
}
