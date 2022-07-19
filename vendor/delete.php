<?php
    $id_delete = filter_var(trim($_POST['id_delete']),FILTER_SANITIZE_STRING);
    $state_category = filter_var(trim($_POST['state_category']),FILTER_SANITIZE_STRING);
    $mysql = new mysqli('localhost','root','root','animalfeed');
    $mysql->query("DELETE FROM `feeds` WHERE `feeds`.`id_product` = '$id_delete'");
    header('Location: ../'.$state_category.'');
?>