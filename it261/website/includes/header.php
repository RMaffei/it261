<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
        $title = 'Home page of our Website project';
        $body = 'home';
        break;

    case 'about.php' :
        $title = 'About page of our Website project';
        $body = 'about inner';
        break;
    case 'daily.php' :
        $title = 'Daily page of our Website project';
        $body = 'daily inner';
        break;
     case 'project.php' :
        $title = 'Project page of our Website project';
        $body = 'project inner';
        break;
    case 'contact.php' :
        $title = 'Contact page of our Website project';
        $body = 'contact inner';
        break;
    case 'gallery.php' :
        $title = 'Gallery page of our Website project';
        $body = 'gallery inner';
        break;
}

// our navigational array 
$nav = array(
    'index.php' => 'Home',
     'about.php' => 'About',
      'daily.php' => 'Daily',
       'project.php' => 'Project',
        'contact.php' => 'Contact',
         'gallery.php' => 'Gallery',
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body ;?>">
    <header>
        <div class="inner-header">
            <a href="index.html">
                <img id="logo" src="images/logo.png" alt="logo"> </a>
            <!-- <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Daily</a></li>
                    <li><a href="">Project</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Gallery</a></li>
                </ul>
            </nav> -->
        <nav>
        <ul>
        <?php
        echo '<ul>';
        foreach($nav as $key => $value) {
            if(THIS_PAGE == $key) {
            echo '<li><a style="color:red;" href=" '.$key.' "> '.$value.' </a></li>';
            
        } else {
            echo '<li><a style="color:green;" href=" '.$key.' "> '.$value.' </a></li>';
        }
        
        } // end of foreach
        
        ?>
        </ul>
        </nav>
        </div>
        <!-- end of inner header -->
    </header>