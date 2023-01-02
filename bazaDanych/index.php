<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Połączenie z bazą</title>
</head>
<body>
    <header><h1>Połączenie z bazą danych</h1></header>
    <main>
        <h2>Ustawnowienie połączenia</h2>
        <p>$polaczenie=mysqli_connect('adres bazy','uzytkownik','haslo','nazwa bazy')</p>
        <h2>Sprawdzenie czy podłączyliśmy się do bazy</h2>  
        <p>if (!$polaczenie){}</p>
        <h2>Wykonanie zapytania i zapisanie wyniku do zmniennej</h2>
        <p>$zmienna=mysqli_query($polaczenie,'zapytanie SQL')</p>
        <h2>Wyświetlenie wyniku zapytania na stronie</h2>
        <p>while($wiersz=mysqli_fetch_array($zmienna)) <br>
        { <br>
            echo $wiersz['nazwa kolumny']." ".$row['nazwa kolumny drugiej'];<br>
        }
        </p>
        <h2>Zamknięcie połączenia z bazą danych</h2>
        <p>mysqli_close($polaczenie)</p>
        <div>
            <h2>Testowe połączenie z bazą danych</h2>
            <?php
               $polaczenie=mysqli_connect('localhost','root','','ksiegarnia');
               if ($polaczenie) 
               {
                echo "Połączyliśmy się z bazą danych";
                $zapytanie="SELECT * FROM klient";
                $wynik=mysqli_query($polaczenie,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    echo $wiersz['imie']." ".$wiersz['nazwisko']."<br>";
                }
               }
               else
               {
                exit("Błąd połączenia z bazą");
               }
            ?>
        </div>
    </main>
    <footer>
        <p>Stronę wykonał Przemek
    </footer>
</body>
</html>