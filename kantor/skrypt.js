function oblicz(){
    let kwota=document.getElementById("kwota").value;
    let waluta=document.getElementById("waluta").value;
    let tranzakcja=document.getElementById("tranzakcja").value;
    let wynik=0;
    if(tranzakcja=="kupno"){
        if(waluta=="euro"){
            wynik=kwota*4.691;
        }else if(waluta=="funt"){
            wynik=kwota*5.383;
        }else{
            wynik=kwota*4,52;
        }
    }else{
        if(waluta=="euro"){
            wynik=kwota*4.72;
        }else if(waluta=="funt"){
            wynik=kwota*5.423;
        }else{
            wynik=kwota*4,541;
        }
    }
    document.getElementById("wynik").value=wynik;
}
function oblicz2(){
    let kwota=document.getElementById("kwota").value;
    let waluta=document.getElementById("waluta").value;
    let tranzakcja=document.getElementById("tranzakcja").value;
    let wynik=0;
    switch(waluta){
        case "euro":
            if(tranzakcja=="kupno"){
                wynik=kwota*4.691;
            }
            else{
                wynik=kwota*4.72;
            }
            break;
        case "funt":
            if(tranzakcja=="kupno"){
                wynik=kwota*5.383;
            }
            else{
                wynik=kwota*5.423;
            }
            break;
        case "dolar":
            if(tranzakcja=="kupno"){
                wynik=kwota*4.52;
            }
            else{
                wynik=kwota*4.541;
            }
            break;
    }
    document.getElementById("wynik").value=wynik;
}