<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twój wskaźnik BMI</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <?php
        $connection=mysqli_connect('localhost', 'root','','egzamin');
        if($connection){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(isset($_POST['waga']) && isset($_POST['wzrost'])){
                    $waga=$_POST['waga'];
                    $wzrost=$_POST['wzrost'];
                    $bmi=$waga/($wzrost*$wzrost)*10000;
                    $komunikat="Twoja waga: $waga ; Twój wzrost: $wzrost <br> BMI wynosi: $bmi";
                }
                
            }
        }else{
            echo "Brak połączenia";
        }
        mysqli_close($connection);
    ?>
    <section class="baner">
        <h2>Oblicz wskaźnik BMI</h2>
    </section>
    <section class="logo">
        <img src="wzor.png" alt="liczymy BMI">
    </section>
    <section class="lewy">
        <img src="rys1.png" alt="zrzuć kalorie!">

    </section>
    <section class="prawy">
        <h1>Podaj dane</h1>
        <form method="POST">
            <label for="waga">Waga:</label>
            <input type="number" name="waga" id="waga"><br>
            <label for="wzrost">Wzrost[cm]:</label>
            <input type="number" name="wzrost" id="wzrost"><br>
            <input type="submit" value="Licz BMI i zapisz wynik">
            <br>
            <?php
            echo $komunikat;
            ?>
        </form>

    </section>
    <main>
        <table>
            <thead>
                <tr>
                    <th>lp.</th>
                    <th>Interpretacja</th>
                    <th>zaczyna się od ...</th>
                </tr>
            </thead>
            <tbody>
                <?php

                ?>
            </tbody>
        </table>

    </main>
    <footer>
        Autor: Przemek <a href="kw2.jpg">Wynik działania kwerendy 2</a>
    </footer>
    
</body>
</html>