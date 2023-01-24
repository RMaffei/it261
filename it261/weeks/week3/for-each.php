<?php
// our wine list
echo '<h2>This will be my wine list</h2>';

$wines = array(
    'Cabernet',
    'Merlot',
    'Syrah',
    'Malbec',
    'Red Blend'
);

// cannot echo the wine array so using for each loop

echo '<ul>';
foreach($wines as $key) {
    echo '<li> '.$key.'</li>';
}
echo '</ul>';

echo '<h2>Movies and Shows list which will have both a key and a value </h2>';

$shows = [
    'Apple TV' => 'Severance',
    'Apple TV' => 'For All Mankind',
    'Showtime' => 'City on a Hill',
    'Showtime' => 'Homeland',
    'Movie' => 'Top Gun Maverick',
    'HBO Max' => 'Hacks'
];

echo '<ul>';
foreach($shows as $key => $value) {
    echo '<li> <b>'.$key.'</b>: '.$value.'</li>';
} 
echo '</ul>';

echo '<h2>Time for our navigation that will again have both a key and a value</h2>';

$nav = array(
    'index.php' => 'Home',
     'about.php' => 'About',
      'daily.php' => 'Daily',
       'project.php' => 'Project',
        'contact.php' => 'Contact',
         'gallery.php' => 'Gallery',
);

echo '<ul>';
foreach($nav as $key => $value) {
    echo '<li><a href=" '.$key.' "> '.$value.' </a></li>';
}
echo '</ul>';

echo '<h2>Our navigation will display a different color when on the index.php page!</h2>';

// we are going to define a constant
define("THIS_PAGE", basename($_SERVER['PHP_SELF']));

// adding an if statement - if we are on this_page and it is the index.php page, do something

echo '<ul>';

foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
    echo '<li><a style="color:red;" href=" '.$key.' "> '.$value.' </a></li>';
    
} else {
    echo '<li><a style="color:green;" href=" '.$key.' "> '.$value.' </a></li>';
}

} // end of foreach
echo '</ul>';

?>