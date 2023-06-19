<div>
    <form method="POST" action="form_registration.php" >
    <p>
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
            
<script src = 'js/dom.js'></script>