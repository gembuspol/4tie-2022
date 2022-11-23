function oblicz(){
    let bramka1=document.getElementById("bramka1").value;
    let bramka2=document.getElementById("bramka2").value;
    let bramka3=document.getElementById("bramka3").value;
    let bramka4=document.getElementById("bramka4").value;
    let bramka5=document.getElementById("bramka5").value;
    let bramka6=document.getElementById("bramka6").value;
    let bramka7=document.getElementById("bramka7").value;
    let bramka8=document.getElementById("bramka8").value;

    //obliczanie punktów dla Argentyny
    let punktyArg=punkty(bramka1,bramka2)+punkty(bramka7,bramka8);
    //obliczanie punktów dla Arabii Saudyjskiej
    let punktyArb=punkty(bramka2,bramka1)+punkty(bramka6,bramka5);
    //obliczanie punktów dla Polski
    let punktyPol=punkty(bramka3,bramka4)+punkty(bramka5,bramka6);
    //obliczanie punktów dla Meksyk
    let punktyMex=punkty(bramka4,bramka3)+punkty(bramka8,bramka7);

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