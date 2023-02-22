<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie tematów lekcji</title>
</head>
<body>
    <header>
        Dodawanie tematów lekcji
    </header>
    <section>
    <?php
            $polaczenie=mysqli_connect('localhost','root','','4tie');
            if ($polaczenie) 
               {
                echo "Połączyliśmy się z bazą danych";
                $zapytanie="SELECT * FROM nauczyciel";
                $wynik=mysqli_query($polaczenie,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $imie[]= $wiersz['imie'];
                    $nazwisko[]= $wiersz['nazwisko'];
                    $iddane[]=$wiersz['id'];
                }
                $zapytanie="SELECT * FROM przedmiot";
                $wynik=mysqli_query($polaczenie,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $przedmioty[]= $wiersz['przedmiot'];
                    $idprzedmiot[]=$wiersz['ID'];
                }
                echo "<br>";
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $idnauczyciel=$_POST['nauczyciel'];
                    $idprzedmiot1=$_POST['idprzedmiot'];
                    $data=$_POST['data'];
                    $nrlekcji=$_POST['nrLekcji'];
                    $temat=$_POST['temat'];
                   
                    $insert="INSERT INTO lekcja VALUES(null, '$idprzedmiot1','$idnauczyciel','$data','$nrlekcji','$temat')";
                        if(mysqli_query($polaczenie,$insert)){
                            echo "Dodano do bazy";
                        }
                        else{
                            echo "Bład";
                        }
                    }                   

                }
            
            
            mysqli_close($polaczenie);

        ?>
        <form method="POST">
            <label for="nauczyciel">Wybierz nauczyciela</label>
            <select name="nauczyciel" id="nauczyciel">
            <?php
                for ($x=0;$x<count($imie);$x++){
                    echo "
                    <option value=$iddane[$x] id='osoba$iddane[$x]' name='osoba$iddane[$x]'>
                        $imie[$x] $nazwisko[$x]
                        </option>
                    ";
                }
                    
            ?>
            </select>
            <br>
            <label for="idprzedmiot">Wybierz przedmiot</label>
            <select name="idprzedmiot">
                <?php
                for ($x=0;$x<count($przedmioty);$x++){
                    echo "<option value=$idprzedmiot[$x]>$przedmioty[$x]</option>";
                }
                    
                ?>
            </select>
            <br>
            <label for="data">Wybierz datę</label>
            <input type="date" name="data" id="data">
            <br>
            <label for="nrLekcji">Wybierz numer lekcji</label>
            <select name="nrLekcji" id="nrLekcji">
                <?php 
                   for($nrLekcji=0;$nrLekcji<=13;$nrLekcji++){
                    echo "<option value=$nrLekcji>$nrLekcji</option>";
                   } 
                ?>
            </select>
            <br>
            <label for="temat">Podaj temat</label>
            <input type="text" name="temat" id="temat">
            <br>
            <input type="submit" value="zapisz do bazy">
        </form>

    </section>
    <footer>
        Stronę wykonał Przemek
    </footer>
</body>
</html>