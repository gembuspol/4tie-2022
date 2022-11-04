function oblicz(){
    var a=document.getElementById("liczba").value;
    let sumaCyfr=0;
    let wynik="Nie jest podzielna przez 3";
    while(a>=1){
        sumaCyfr=sumaCyfr+a%10;
        a=Math.floor(a/10);
    }
    if(sumaCyfr%3==0){
        wynik="Jest podzielna przez 3!!!!!!!"
    }
    document.getElementById("wynik").value=wynik;
}
function czyPodzielnaPrzez3(a){
    let wynik="NIE";
    let sumaCyfr=0;
    while(a>=1){
        sumaCyfr=sumaCyfr+a%10;
        a=Math.floor(a/10);
    }
    if(a>9){
        wynik=czyPodzielnaPrzez3(sumaCyfr);
    }else{
        if(sumaCyfr==3 || sumaCyfr==6 || sumaCyfr==9){
            wynik="TAK";
        }
    }
    return wynik;
}