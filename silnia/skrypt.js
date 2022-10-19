function obliczSilnia(){
    let n=document.getElementById("liczbaN").value;
    let i=1;
    let silnia=1;
    while(i!=n){
        i=i+1;
        silnia=silnia*i;
    }
    document.getElementById("wynik").value=silnia;
}