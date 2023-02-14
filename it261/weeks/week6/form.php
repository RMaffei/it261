<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form 1 - Week 6</title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
      <legend>Contact Rae</legend>
      <label>First Name</label>
      <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">

      <label>Last Name</label>
      <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">

      <label>Email</label>
      <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">

      <label>Gender</label>
      <ul> <!-- coming back to this after doing sticky part -->
        <li>
          <input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked = "checked" '; ?>>Female
        </li>

        <li>
          <input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked = "checked" '; ?>>Male
        </li>

        <li>
          <input type="radio" name="gender" value="neither" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked = "checked" '; ?>>Neither
        </li>
      </ul>
      <label>Phone</label>
      <input type="tel" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
      <label>Favorite Wines</label>
      <ul>
        <!-- add additional wines when adding sticky part -->
        <li>
          <input type="checkbox" name="wines[]" value="cab" <?php if (isset($_POST['wines']) && in_array('cab', $wines)); ?>>Cabernet

          <input type="checkbox" name="wines[]" value="merlot" <?php if (isset($_POST['wines']) && in_array('merlot', $wines)); ?>>Merlot

          <input type="checkbox" name="wines[]" value="syrah" <?php if (isset($_POST['wines']) && in_array('syrah', $wines)); ?>>Syrah

          <input type="checkbox" name="wines[]" value="red" <?php if (isset($_POST['wines']) && in_array('red', $wines)); ?>>Red Blend

          <input type="checkbox" name="wines[]" value="malbec" <?php if (isset($_POST['wines']) && in_array('malbec', $wines)); ?>>Malbec
        </li>
      </ul>
      <label>Regions</label>
      <select name="regions">
        <!-- return to add options after making form sticky -->
        <option value="" NULL <?php if (isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected = "unselected" '; ?>>Select One!</option>
        <option value="nw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected = "unselected" '; ?>>Northwest</option>
        <option value="sw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected = "unselected" '; ?>>Southwest</option>
        <option value="mw" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'mw') echo 'selected = "unselected" '; ?>>Midwest</option>
        <option value="ec" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'ec') echo 'selected = "unselected" '; ?>>East Coast</option>
        <option value="ne" <?php if (isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected = "unselected" '; ?>>Northeast</option>
      </select>
      <label>Comments</label>
      <textarea name="comments"><?php if (isset($_POST['comments'])) echo $_POST['comments']; ?></textarea>

      <label>Privacy</label>
      <ul>
        <!-- come back to add options later -->
        <li>
          <input type="radio" name="privacy" value="yes" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked = "checked"
          '; ?>>Privacy
        </li>
      </ul>
    </fieldset>
  </form>
</body>

</html>