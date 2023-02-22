<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emailable Form - Week 7</title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
      <legend>Order Online</legend>

      <label>First Name</label>
      <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
      <span class="error"><?php echo $first_name_err; ?></span>
      <label>Last Name</label>
      <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
      <span class="error"><?php echo $last_name_err; ?></span>
      <label>Email</label>
      <span class="error"><?php echo $email_err; ?></span>
      <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">

      <label>Order Type</label>
      <ul>
        <li>
          <input type="radio" name="irder_type" value="delivery" <?php if (isset($_POST['order_type']) && $_POST['order_type'] == 'delivery') echo 'checked = "checked" '; ?>>Delivery
        </li>

        <li>
          <input type="radio" name="order_type" value="carryout" <?php if (isset($_POST['order_type']) && $_POST['order_type'] == 'carryout') echo 'checked = "checked" '; ?>>Carryout
        </li>

      </ul>
      <span class="error"><?php echo $order_type_err; ?></span>
      <label>Phone</label>
      <input type="tel" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
      <label>Choose Your Toppings!</label>
      <ul>
        <li>
          <input type="checkbox" name="pizzas[]" value="cheese" <?php if (isset($_POST['pizzas']) && in_array('cheese', $pizzas)) echo 'checked = "checked"   '; ?>>Cheese

          <input type="checkbox" name="pizzas[]" value="pepperoni" <?php if (isset($_POST['pizzas']) && in_array('pepperoni', $pizzas)) echo 'checked = "checked"   '; ?>>Pepperoni

          <input type="checkbox" name="pizzas[]" value="sausage" <?php if (isset($_POST['pizzas']) && in_array('sausage', $pizzas)) echo 'checked = "checked"   '; ?>>Sausage

          <input type="checkbox" name="pizzas[]" value="veggie" <?php if (isset($_POST['pizzas']) && in_array('veggie', $pizzas)) echo 'checked = "checked"   '; ?>>Veggie
        </li>
      </ul>
      <span class="error"><?php echo $pizzas_err; ?></span>
      <label>Choose your Drink!</label>
      <select name="drinks">
        <option value="" NULL <?php if (isset($_POST['drinks']) && $_POST['drinks'] == NULL) echo 'selected = "unselected" '; ?>>Select One!</option>
        <option value="cc" <?php if (isset($_POST['drinks']) && $_POST['drinks'] == 'Coca-Cola') echo 'selected = "unselected" '; ?>>Coca-Cola</option>
        <option value="sp" <?php if (isset($_POST['drinks']) && $_POST['drinks'] == 'Sprite') echo 'selected = "unselected" '; ?>>Sprite</option>
        <option value="dr" <?php if (isset($_POST['drinks']) && $_POST['drinks'] == 'Dr. Pepper') echo 'selected = "unselected" '; ?>>Dr. Pepper</option>
      </select>
      <span class="error"><?php echo $drinks_err; ?></span>
      <label>Additional Instructions</label>
      <textarea name="comments"><?php if (isset($_POST['comments'])) echo $_POST['comments']; ?></textarea>
      <span class="error"><?php echo $comments_err; ?></span>
      <label>Privacy</label>
      <ul>
        <!-- come back to add options later -->
        <li>
          <input type="radio" name="privacy" value="yes" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked = "checked"
          '; ?>>Privacy
        </li>
      </ul>
      <span class="error"><?php echo $privacy_err; ?></span>
      <input type="submit" value="Send it!">
      <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'];    ?>'" value="Reset">
    </fieldset>
  </form>
</body>

</html>