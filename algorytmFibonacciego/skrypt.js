function oblicz(){
    let wyraz=parseInt(document.getElementById("wyraz").value);
    let wynik;
    wynik=fibonacci(wyraz);
    document.getElementById("wynik").value=wynik;
}
function fibonacci(nrWyrazu){
    let wynik=0;
    if(nrWyrazu<=2){
        wynik=1;
    }else{
        wynik=fibonacci(nrWyrazu-1)+fibonacci(nrWyrazu-2);
    }
    return wynik;
}