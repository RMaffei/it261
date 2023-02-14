<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
    <fieldset>
        <label>NAME</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])  ;?>">

        <label>TOTAL MILES DRIVING?</label>
        <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles'])  ;?>">

        <label>HOW FAST DO YOU DRIVE (MPH)?</label>
        <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed'])  ;?>">

        <label>HOURS PER DAY SPENT DRIVING?</label>
        <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours'])  ;?>">

        <label>PRICE OF GAS</label>
        <ul>
        <li><input type="radio" name="gas" value="3.00" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.00) echo 'checked="checked"';?>> $3.00 </li>
        <li><input type="radio" name="gas" value="3.50" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.50) echo 'checked="checked"';?>> $3.50 </li>
        <li><input type="radio" name="gas" value="4.00" <?php if(isset($_POST['gas']) && $_POST['gas'] == 4.00) echo 'checked="checked"';?>> $4.00 </li>
        </ul>

        <label>FUEL EFFICIENCY</label>
        <select name="fuel">
            <option value="" NULL <?php if(isset($_POST['fuel']) && $_POST['fuel'] == NULL) echo 'selected = "unselected"'  ;?>>Select one!</option>
            <option value="10" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '10mpg') echo 'selected = "unselected"'  ;?>>Terrible @  10mpg</option>
            <option value="20" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '20mpg') echo 'selected = "unselected"'  ;?>>Okay @ 20mpg</option>
            <option value="30" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '30mpg') echo 'selected = "unselected"'  ;?>>Good @ 30mpg</option>
        </select>
        <input type="submit" value="Calculate">
        <p><a href="">Reset</a></p> 
    </fieldset>
    </form>
    <?php 
    // start server request method
    // ask ourselves if any fields are empty
    // if the fields are not empty, we will elseif they are set

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['name'])) {
            echo '<p class="error">Please fill out your name!</p>';
        }

        if(empty($_POST['miles'])) {
            echo '<p class="error">Please enter your miles!</p>';
        }

        if(empty($_POST['speed'])) {
            echo '<p class="error">Please enter your speed!</p>';
        }

        if(empty($_POST['hours'])) {
            echo '<p class="error">Please enter your hours driven!</p>';
        }

        if(empty($_POST['gas'])) {
            echo '<p class="error">Please choose a gas price!</p>';
        }
        
        if($_POST['fuel'] == NULL) {
            echo '<p class="error">Please choose your fuel efficiency!</p>';
        }

        if (isset($_POST['name'],
            $_POST['miles'],
            $_POST['speed'],
            $_POST['hours'],
            $_POST['gas'],
            $_POST['fuel'])) {
            $name = $_POST['name'];
            $miles = floatval($_POST['miles']);
            $speed = floatval($_POST['speed']);
            $hours = floatval($_POST['hours']);            
            $gas = floatval($_POST['gas']);
            $fuel = floatval($_POST['fuel']);

            // logic to calculate total of miles per day driving by miles / speed = miles per hour
            // calculate total days taken to travel by speed * hours driven daily
            // calculate total fuel needed by miles / fuel efficiency
            // calculate dollars by miles / fuel eff. * gas price       
            $hourstotal = $miles / $speed;
            $days = $hourstotal / $hours;
            $totalfuel = $miles / $fuel;
            $dollars = $miles / $fuel * $gas;
            
            if(!empty($name && $miles && $speed && $hours && $gas && $fuel)) {

            
            echo '
            <div class="box">
            <h2>Hello,  '.$name.'</h2>
            <p>You will be travelling a total of <b> '.number_format($hourstotal, 2).' hours, </b> taking <b>'.number_format($days, 2).' days </b> and you will be using <b>'.$totalfuel.' gallons of gas, </b> costing you <b>$'.$dollars.' </b> dollars!</p>
            </div>
            ';
            }
        }
    } // end server request

    ?>
</body>
</html>