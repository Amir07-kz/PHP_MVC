<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
<div class="center">
    <h1>Регистрация</h1>
    <div id="login-box" class="txt_field">
        <form action="http://localhost:8080/registrationController" method="post">
            <input class="txt_field" type="text" name="username" placeholder="Username"/>
            <input class="txt_field" type="text" name="email" placeholder="E-mail"/>
            <input class="txt_field" type="password" name="password" placeholder="Password"/>
            <input class="txt_field" type="password" name="password2" placeholder="Enter your password again"/>
            <input class="txt_field" type="submit" name="signup_submit" value="Sign up"/>
        </form>
    </div>
</div>
</body>

<style>
    <?php
        include 'css/registration.css'
    ?>
</style>
</html>