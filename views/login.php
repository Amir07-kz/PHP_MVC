<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Войти в систему</title>
</head>
<body>
<div class="center">
    <h1><img src="https://www.pngjoy.com/pngl/344/6419113_minnesota-twins-logo-football-symbol-hd-png-download.png" style="width: 100px" alt="42"></h1>
    <form action="http://localhost:8080/loginController" method="post">
        <div class="txt_field">
            <input type="text" name="email" placeholder="E-mail" />
            <span></span>
            <label>Email пользователя</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password" placeholder="Password" />
            <span></span>
            <label>Пароль</label>
        </div>
        <input type="submit" name="login_submit" value="Log me in" />
    </form>
    <div class="signup_link">Новый пользователь?
        <a class="signup_link" onClick='location.href="/registration"'>Зарегистрироваться</a>
    </div>
    <div class="pass">Как жаль, забыл пароль?</div>
</div>
</body>
<style>
    <?php
        include 'css/loginPage.css'
    ?>
</style>
</html>