<?php

ob_start();
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// our navigational array 
$nav = array(
  'index.php' => 'Home',
  'about.php' => 'About',
  'daily.php' => 'Daily',
  'project.php' => 'Project',
  'contact.php' => 'Contact',
  'gallery.php' => 'Gallery',
);
function make_links($nav)
{
  $my_return = '';
  foreach ($nav as $key => $value) {
    if (THIS_PAGE == $key) {
      $my_return .= '<li><a class="current" href="' . $key . '">' . $value . '</a></li>';
    } else {
      $my_return .= '<li><a href="' . $key . '"> ' . $value . '</a></li>';
    }
  } // end foreach
  return $my_return;
} // end function

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$pizzas = '';
$order_type = '';
$drinks = '';
$privacy = '';
$comments = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$pizzas_err = '';
$order_type_err = '';
$drinks_err = '';
$privacy_err = '';
$comments_err = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['first_name'])) {
    $first_name_err = 'Please fill out your first name.';
  } else {
    $first_name = $_POST['first_name'];
  }

  if (empty($_POST['last_name'])) {
    $last_name_err = 'Please fill out your last name.';
  } else {
    $last_name = $_POST['last_name'];
  }

  if (empty($_POST['email'])) {
    $email_err = 'Please fill out your email.';
  } else {
    $email = $_POST['email'];
  }

  if (empty($_POST['order_type'])) {
    $order_type_err = 'Please choose your order type.';
  } else {
    $order_type = $_POST['order_type'];
  }

  if (empty($_POST['phone'])) {
    $phone = 'Please fill out your phone number.';
  } else {
    $phone = $_POST['phone'];
  }

  if (empty($_POST['pizzas'])) {
    $pizzas_err = 'What, no pizzas?';
  } else {
    $pizzas = $_POST['pizzas'];
  }

  if (empty($_POST['comments'])) {
    $comments_err = 'Please include details with your order.';
  } else {
    $comments = $_POST['comments'];
  }

  if (empty($_POST['privacy'])) {
    $privacy_err = 'Please agree to our privacy policy.';
  } else {
    $privacy = $_POST['privacy'];
  }

  if ($_POST['drinks'] == NULL) {
    $drinks_err = 'Please select your drink.';
  } else {
    $drinks = $_POST['drinks'];
  }

  // pizzas function
  function my_pizzas($pizzas)
  {
    $my_return = '';

    if (!empty($_POST['pizzas'])) {
      $my_return = implode(', ', $_POST['pizzas']);
    } else {
      $pizzas_err = 'Please choose your toppings!';
    }

    return $my_return;
  } // end wine function 
}

if (isset(
  $_POST['first_name'],
  $_POST['last_name'],
  $_POST['email'],
  $_POST['order_type'],
  $_POST['phone'],
  $_POST['drinks'],
  $_POST['pizzas'],
  $_POST['comments'],
  $_POST['privacy']
)) {

  $to = 'racheldmaffei@gmail.com';
  $subject = 'Test Email on ' . date('m/d/y, h:i:A');
  $body = '
    First Name : ' . $first_name . '  ' . PHP_EOL . '
    Last Name : ' . $last_name . '  ' . PHP_EOL . '
    Email : ' . $email . '  ' . PHP_EOL . '
    order_type : ' . $order_type . '  ' . PHP_EOL . '
    Phone : ' . $phone . '  ' . PHP_EOL . '
    Drinks : ' . $drinks . '  ' . PHP_EOL . '
    pizzas :  ' . my_pizzas($pizzas) . '  ' . PHP_EOL . ' 
    Comments : ' . $comments . '  ' . PHP_EOL . '
    ';

  $headers = array(
    'From' => 'noreply@raemaffei.com'
  );
  if (
    !empty($first_name &&
      $last_name &&
      $email &&
      $order_type &&
      $phone &&
      $drinks &&
      $pizzas &&
      $comments) &&
    preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])
  ) {
    mail($to, $subject, $body, $headers);
    header('Location:thx.php');
  }
} // end of server request method
