<?php


if ($_POST["enter"]) {
    switch($_POST['rating']) {
        case '5':
            echo "You gave 5, thanks for rating!.<br>"; break;
        case '4':
            echo "You gave 4, thanks for rating!.<br>"; break;
        case '3':
            echo "You gave 3, thanks for rating!.<br>"; break;
        case '2':
            echo "You gave 2, thanks for rating!.<br>"; break;
        case '1':
            echo "You gave 1, thanks for rating!.<br>"; break;
        
    }
    
    if ($_POST["comment"]!='') 
    {
    echo("Your comment: <br>");
    echo($_POST["comment"]);
    }
    
    
}

?>