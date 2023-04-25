<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>сайт</title>
    <script src = 'js/dom.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">    
</head>







<body>
    <div class="header" id="header" >

        <div class = "container">
            <div class = "nav">
                
                <ul class = "menu">
                    <li>
                        <h1>
                            ВЕСТИ
                        </h1>
                    </li>

                    <li>
                        <a href="#">
                            Новости
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Спорт
                        </a>
                    </li> 
                </ul>
            </div>
        </div>
    </div>





        <div class="section" id="mainContent">
            <div class = "container">
                <div class="nav">
                    <h2>
                        IT-технологии
                    </h2>
                    <img class = "icon" src="img/icon.png" alt="газета">
                </div>
                

                <div class = "bord_1">
                    <p class="text_font">
                        «Ростех» разработал мобильный комплекс для поиска угнанных автомобилей
                    </p>

                    <p class="text_1">
                        Госкорпорация «Ростех» разработала мобильный комплекс для выявления угнанных автомобилей в транспортном потоке. Комплекс «Розыск-Nano» устанавливается в патрульном автомобиле и в режиме реального времени проверяет номера автомобилей по базам данных. Об этом сообщила пресс-служба компании.

                        В «Розыск-Nano» входит модуль видеонаблюдения, который устанавливается в патрульном автомобиле, планшет и программное обеспечение. После считывания номера автомобиля комплекс отправляет запрос в базы розыска и сообщает о нахождении автомобиля, если тот значится угнанным.

                        «Решение позволит мгновенно выявлять в транспортном потоке автомобили, находящиеся в угоне, разыскиваемые судебными приставами или снятые с регистрационного учета. За счет того что система распознает номерные знаки на большом расстоянии, у экипажа ДПС есть время на принятие решения об остановке транспортного средства»,— цитирует пресс-служба слова Юрия Валова, генерального директора завода «Метеор», который занимался созданием комплекса.

                        В пресс-службе добавили, что пилотную эксплуатацию собираются запустить в 2022 году в Волгоградской области.
                    </p>


                    <img class = "photo" src="img/news_4.png" alt="новость_1">
                </div>
            </div>

        
        </div>



        <div>
            <div id="objects">
                
                <a href="index_2.php?C=1" >

                    <div id="margin_objects">
                        Оставьте отзыв!
                    </div>
                </a>
                
                <a href="index_2.php?C=2">
                    <div id="margin_objects">
                        Войти в систему
                    </div>
                </a>
                
                <a href="index_2.php?C=3">
                    <div id="margin_objects">
                        Зарегистрироваться
                    </div>
                </a>
                
                

            </div>


            <div id="content">
            <?php
                $C = $_GET["C"];
                switch ($C) {
                    case "1": include("form_opin.php"); break;
                    case "2": include("form_auth.php"); break;
                    case "3": include("form_registr.php"); break;
                }
            ?>
            

            </div>
        </div>


</body>
</html>