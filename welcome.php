<?php
require 'format.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game</title>
    <link href="game.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php echo present_header("STEAMPUNKED"); ?>
<article>
    <section id="cave">
        <figure>
            //<img src="cave-evil-cat.png" width="600" height = "325" alt="cave"/>
        </figure>
    </section>
    <section id="room text" style="padding-bottom: 20px;">
        <h1>Welcome to <its font-style="italic">Stalking the Wampus</its></h1>
        <br>
        <h1><a href="game.php">Start Game</a></h1>
        <h1><a href="instructions.php">Instructions</a></h1>
    </section>
</article>
</body>
</html>
