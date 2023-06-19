<div>
        <form method="POST" action="form_Authorization.php" >
        <p>
            <b class="red"> Чтобы писать комментарии, войдите в систему.</b><br>
            <br>
            <b>Требования формата логина: не менее 4 символов, без специальных символов.</b><br>
            <input name = "login" type="text" required size="40" placeholder="Ваш логин" pattern="[A-Za-zА-Яа-яЁё0-9]{4,}"><br>
            <br>
            <b>Требования формата пароля: не менее 4 символов, без специальных символов.</b><br>
            <input name = "password" type="password" required="" size="40" placeholder="Ваш пароль" pattern="[A-Za-zА-Яа-яЁё0-9]{4,}"><br>
            <br>
            <input type="submit" value="Войти" name = "enter_2">
            <input type="reset" value="очистить">
        </p>
        </form>
</div>