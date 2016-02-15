<?php
require 'format.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game</title>
    <link href="project1.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php echo present_header("STEAMPUNKED"); ?>

<article>
    <section id="image">
        <figure><img src="images/steamsplash2.png" width="400" height="400" alt="Game Board"/>
        </figure>
    </section>
    <section id="room text" style="padding-bottom: 20px;">
        <h1>Welcome to <its font-style="italic">STEAMPUNKED</its></h1>
        <br>
        <h1><a href="gameboard.php">Start Game</a></h1>
        <h1><a href="instructions.php">Instructions</a></h1>
    </section>
</article>
</body>
</html>
