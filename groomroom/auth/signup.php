<?php
// Инициация запуска сессии
session_start();
// Подключение к Базе Данных:
require_once '../conn/connect.php';
$fio = $_POST['fio'];
$login=$_POST['login'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_confirm=$_POST['password_confirm'];
    // При наличии пустых полей выдавать сообщение об ошибке 
if (empty($fio && $login && $email && $password)) {
    $_SESSION['message']="Не заполнено поле(я)!";
    // Повторная инициация процесса регистрации
    header('location: reg.php');
}
else{
    // Проверка на совпадение паролей
    if($password===$password_confirm){
    $sql = "INSERT INTO users (`id_user`, `fio`, `login`, `email`, `password`, `id_role`) VALUES (NULL, '$fio', '$login', '$email', '$password', '2')";
$res = mysqli_query($connect, $sql) or die ("Ошибка". mysqli_error($connect));
    // Вывод сообщения об успешной регистрации
    $_SESSION['message']="Вы зарегестрировались!";
    // Инициация возврата на страницу входа
    header('location: ../index.php');
}}
if($password!=$password_confirm){
    // В случае неудачной проверки на совпадение паролей выдается ошибка
    $_SESSION['message']="Пароли не совпадают!";
    // Повторная инициация процесса регистрации
    header('location: reg.php');
}
?>
