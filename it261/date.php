<?php
// creating date function
echo date('Y');
echo '<br>';
echo date('l, F j, Y h:i A');
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo date('l, F j, Y h:i: A');
echo '<br>';
$name  = 'Rae';
$our_time = date('H:i A');
echo '<br>';
echo $our_time;

// create function : IF time is less or equal to 11,
// then it is morning. less or equal to 17 (5pm) 
// then it is afternoon. the else statement is evening

if($our_time <= 11) {
    echo '<h2>Good Morning, '.$name.'</h2>';
} elseif ($our_time <= 17) {
    echo '<2 style="color:green;">Good Afternoon, '.$name.'</h2>';
} else {
    echo '<h2 style="color:blue;"Good Evening, '.$name.'</h2>';
}
