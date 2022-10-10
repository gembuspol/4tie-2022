function euklidesOblicz(){
    let liczbaA=parseInt(document.getElementById("liczbaA").value);
    let liczbaB=parseInt(document.getElementById("liczbaB").value);
    while(liczbaA!==liczbaB){
        if(liczbaA>liczbaB){
            liczbaA=liczbaA-liczbaB;
        }else{
            liczbaB=liczbaB-liczbaA;
        }
    }
    document.getElementById("euklidesWynik").value=liczbaA;
}
function obliczNWW(){
    let liczbaA=parseInt(document.getElementById("liczbaNWWA").value);
    let liczbaB=parseInt(document.getElementById("liczbaNWWB").value);
    let x= liczbaA*liczbaB;
    while(liczbaB!==0){
        let c=liczbaA%liczbaB;
        liczbaA=liczbaB;
        liczbaB=c;
    }
    let wynik=x/liczbaA;
    document.getElementById("nwwWynik").value=wynik;
}