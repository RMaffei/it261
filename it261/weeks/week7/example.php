<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions: Defining</title>

<body>
  <?php
  function get_area($length, $width)
  {
    $area = $length * $width;
    return array($area);
  }

  function get_volume($length, $width, $height)
  {
    $volume = $length * $width * $height;
    return array($volume);
  }

  $area_array = get_area(10, 5);
  $volume_array = get_volume(10, 5, 8);
  echo "Area: " . $area_array[0] . "<br />";
  echo "Volume: " . $volume_array[1] . "<br />";

  list($area_array, $volume_array) = get_area(20, 15);
  echo "Area: " . $get_area . "<br />";
  echo "Volume: " . $get_volume . "<br />";
  ?>

</body>

</html>