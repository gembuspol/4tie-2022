<?php 
    $connect=mysqli_connect('localhost','root','','wedkowanie');
    if($connect){
        echo "Połączenie działa";
    }else{
        echo "błąd połączenia";
    }
    mysqli_close($connect);
?>