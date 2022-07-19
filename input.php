<?php
    session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в кабинет администратора</title>
    <link rel="stylesheet" href="css/input_style.css">
    <style>
        html,body{
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }
        section{
            height: 100vh;
        }
        .now_Height{
            background:#fff;
        }
        .form{
            color: #fff;
            font-size: 19px;
            font-weight: 800;

            width: 500px;
            height: 500px;
            /* background-color: yellow; */
            position: absolute;
            left: 0;
            right: 0;
            margin: 0 auto;
            top:calc(50% - 350px);
        }
    </style>
</head>
<body>
    <section class="now_Height">
        
            <div class="form">
                <img src="img/logo.png" class="logo_for_input" alt="">
                <center><h3>Вход в систему с правами администратора</h3></center>
                <form  action="vendor/signin.php" method="post">
                    <label>Логин</label><input type="text" name="login" id="" placeholder = "Введите логин">
                    <label>Пароль</label><input type="password" name="password" id="" placeholder="Введите пароль">
                    <button type="submit" class="button"> Войти</button>
                    <!-- <p class="regist">У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь!</a></p> -->
                </form>
                <?php
                    if($_SESSION['message']){
                        echo '<p class="msg">' .$_SESSION['message'] .'</p>';
                    }
                    unset( $_SESSION['message'] );
                    ?>
            </div>
    </section>
    
</body>
</html>