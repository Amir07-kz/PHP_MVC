<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todoes</title>
</head>
<body>
<header>
    <div class="center">
        <div class="buttons">
            <form action="http://localhost:8080/registration" class="signup_link">
                <input type="submit" name="signup_move_submit" value="      Зарегистрироваться  " />
            </form>
            <form action="http://localhost:8080/login" class="signup_link">
                <input type="submit" name="login_move_submit" value="  Войти  " />
            </form>
        </div>
    </div>
    <footer>
        <div class="content">
            <div class="left box">
                <div class="upper">
                    <div class="topic">About us</div>
                    <p>Todoes</p>
                </div>
                <div class="lower">
                    <div class="topic">Contact us</div>
                    <div class="phone">
                        <a href="#"><i class="fas fa-phone-volume"></i>+x xxx xxx xxx</a>
                    </div>
                    <div class="email">
                        <a href="#"><i class="fas fa-envelope"></i>42praktica@mail.com</a>
                    </div>
                </div>
            </div>
            <div class="middle box">
                <div class="topic">Our Services</div>
                <div><a href="#">Web Design, Development</a></div>
            </div>
            <div class="right box">
                <div class="topic">Subscribe us</div>
                <form action="#">
                    <input type="text" placeholder="Enter email address">
                    <input type="submit" name="" value="Send">
                    <div class="media-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </footer>
</header>
</body>
<style>
    <?php
       include 'css/welcome.css'
    ?>
</style>
</html>