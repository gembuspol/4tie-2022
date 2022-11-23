function oblicz(){
    let bramka1=document.getElementById("bramka1").value;
    let bramka2=document.getElementById("bramka2").value;
    let bramka3=document.getElementById("bramka3").value;
    let bramka4=document.getElementById("bramka4").value;

    //obliczanie punktów dla Argentyny
    let punktyArg=punkty(bramka1,bramka2);
    //obliczanie punktów dla Arabii Saudyjskiej
    let punktyArb=punkty(bramka2,bramka1);
    //obliczanie punktów dla Polski
    let punktyPol=punkty(bramka3,bramka4);
    //obliczanie punktów dla Meksyk
    let punktyMex=punkty(bramka4,bramka3);

    //przygotowanie wyniku
    document.getElementById("punktyArg").value=punktyArg;
    document.getElementById("punktyArb").value=punktyArb;
    document.getElementById("punktyPol").value=punktyPol;
    document.getElementById("punktyMex").value=punktyMex;
}
function punkty(bramkiZ, bramkiS){
    let punkt=0;
    if(bramkiZ>bramkiS){
        punkt=3;
    }else if(bramkiZ == bramkiS){
        punkt=1;
    }else{
        punkt=0;
    }
    return punkt;
}