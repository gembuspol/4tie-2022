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
                if(empty($_POST['waga']) || empty($_POST['wzrost'])){
                    $komunikat="";
                }else{
                    $waga=$_POST['waga'];
                    $wzrost=$_POST['wzrost'];
                    $bmi=($waga/($wzrost*$wzrost))*1000;
                    $komunikat="Twoja waga: $waga ; Twój wzrost: $wzrost <br> BMI wynosi: $bmi";
                    $bmi_id=0;
                    if($bmi<19){
                        $bmi_id=1;
                    }else if($bmi<26){
                        $bmi_id=2;
                    }else if($bmi<31){
                        $bmi_id=3;
                    }else{
                        $bmi_id=4;
                    }
                    $data=date("Y-m-d");
                    $insert="INSERT INTO wynik VALUES(null,$bmi_id,'$data',$bmi)";
                    if(mysqli_query($connection,$insert)){
                        echo "Dodano do bazy";
                    }else{
                        echo "Błąd dodawania";
                    }
                }
            }
                    $zapytanie="SELECT id, informacja, wart_min FROM bmi";
                    $wynik=mysqli_query($connection,$zapytanie);
                    while($wiersz=mysqli_fetch_array($wynik)){
                        $id[]=$wiersz["id"];
                        $informacja[]=$wiersz["informacja"];
                        $min[]=$wiersz["wart_min"];
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
            if(isset($komunikat)){
                echo $komunikat;
            }
            
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
                for($x=0;$x<count($id);$x++){
                    echo "<tr>";
                    echo "<th>$id[$x] </th>";
                    echo "<td>$informacja[$x] </td>";
                    echo "<td>$min[$x] </td>";
                    echo "</tr>";
                }
                    

                ?>
            </tbody>
        </table>

    </main>
    <footer>
        Autor: Przemek <a href="kw2.jpg">Wynik działania kwerendy 2</a>
    </footer>
    
</body>
</html>