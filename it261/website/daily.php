<?php
include('./includes/header.php');
?>
<?php 
date_default_timezone_set('America/Los_Angeles');
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// I decided to leave my alt tags as the days but could also list them as the animals in the photos
switch($today) {
        case 'Friday' :
            $day = '<h2>TGIF! It\'s time to relax. :)</h2>';
            $pic = "sloth.jpg";
            $alt = 'Friday';
            $content = '<p>"Don\'t watch the clock; do what it does. Keep going." <b>-Sam Levenson</b></p>';
            echo "<body style='background-color:blue'>";
            break;

        case 'Saturday' :
            $day = '<h2>Saturdays are meant for relaxation.</h2>';
            $pic = 'bunny.jpg';
            $alt = 'Saturday';
            $content = '<p>"I don\'t want to look back. I want to keep going forward, I still have something to say to people." <b>-Joe Strummer</b></p>';
            echo "<body style='background-color:red'>";
            break;

        case 'Sunday' :
            $day = '<h2>Self-Care Sunday!</h2>';
            $pic = 'cheetah.webp';
            $alt = 'Sunday';
            $content = '<p>"I can\'t change the direction of the wind, but I can adjust my sails to always reach my destination." <b>-Jimmy Dean</b></p>';
            echo "<body style='background-color:purple'>";
            break;

        case 'Monday' :
            $day = '<h2>Mondays don\'t have to be so bad!</h2>';
            $pic = 'turtle.jpg';
            $alt = 'Monday';
            $content = '<p>"As long as you keep going, you\'ll keep getting better. And as you get better, you gain more confidence. That alone is success." <b>-Tamara Taylor</b></p>';
            echo "<body style='background-color:pink'>";
            break;

        case 'Tuesday' :
            $day = '<h2>We\'ve all got a journey! Start your Tuesday off right.</h2>';
            $pic = 'butterfly.webp';
            $alt = 'Tuesday';
            $content = '<p>"There is nothing in a caterpillar that tells you it\'s going to be a butterfly." <b>-R. Buckminster Fuller</b> </p>';
            echo "<body style='background-color:green'>";
            break;

        case 'Wednesday' :
            $day = '<h2>Stand back up, you\'re halfway there! Wednesdays are the ultimate test.</h2>';
            $pic = 'bear.jpg';
            $alt = 'Wednesday';
            $content = '<p>"If you fell down yesterday, stand up today." <b>-H.G Wells</b></p>';
            echo "<body style='background-color:orange'>";
            break;

        case 'Thursday' :
            $day = '<h2>It\'s already Thursday!? It\'s almost the end of the week...</h2>';
            $pic = 'fox.jpg';
            $alt = 'Thursday';
            $content = '<p>"Never wear anything that panics the cat." <b>-P.J O\'Rourke</b></p>';
            echo "<body style='background-color:yellow'>";
            break;
}


?>
    <div id="wrapper">
        <div id="hero">
        <img src="images/twelve.jpg" alt="Twelve is greater than 3">
        </div>
        <!-- end of hero-->
        <main>
            <h1>Here I will display my HW3 Switch:</h1>
<?php
echo $day;
?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content; ?>
<h2>Check out other motivational quotes to get you through the week:</h2>
<ul>
    <li><a href="daily.php?today=Sunday">Sunday</a></li>
    <li><a href="daily.php?today=Monday">Monday</a></li>
    <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a href="daily.php?today=Thursday">Thursday</a></li>
    <li><a href="daily.php?today=Friday">Friday</a></li>
    <li><a href="daily.php?today=Saturday">Saturday</a></li>
</ul>
            <h2></h2>
            <p>
                In hendrerit gravida rutrum quisque non tellus orci ac. Urna id volutpat lacus laoreet non curabitur. Proin nibh nisl condimentum id venenatis a condimentum vitae. Massa tincidunt nunc pulvinar sapien et ligula. Egestas congue quisque egestas diam in arcu cursus. Nibh sed pulvinar proin gravida. Urna et pharetra pharetra massa massa ultricies mi quis hendrerit. Dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Nullam non nisi est sit amet facilisis. In aliquam sem fringilla ut morbi tincidunt augue interdum. Tristique senectus et netus et malesuada fames ac turpis. At tellus at urna condimentum mattis pellentesque. Sed viverra ipsum nunc aliquet bibendum. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Purus sit amet luctus venenatis lectus magna fringilla urna. A diam maecenas sed enim ut sem. Non tellus orci ac auctor augue mauris. Mattis aliquam faucibus purus in massa tempor nec. Cursus eget nunc scelerisque viverra mauris.
            </p>
            <h2>Second Headline</h2>
            <p>
                Amet nulla facilisi morbi tempus iaculis urna id. Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Semper auctor neque vitae tempus quam. Neque aliquam vestibulum morbi blandit. Quam adipiscing vitae proin sagittis. Adipiscing bibendum est ultricies integer quis auctor elit sed vulputate. Vehicula ipsum a arcu cursus vitae congue. Pulvinar etiam non quam lacus. In massa tempor nec feugiat. Lectus mauris ultrices eros in cursus. Habitant morbi tristique senectus et netus et. Dolor morbi non arcu risus quis varius quam quisque id. Senectus et netus et malesuada. Velit aliquet sagittis id consectetur purus. Id porta nibh venenatis cras sed. Quam nulla porttitor massa id neque aliquam vestibulum morbi blandit. Bibendum at varius vel pharetra vel.
            </p>
        </main>

        <aside>
            <h3>This is Headline #3 in the Aside</h3>
            <p>
                In nibh mauris cursus mattis molestie. Aliquam malesuada bibendum arcu vitae elementum. Sem fringilla ut morbi tincidunt augue. Maecenas sed enim ut sem viverra aliquet eget sit amet. Justo nec ultrices dui sapien eget. Vel orci porta non pulvinar neque laoreet suspendisse interdum. Pharetra et ultrices neque ornare aenean. Nulla posuere sollicitudin aliquam ultrices sagittis orci a. Massa tincidunt dui ut ornare. Quisque non tellus orci ac auctor augue mauris. Vitae justo eget magna fermentum iaculis eu non. Duis convallis convallis tellus id interdum velit laoreet id. In tellus integer feugiat scelerisque varius morbi enim nunc. Amet consectetur adipiscing elit ut aliquam purus sit. Orci ac auctor augue mauris augue neque gravida. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Enim lobortis scelerisque fermentum dui. Scelerisque eu ultrices vitae auctor. Nibh tellus molestie nunc non blandit massa enim nec. Montes nascetur ridiculus mus mauris vitae ultricies leo integer malesuada.
            </p>
        </aside>
    </div>
<?php 
include('./includes/footer.php'); 