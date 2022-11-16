function oblicz(){
    let ilosc=parseInt(document.getElementById("ilosc").value);
    let rodzaj=document.getElementById("wyborPaliwa").value;
    let koszt;
    if(rodzaj=="benzyna95"){
        koszt=ilosc*6.65;
    }else{
        koszt=ilosc*7.10;
    }
    document.getElementById("wynik").value=koszt;
}