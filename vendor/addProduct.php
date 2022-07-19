<?php
    $name_product = filter_var(trim($_POST['name_product']),FILTER_SANITIZE_STRING);
    $discription =  filter_var(trim($_POST['discription']),FILTER_SANITIZE_STRING);
    $price_product =  filter_var(trim($_POST['price_product']),FILTER_SANITIZE_STRING);
    $category =  filter_var(trim($_POST['category']),FILTER_SANITIZE_STRING);

    $state_category = filter_var(trim($_POST['state_category']),FILTER_SANITIZE_STRING);
    $path = 'img/products/'. time() .$_FILES['file_photo']['name'];
    if(!move_uploaded_file($_FILES['file_photo']['tmp_name'], '../' .$path)){
       echo('Ошибка!');
    }
    $mysql = new mysqli('localhost','root','root','animalfeed');
    $mysql->query("INSERT INTO `feeds` (`id_product`, `name_product`, `discription_product`, `photo_product`, `price_product`, `category`)
     VALUES (NULL, '$name_product', '$discription', '$path', '$price_product', '$category')");
    header('Location: ../'.$state_category.'');
?>
