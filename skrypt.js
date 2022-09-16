var iloscZn=8;
var iloscWolnychZnakow=0;
var iloscDuzeL=0;
var iloscMaleL=0;
function ustawWolne(){
    iloscWolnychZnakow=+iloscZn-(+iloscDuzeL+ +iloscMaleL);
    document.getElementById("iloscDuzeL").max=+iloscWolnychZnakow+ +iloscDuzeL;
    document.getElementById("iloscMaleL").max=+iloscWolnychZnakow+ +iloscMaleL;
}
function wybieranieDuzeL(){
    iloscDuzeL=document.getElementById("iloscDuzeL").value;
    document.getElementById("wybDuzeL").value=iloscDuzeL;
    ustawWolne()
}
function wybieranieMaleL(){
    iloscMaleL=document.getElementById("iloscMaleL").value;
    document.getElementById("wybMaleL").value=iloscMaleL;
    ustawWolne()
}
function iloscZnakow(){
    iloscZn=document.getElementById("iloscZnakow").value;
    ustawWolne()
}