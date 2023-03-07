<?php

include('config.php');
include('./includes/header.php');

?>


<style>
  <?php include 'css/styles.css'; ?>img {
    width: 300px;
    padding: 10px;
  }

  table {
    border-spacing: 10px;
    border-collapse: separate;
  }

  td {
    padding: 10px;
  }

  h2 {
    text-align: center;
  }
</style>

<div id="wrapper">
  <div id="hero">
  </div>
  <main>
    <h2>Cool Creatures</h2>
    <table>
      <tr>
        <td><img src="images/butterfly.webp" alt="butterfly" class id="img-gallery"></td>
        <td>Butterfly</td>
        <td>Insect</td>
      </tr>
      <tr>
        <td><img src="images/sloth.jpg" alt="sloth" class id="img-gallery"></td>
        <td>Sloth</td>
        <td>Mammal</td>
      </tr>
      <tr>
        <td><img src="images/turtle.jpg" alt="turtle" class id="img-gallery"></td>
        <td>Turtle</td>
        <td>Reptile</td>
      </tr>
      <tr>
        <td><img src="images/bear.jpg" alt="bear" class id="img-gallery"></td>
        <td>Bear</td>
        <td>Mammal</td>
      </tr>
      <tr>
        <td><img src="images/cheetah.webp" alt="cheetah" class id="img-gallery"></td>
        <td>Cheetah</td>
        <td>Mammal</td>
      </tr>
      <tr>
        <td><img src="images/bunny.jpg" alt="bunny" class id="img-gallery"></td>
        <td>Bunny</td>
        <td>Mammal</td>
      </tr>
      <tr>
        <td><img src="images/fox.jpg" alt="fox" class id="img-gallery"></td>
        <td>Fox</td>
        <td>Mammal</td>
      </tr>
    </table>
  </main>
</div>

<?php
include('./includes/footer.php');
