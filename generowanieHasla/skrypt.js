var iloscZn=8;
var iloscWolnychZnakow=0;
var iloscDuzeL=0;
var iloscMaleL=0;
var iloscZnak=0;
var iloscCyfr=0;
function ustawWolne(){
    iloscWolnychZnakow=+iloscZn-(+iloscDuzeL+ +iloscMaleL+ +iloscCyfr+ +iloscZnak);

    if(iloscWolnychZnakow<0){
        reset();
        alert("Funkcja idiotoodporna - za mało znaków");
    }
    document.getElementById("iloscDuzeL").max=+iloscWolnychZnakow+ +iloscDuzeL;
    document.getElementById("iloscMaleL").max=+iloscWolnychZnakow+ +iloscMaleL;
    document.getElementById("iloscCyfr").max=+iloscWolnychZnakow+ +iloscCyfr;
    document.getElementById("iloscZnak").max=+iloscWolnychZnakow+ +iloscZnak;
}
function reset(){
        iloscCyfr=0;
        document.getElementById("iloscCyfr").value=0;
        document.getElementById("wybCyfr").value=0;
        iloscDuzeL=0;
        document.getElementById("iloscDuzeL").value=0;
        document.getElementById("wybDuzeL").value=0;
        iloscMaleL=0;
        document.getElementById("iloscMaleL").value=0;
        document.getElementById("wybMaleL").value=0;
        iloscZnak=0;
        document.getElementById("iloscZnak").value=0;
        document.getElementById("wybZnak").value=0;
        iloscWolnychZnakow=iloscZn;
}
function wybieranieDuzeL(){
    iloscDuzeL=document.getElementById("iloscDuzeL").value;
    document.getElementById("wybDuzeL").value=iloscDuzeL;
    ustawWolne()
}
function wybieranieCyfr(){
    iloscCyfr=document.getElementById("iloscCyfr").value;
    document.getElementById("wybCyfr").value=iloscCyfr;
    ustawWolne()
}
function wybieranieMaleL(){
    iloscMaleL=document.getElementById("iloscMaleL").value;
    document.getElementById("wybMaleL").value=iloscMaleL;
    ustawWolne()
}
function wybieranieZnak(){
    iloscZnak=document.getElementById("iloscZnak").value;
    document.getElementById("wybZnak").value=iloscZnak;
    ustawWolne()
}
function iloscZnakow(){
    iloscZn=document.getElementById("iloscZnakow").value;
    ustawWolne()
}
function generujHaslo(){
    let haslo="";
    const alfabetMale="abcdefghijhklmnoprstuvwxyz";
    const alfabetDuze='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const alfabetZnak='!@#$%^&*<>()';

    //losowanie malych liter
    for(let i=0;i<iloscMaleL;i++){
        haslo+=alfabetMale.charAt(Math.floor(Math.random()*alfabetMale.length));
    }
    //losowanie duzych liter
    for(let i=0;i<iloscDuzeL;i++){
        haslo+=alfabetDuze[Math.floor(Math.random()*alfabetDuze.length)];
    }
    //losowanie znakow specjalnych
    for(let i=0;i<iloscZnak;i++){
        haslo+=alfabetZnak[Math.floor(Math.random()*alfabetZnak.length)];
    }
    //losowanie cyfr
    for(let i=0;i<iloscCyfr;i++){
        haslo+=Math.floor(Math.random()*10);
    }
    //losowanie dodatkowych znaków, których nie wybrał użytkownik
    for(let i=0;i<iloscWolnychZnakow;i++){
        haslo+=alfabetMale.charAt(Math.floor(Math.random()*alfabetMale.length));
    }
   // let dane=zmianaKolejnosci(haslo);
    document.getElementById("haslo").value=zmianaKolejnosci(haslo);
}
function zmianaKolejnosci(haslo){
    let wynik=haslo.split('');
    for(let i=0;i<wynik.length;i++){
        let los=Math.floor(Math.random()*wynik.length);
        let tmp=wynik[i];
        wynik[i]=wynik[los];
        wynik[los]=tmp;
    }
    haslo=wynik.join('');
    return haslo;
}