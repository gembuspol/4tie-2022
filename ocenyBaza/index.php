<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie ocen</title>
</head>
<body>
    <header>
        <h1> dodawanie ocen</h1>
    </header>
    <nav>Menu</nav>
    <main>
        <?php
            $polaczenie=mysqli_connect('localhost','root','','4tie');
            if ($polaczenie) 
               {
               
                echo "Połączyliśmy się z bazą danych";
                $zapytanie="SELECT * FROM przedmiot";
                $wynik=mysqli_query($polaczenie,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $przedmioty[]= $wiersz['przedmiot'];
                    $idprzedmiot[]=$wiersz['ID'];
                }
            }
        ?>
        <form method="POST">
            <select>
                <?php
                for ($x=0;$x<count($przedmioty);$x++){
                    echo "<option value=$idprzedmiot[$x]>$przedmioty[$x]</option>";
                }
                    
                ?>
            </select>
        </form>
    </main>
    <footer>
        Stronę wykonał Przemek
    </footer>
</body>
</html>