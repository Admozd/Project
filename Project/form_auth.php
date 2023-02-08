            <div>
                <form method="POST" action="PHP/form_Authorization.php" >
                <p>
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


<script src = 'js/dom.js'></script>