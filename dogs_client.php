
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/kek_modal.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/16b287f8f5.js"></script>
    <title>AnimalFeed - собачий корм</title>
    <style>
        .produsction{
            min-height: 100vh;
            padding-top: 10vh;
            background: url(img/logo_dog.jpg) no-repeat center top / cover;
            background-attachment:fixed;
        }
        .container_main{
            padding: 30px;
            font-size:30px;
        }
        /* Нужно настроить иконки для сайтбара */
    </style>
</head>
<body>
    <header>
        <div class="disp">
            <p>Компания Animal Feel производит высококачественный корм для домашних животных! </p>
        </div>
       <div class="logo">
            <img src="img/logo.png" class="logo_img">
       </div>
        <div class="info">
            <div class="info_text">
                <p>Телефон горячей линии: <br>+7234234234</p>
            </div>
        </div>
    </header>

    <section class="body">
            <div class="sitebar">
            <a href="index_client.php"> <div id="cat_btn" >Кошки</div></a>
            <a href="dogs_client.php"><div>  Собаки</div></a>
            <a href="birds_client.php"><div>Птицы</div></a>
            <a href="hamsters_client.php"> <div>Грызуны</div></a>
            <a href="insects_client.php"><div>Насекомые</div></a>
            
        </div>
        <div class="produsction">
            <div class="main_box">
                <div class="container_main" id="container_main" style="display:none;">
                    Hello World!
                </div>
                <div class="container_cat" id="container_cat" >
                    <div class="cat_title">
                        <div class="cat_title-text">
                            <h3>Собака - лучший друг человека</h3>
                            <p class="cat_feed">Так не оставьте же его голодным, а угостите вкуснешим кормом из нашего магазина!</p>
                        </div>
                    </div>
                    <div class="search">
                        <label for="">Поиск товара: </label><input type="text" class="search" id="search">
                    </div>
                    <div class="product_box">
                        
                        <?php
                            $con=mysqli_connect('localhost', 'root', 'root', 'animalfeed');
                            $query1 = mysqli_query($con, "SELECT * FROM `feeds` WHERE `category` = 'Собачий корм'");
                            while($row=mysqli_fetch_array($query1)){
                                echo('
                                <div class="product" onClick="OnOff('.$row['id_product'].')">
                                    <div class="title_product">'.$row['name_product'].'</div>
                                    <div class="image"><img src="/'.$row['photo_product'].'" class="image_feed"></div>
                                    <div class="desp_feed">
                                        <span class="price"><b>Цена</b> &nbsp;&nbsp;&nbsp;'.$row['price_product'].' руб.</span><br>'.$row['discription_product'].'
                                    </div>
                                </div>
                               
                                ');
                            };
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container_footer">
            <div class="contact_info">
            </div>
            <div class="main_footer">

            </div>
            <div class="icons">
                <a href="#"><i class="fa fa-brands fa-vk"></i> <span>Ссылка на группу Вконтакте</span></a><br>
                <a href="https://wa.me/p/2866336350154515/79393066690" target="_blank"><i class="fa fa-brands fa-whatsapp"></i> <span>WhatsApp</span></a><br>
                <a href="tel:+79393066690"><i class="fa fa-solid fa-phone"></i> <span>Позвонить по телефону</span></a><br>
            </div>
        </div>
    </footer>
    <div class="overlay js-overlay-modal"></div>
    <script src="js/modal.js"></script>
    <script src="js/OnOff.js"></script>
    <script src="js/live_search.js"></script>
</body>
</html>