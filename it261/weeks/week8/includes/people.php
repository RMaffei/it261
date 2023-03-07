<?php
include('config.php');
include('./includes/header.php');


$sql = 'SELECT * FROM people';

// connect to database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

// asking if the number of rows is greater than 0

if (mysqli_num_rows($result) > 0) {

  while ($row = mysqli_fetch_assoc($result)) {

    echo '
    <h2>Information about: ' . $row['first_name'] . '</h2>
    <ul>
    <li><b>First Name:</b> ' . $row['first_name'] . ' </li>
    <li><b>Last Name:</b> ' . $row['last_name'] . ' </li>
    <li><b>Birth Date:</b> ' . $row['birthdate'] . ' </li>
    </ul>
    <p>For more informaiton about ' . $row['first_name'] . ', click <a href="people-view.php?id=' . $row['people_id'] . ' ">here</a> </p>
    ';
  } // end of while loop
  // end of if number if greater than 0 -- row
} else {
  echo 'Nobody is home!';
}

@mysqli_free_result($result);

@mysqli_close($iConn);

?>
<aside>
  <h3>I will display random images here</h3>
</aside>

<?php
include('./includes/footer.php');
