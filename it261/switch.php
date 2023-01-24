<?php 
// class coffee exercise
// introducing isset() function and introduce first global variable 

// $variable = 'This is our variable';

if(isset($variable)) {
    echo 'Variable has been set!';
} else 
echo 'Variable has not been set!';

echo '<br>';

if(isset($_GET['today'])) {
    echo 'Today has been set';
} else {
    echo 'NOT!!!!!!!!!!';
}

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Friday' :
        $coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = '<p>A green tea latte</b> is simple a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place.</p>';
}