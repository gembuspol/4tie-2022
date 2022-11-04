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