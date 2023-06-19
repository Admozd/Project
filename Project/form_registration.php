<?php




if ($_POST['registration']) 
{
    echo($_POST['new_login']);
    echo(", you have successfully registered!<br>");
    
    if(isset($_POST['Age'])) {
        echo ("Your age category: ");
        foreach ($_POST['Age'] as $age)
        switch ($age) {
            case "1":
                echo "less than 18.<br>"; break;
            case "2":
                echo "18-30.<br>"; break;
            case "3":
                echo "31-50.<br>"; break;
            case "4":
                echo "51-70.<br>"; break;
            case "5":
                echo "more than 71.<br>"; break;
            
        }
    
    }
}


?>