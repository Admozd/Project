<?php
require("db_connect.php");
if (isset($_POST["submit"])) {
    $header = $_POST["header"];
    $text = $_POST["text"];
    $date = $_POST["date"];
    $result = $conn->query("SELECT max(id) FROM news.news");
    if ($row = $result->fetch()) {
        $id = $row['max']+1;
    }
    
    if (!empty($_FILES['file'])) {
        $file = $_FILES['file'];
        $name = $file['name'];
        $pathFile = __DIR__ .'/img/'.$name;
    
        if (!move_uploaded_file($file['tmp_name'], $pathFile)) {
            echo 'Файл не загружен';
        }
    }

    $result = $conn->query("INSERT INTO news.news (id, header, text, date, image) VALUES('$id','$header','$text','$date', 'img/$name')");
    
    header("Location: index.php");
}



?>