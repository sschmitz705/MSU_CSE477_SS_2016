<?php
function present_header($title) {
    $html = "<header>";
    $html .= "<nav><p><a href=\"welcome.php\">New Game</a> ";
    $html .= "<a href=\"gameboard.php\">Game</a> ";
    $html .= "<a href=\"instructions.php\">Instructions</a></p></nav>";
    $html .= "<figure><img src=\"images/title.png\" width=\"500\" height=\"100\" alt=\"Title\"/></figure>";
    $html .= "</header>";

    return $html;
}?>
