<?php
session_start(); //запуск сессии
require_once '../conn/connect.php';
//подключение к БД
$login=$_POST['login'];
$password=$_POST['password'];
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login`='$login' and `password`='$password'");
if(mysqli_num_rows($check_user)>0){
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['id_user'] = $user['id_user'];
    $_SESSION['user'] = [
    "id" => $user['id_user'],
    "fio" => $user['fio'],
    "id_role" => $user['id_role']
    ];
    if($_SESSION['user']['id_role']==1){
        header('location: admin.php');//зайти в профиль админа
    }
    else{
    header('location: polz.php');//зайти в профиль пользователя
    }
}
else{
    $_SESSION['message']="Ошибка данных!";//вывод сообщения
    header('location: login.php');//Вернуться к входу
}
mysqli_close($connect);
?>