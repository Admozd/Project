<?php
session_start();
require("db_connect.php");
require("addFile.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/media.css">
</head>
<body>
    
    <header class="header">
        <div class="container">
            <!-- header nav -->
            <div class="header-nav">
                <a href="#!" class="logo">ВЕСТИ</a>


                <nav id="nav" class="nav">
                    <ul class="nav-list">
                        <li class="nav-item"> <a href="#!" class="nav-link">Новости</a> </li>
                        <li class="nav-item"><a href="#!" class="nav-link">Спорт</a></li>
                        <li class="nav-item"><a href="#!" class="nav-link">О сервисе</a></li>
                        <li class="nav-item"><a href="#!" class="nav-link">Контакты</a></li>
                    </ul>
                    <button id="nav-btn" class="nav-button">
                        <img id="nav-btn-img" src="./img/NAV.svg" alt="Nav button">
                    </button>
                </nav>
            </div>
        </div>
    </header>

    <section class = "title">
        <div class="container">
            <h1>IT-технологии</h1>
                
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="services-row">
                <?php
                    $result = $conn->query("SELECT id, header, text, date, image FROM news.news");
                    while ($row = $result->fetch()) {
                        ?>
                
                
                        <div class="service-card">
                            
                            <img class="service-card-img" src="<?=$row['image']?>" width = "184px" height = "120px">
                            <p><?=$row['header']?></p>
                        </div>
                        
                        <?php
                        $id = $row['id'];
                    }
                ?>




                <!--<div class="service-card">
                    <img class = "service-card-img" src="./img/news_1.png" alt="">
                    <p>YouTube стал показывать по пять рекламных роликов у некоторых пользователей</p>
                    
                </div>

                <div class="service-card">
                    <img class = "service-card-img" src="./img/news_2.png" alt="">
                    <p>У берегов Норвегии протестируют 135-метровый ветряк с вертикальными лопастями
                        для морских электростанций</p>
                    
                </div>

                <div class="service-card">
                    <img class = "service-card-img" src="./img/news_3.png" alt="">
                    <p>Уральские учёные разрабатывают технологии для коррекции генетических дефектов</p>
                    
                </div>

                <div class="service-card">
                    <img class = "service-card-img" src="./img/news_4.png" alt="">
                    <p>«Ростех» разработал мобильный комплекс для поиска угнанных автомобилей</p>
                    
                </div>-->


            </div>
        </div>
    </section>

    <div class="container">
        <p>Добавить новость</p> <br>
        <form action="/addFile.php" method = "post" autocomplete = "off" enctype = "multipart/form-data">
                <div>
                    <p>Заголовок новости</p>
                    <textarea name="header" class="text_area" cols="50" rows="3"></textarea>
                </div>
                <div>
                    <p>Текст новости</p>
                    <textarea name="text" class="text_area" cols="70" rows="7"></textarea>
                </div>
                <div>
                    <p>Дата новости</p>
                    <input type="text" name="date" required value=""> 
                </div>
                <br>
                <p>Фото</p>
                <input type="file" name = "file">
                <button type = "submit" name = "submit">Добавить</button>
                
                
        </form>
    </div>
    





    <div class="container">
        <form method="POST" action="form_Opinion.php">
            <p>
                
                <br> Оставьте, пожалуйста, отзыв! <br>
                <br>
                <b>Какую оценку поставите нашему сервису?</b><br>
                    <input type="radio" name = "rating" required="" value="5"> 5 <br>
                    <input type="radio" name = "rating" value="4"> 4 <br>
                    <input type="radio" name = "rating" value="3"> 3 <br>
                    <input type="radio" name = "rating" value="2"> 2 <br>
                    <input type="radio" name = "rating" value="1"> 1 <br>
                    
                    <input type="button" value="Добавить" onclick="add()" class="btSize">
                    <input type="button" value="Удалить" onclick="del()" class="btSize"> <br>
                    
                    <div id="2">
                        <div id="1">
                            <br>
                            <input type="submit" name="enter" value="отправить" onclick=results_1(this.form)>
                            <input type="reset" value="очистить">
                        </div>
                        
                    </div>

                    
                    
                          
                        
            </p>
        </form>
    </div>
    <br>
    <div class = "container">
        <?php
            if (isset($_SESSION['user']))
            {
                echo ($_SESSION['user']).'  ';
                echo ("<a href='form_Authorization.php?logout=1'>Выйти</a>");
            }
            else echo ("<a href='index.php?page=login'>Войти в систему</a>");
        ?>
    </div>
    
    
    <div class="container">
        <?php
        
        require ("message.php");
        if (isset($_GET['page']))  {
            switch ($_GET['page']) {
                case 'login':
                    require ('login.php');
                    break;
                default:
                    break;
            }
        }
        unset($_SESSION['message']);
        ?>
    </div>
    
    <div class = "container PAD">
        <form method="POST" action="form_registration.php" >
        <p>
            <b class="red"> Регистрация.</b><br>
            <br>
            Придумайте логин: <br>
            <b>Требования формата логина: не менее 6 символов, без специальных символов.</b><br>
            <input name="new_login" type="text" required="" size="40" pattern="[A-Za-zА-Яа-яЁё0-9]{6,}"><br>
            <br>
            Придумайте пароль: <br>
            <b>Требования формата пароля: не менее 8 символов, без специальных символов.</b><br>
            <input name="new_password_1" type="password" required="" size="40" pattern="[A-Za-zА-Яа-яЁё0-9]{6,}"><br>
            <br>
            Введите пароль ещё раз: <br>
            <input name="new_password_2" type="password" required="" size="40" pattern="[A-Za-zА-Яа-яЁё0-9]{6,}"><br>
            <br>
            <b>К какой возрастной категории вы относитесь?</b><br>
            
            <select name="Age[]">
                <option disabled>Возрастная категория</option>
                <option value="1">менее 18</option>
                <option value="2">18-30</option>
                <option value="3">31-50</option>
                <option value="4">51-70</option>
                <option value="5">71 и более</option>


            </select><br>

            <br>
            <input name="registration" type="submit" value="Зарегистрироваться" onclick=results_3(this.form)>
            <input type="reset" value="очистить">
            <br>
            <br>
        </p>
        </form>
    </div>


    <script src = "./js/dom.js"></script>
    <script src = "./js/main.js"></script>
</body>
</html>