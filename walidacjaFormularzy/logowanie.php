<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <header>
        Strona logowania
    </header>
        <form method="post" action="#">
            <label for="login">Podaj login</label>
            <input type="text" name="login" id="login">
            <br>
            <label for="pass">Podaj hasło</label>
            <input type="password" name="pass" id="pass">
            <br>
            <label for="pass2">Powtórz hasło</label>
            <input type="password" name="pass2" id="pass2">
            <br>
            <input type="submit">
        </form>
        <?php
            if(empty($_POST['login']) && empty($_POST['pass']) && empty($_POST['pass2'])){
                echo "<p>Wypełniej DANE WSZYSTKIE!!!<p>";
            }else{
                $login=$_POST['login'];
                $pass=$_POST['pass'];
                $pass2=$_POST['pass2'];
                if($pass != $pass2){
                    echo "<p>Hasła są różne - wypełnij ponownie<p>";
                }
                echo "<p>$login,$pass,$pass2</p>";
            }
        ?>
    <footer>
        Stronę wykonał Przemek
    </footer>
</body>
</html>