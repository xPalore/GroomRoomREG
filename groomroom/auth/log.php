<html>

<head>
    <meta charset="utf-8">
    <title>Чистая Тяфтеля</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="shapka1">
        <center>
            <table height="auto" class="shapka3">
                <tr>
                    <td>
                        <img class="dog" src="../gruming2.svg" width="250" height="250">
                    </td>
                    <td>
                        <h1 class="text1">  Груминг-студия "Грум-Рум"<br> ИС-18 Инкин Ярослав</h1>
            </table>
            <br><br>
            </td>
            </tr>
        </center>
    </div class="shapka1">
    <br><br><br>
    <center>
        <table class="content1">
            <tr>
                <td>


                    <center>
                        <div class="regg">
                            <form action="signin.php" method="post">
                                <label>Логин</lable>
                                    <input name="login" type="text" placeholder="Введите логин">
                                    <br><br>
                                    <label>Пароль</lable>
                                        <input name="password" type="password" placeholder="Введите пароль">
                                        <br><br>
                                        <button class="butt" type="submit">Войти</button>
                                        <p>Впервые у нас?<a class="urll" href="reg.php"> Зарегистрируйтесь!</a></p>
                                        <br><br>
                                        <a class="urll" href="../index.php">Вернуться на главную</a>
                                        <?php
                                        if (isset($_SESSION['message'])) {
                                            echo '    <p class="msg"> ' . $_SESSION['message'] . '</p>';
                                        }
                                        unset($_SESSION['message']);
                                        ?>
                            </form>
                            <br>
                    </center>
                    </div>
        </table>
    </center>
</body>

</html>