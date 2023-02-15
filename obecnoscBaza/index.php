<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obecność baza</title>
</head>
<body>
    <header>
        <h1>
            Dodawanie obecności
        </h1>
    </header>
    <section>
    <?php
            $polaczenie=mysqli_connect('localhost','root','','4tie');
            if ($polaczenie) 
               {
                echo "Połączyliśmy się z bazą danych";
                $zapytanie="SELECT * FROM dane";
                $wynik=mysqli_query($polaczenie,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $imie[]= $wiersz['imie'];
                    $nazwisko[]= $wiersz['nazwisko'];
                    $iddane[]=$wiersz['id'];
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
        <h2>Lista obecności</h2>
        <form method="POST">
        <ol>
        <?php
                for ($x=0;$x<count($imie);$x++){
                    echo "
                    <li>
                        <input type='checkbox' value=$iddane[$x] id='osoba$iddane[$x]' name='osoba$iddane[$x]'>
                        <label for='osoba$iddane[$x]'>$imie[$x] $nazwisko[$x]</label>
                    </li>
                    ";
                }
                    
                ?>
        </ol>
        <br>
        <label for="data">Podaj datę </label>
        <input type="date" name="data" id="data">
        <br>
        <input type="submit" value="Zapisz dane">
        </form>
    </section>
    <footer>Stronę wykonał Przemek</footer>
</body>
</html>