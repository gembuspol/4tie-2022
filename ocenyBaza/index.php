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
                $zapytanie="SELECT * FROM dane";
                $wynik=mysqli_query($polaczenie,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $imie[]= $wiersz['imie'];
                    $nazwisko[]= $wiersz['nazwisko'];
                    $iddane[]=$wiersz['id'];
                }
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $osoba=$_POST['idosoba'];
                    $przedmiot=$_POST['idprzedmiot'];
                    $ocena=$_POST['ocena'];
                    $insert="INSERT INTO oceny(idosoby,idprzedmiotu,ocena) VALUES('$osoba','$przedmiot','$ocena' )";
                
                    if(mysqli_query($polaczenie,$insert)){
                        echo "Dodano do bazy";
                    }
                    else{
                        echo "Bład";
                    }
                }
            }
        ?>
        <form method="POST">
            <label for="idprzedmiot">Wybierz przedmiot</label>
            <select name="idprzedmiot">
                <?php
                for ($x=0;$x<count($przedmioty);$x++){
                    echo "<option value=$idprzedmiot[$x]>$przedmioty[$x]</option>";
                }
                    
                ?>
            </select>
            <br>
            <label for="idosoba">Wybierz osobę</label>
            <select name="idosoba">
                <?php
                for ($x=0;$x<count($imie);$x++){
                    echo "<option value=$iddane[$x]>$imie[$x] $nazwisko[$x]</option>";
                }
                    
                ?>
            </select>
            <br>
            <label for="ocena">Podaj ocenę</label>
            <input type="number" name="ocena">
            <br>
            <input type="submit" value="Zapisz do bazy">
            <output name="wynik"></output>
        </form>
    </main>
    <footer>
        Stronę wykonał Przemek
    </footer>
</body>
</html>