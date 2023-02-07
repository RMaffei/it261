<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 1 php file</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <fieldset>
        <label>NAME</label>
        <input type="text" name="name">

        <label>EMAIL</label>
        <input type="email" name="email">

        <label>How much money do you have?</label>
        <input type="number" name="amount">

        <!-- going to add radio button with attribute of value -->
        <label>Choose your currency:</label>
        <ul>
        <li><input type="radio" name="currency" value="0.017"> Rubles </li>
        <li><input type="radio" name="currency" value="0.76"> Canadian Dollars </li>
        <li><input type="radio" name="currency" value="1.15"> Pounds </li>
        <li><input type="radio" name="currency" value="1.00"> Euros </li>
        <li><input type="radio" name="currency" value="0.0074"> Yen </li>
        </ul>
        <input type="submit" value="Convert it">
        <p><a href="">Reset it!</a></p> 
    </fieldset>
    </form>
    <?php 
    // start server request method
    // ask ourselves if any fields are empty
    // if the fields are not empty, we will elseif they are set

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['name'] &&
        $_POST['email'] &&
        $_POST['amount'] &&
        $_POST['currency'])) {
            echo '<p class="error">Please fill out all of the fields</p>';
        } else if (isset($_POST['name'],
        $_POST['email'],
        $_POST['amount'],
        $_POST['currency'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            $dollars = $amount * $currency;

            echo '
            <div class="box">
            <h2>Hello  '.$name.'</h2>
            <p>You now have <b> $'.$dollars.' American dollars and we will be emailing you at '.$email.' with your information!</p>
            </div>
            ';

        }
    } // end server request

    ?>
</body>
</html>