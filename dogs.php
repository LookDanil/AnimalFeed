<?php
    session_start();
?>
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
    <title>AnimalFeed</title>
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
            <a href="index.php"> <div id="cat_btn" >Кошки</div></a>
            <a href="dogs.php"><div> Собаки</div></a>
            <a href="birds.php"><div>Птицы</div></a>
            <a href="hamsters.php"> <div>Грызуны</div></a>
            <a href="insects.php"><div>Насекомые</div></a>
            
        </div>
        <div class="produsction">
            <div class="main_box">
                <div class="container_main" id="container_main" style="display:none;">
                    Hello World!
                </div>
                <div class="container_cat" id="container_cat" >
                <center><p class="hello_admin">Добро пожаловать на интернет портал,<?= $_SESSION['admin']['full_name']?>!</p></center>
                    <div class="cat_title">
                        <div class="cat_title-text">
                            <h3>Собака - лучший друг человека</h3>
                            <p class="cat_feed">Так не оставьте же его голодным, а угостите вкуснешим кормом из нашего магазина!</p>
                        </div>
                        <div class="cat_title-button">
                            <div class="add_product js-open-modal" data-modal="1">
                                Добавить продукт
                            </div>
                            <div class="modal" data-modal="1">
                                <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
                                <h3 class="modal_title">Добавить продукт</h3>
                                <div class="modal_disp">
                                    <form action="vendor/addProduct.php" method="post" enctype="multipart/form-data">
                                    <input  class = "name_product input_type" type="text" name="state_category" id="#" value="dogs.php" style="display:none;"> 
                                        <div class="discription_box">
                                            <p class="label_type">Название товара: </p>
                                            <input  class = "name_product input_type" type="text" name="name_product" id="#"> 
                                        </div>
                                        <div class="discription_box"> 
                                            <p class="label_type">Описание товара: </p>
                                            <textarea  class="input_type discription_product" name="discription" id="#" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="discription_box"> 
                                            <p class="label_type">Фотография товара: </p>
                                            <div class="input__wrapper">
                                                <input name="file_photo" type="file" id="input__file" class="input input__file" multiple="">
                                                    <label for="input__file" class="input__file-button">
                                                        <span class="input__file-icon-wrapper"><img class="input__file-icon" src="img/add.svg" alt="Выбрать файл" width="25"></span>
                                                        <span class="input__file-button-text">Выберите файл</span>
                                                    </label>
                                            </div>
                                        </div>
                                        <div class="discription_box"> 
                                            <p class="label_type">Цена товара:</p>
                                            <input type="number" class="input_type" name="price_product" id="">
                                        </div>

                                        <div class="discription_box"> 
                                            <p class="label_type">Категория товара:</p>
                                            <select name = "category" class="input_type category">
                                                    <?php
                                                        $con=mysqli_connect('localhost', 'root', 'root', 'animalfeed');
                                                        $query1 = mysqli_query($con, "SELECT * FROM `category`");
                                                        while($row=mysqli_fetch_array($query1)){
                                                            echo('<option>'.$row['name_category'].'</option>');
                                                        }
                                                    ?>
                                            </select>
                                        </div>

                                        <div class="discription_box"> 
                                            <button type="submit" class="add"> Добавить товар</button>
                                        </div>
                                        
                                    </form>

                                </div>
                            </div>
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
                                    <form action="vendor/delete.php" method="post" >
                                        <input   type="text" name="state_category"  value="dogs.php" style="display:none;"> 
                                        <input   type="text"  value = "'.$row['id_product'].'" name="id_delete" style="display:none;"> 
                                        <button class="delete" id="'.$row['id_product'].'"  type="submit" style="display:none;">Удалить</button>
                                    </form>
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