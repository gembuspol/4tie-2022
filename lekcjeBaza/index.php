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
                    $data=$_POST['data'];
                    $czyObecny=0;
                    for ($x=0;$x<count($imie);$x++){
                        if(isset($_POST["osoba$iddane[$x]"])){
                            $idosoba[$x]=$_POST["osoba$iddane[$x]"];
                            $czyObecny=1;

                        }
                        $insert="INSERT INTO obecnosc VALUES(null, '$data','$iddane[$x]','$czyObecny')";
                        if(mysqli_query($polaczenie,$insert)){
                            echo "Dodano do bazy";
                        }
                        else{
                            echo "Bład";
                        }
                        $czyObecny=0;
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
            </select>
        </form>

    </section>
    <footer>
        Stronę wykonał Przemek
    </footer>
</body>
</html>