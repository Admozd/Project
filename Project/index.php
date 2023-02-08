<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>сайт</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
    
</head>







<body>
    <header class="header" >

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
    </header>





    <section>
        <div class = "container">
            <div class="nav">
                <h2>
                    IT-технологии
                </h2>
                <img class = "icon" src="img/icon.png" alt="газета">
                
            </div>
            
            <input type="button" value="Фон 1" onclick="style_1()" class="btSize_2_1">
            <input type="button" value="Фон 2" onclick="style_2()" class="btSize_2_2"> <br>

            <div class = "bord">
                <p>
                    YouTube стал показывать по пять рекламных роликов у некоторых пользователей
                </p>

                <p class = "text">
                    Читать...
                </p>

                <img class = "photo" src="img/news_1.png" alt="новость_1">
            </div>

           

            <div class = "bord">
                <p>
                    У берегов Норвегии протестируют 135-метровый ветряк с вертикальными лопастями
                    для морских электростанций
                </p>

                <p class = "text">
                    Читать...
                </p>

                <img class = "photo" src="img/news_2.png" alt="новость_2">
            </div>


            <div class = "bord">
                <p>
                    Уральские учёные разрабатывают технологии для коррекции генетических дефектов
                </p>

                <p class = "text">
                    Читать...
                </p>

                <img class = "photo" src="img/news_3.png" alt="новость_3">
            </div>

            

            <div class = "bord">
                <p>
                    «Ростех» разработал мобильный комплекс для поиска угнанных автомобилей
                </p>

                <p class = "text">
                    <a href="index_2.php">
                        Читать...
                    </a>
                </p>

                <img class = "photo" src="img/news_4.png" alt="новость_4">
            </div>

            
            
                <div class="opinion">
                    <form method="POST" action="PHP/form_Opinion.php">
                        <p>
                            
                            Оставьте, пожалуйста, отзыв! <br>
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
            


            <div>
                <form method="POST" action="PHP/form_Authorization.php" >
                <p class="authorization">
                    <b class="red"> Чтобы писать комментарии, войдите в систему.</b><br>
                    <br>
                    <b>Требования формата логина: не менее 6 символов, без специальных символов.</b>
                    <input name = "login" type="text" required size="40" placeholder="Ваш логин" pattern="[A-Za-zА-Яа-яЁё0-9]{6,}"><br>
                    <br>
                    <b>Требования формата пароля: не менее 8 символов, без специальных символов.</b>
                    <input name = "password" type="password" required="" size="40" placeholder="Ваш пароль" pattern="[A-Za-zА-Яа-яЁё0-9]{8,}"><br>
                    <br>
                    <input type="submit" value="Войти" name = "enter_2" onclick=results_2(this.form)>
                    <input type="reset" value="очистить">
                </p>
                </form>
            </div>
            <br>
            <div>
                <form method="POST" action="PHP/form_registration.php" >
                <p class="registration">
                    <b class="red"> Регистрация.</b><br>
                    <br>
                    Придумайте логин: <br>
                    <b>Требования формата логина: не менее 6 символов, без специальных символов.</b>
                    <input name="new_login" type="text" required="" size="40" pattern="[A-Za-zА-Яа-яЁё0-9]{6,}"><br>
                    <br>
                    Придумайте пароль: <br>
                    <b>Требования формата пароля: не менее 8 символов, без специальных символов.</b>
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

            
            
            

            

        </div>
    </section>

    <div class = "mainContent">



    </div>







    <script src = 'js/dom.js'></script>

</body>
</html>