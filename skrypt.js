var iloscZnakow=8;
var iloscWolnychZnakow=0;
var iloscDuzeL=0;
var iloscMaleL=0;
function ustawWolne(){
    iloscWolnychZnakow=iloscZnakow-iloscDuzeL-iloscMaleL;
    document.getElementById("iloscDuzeL").max=iloscWolnychZnakow;
    document.getElementById("iloscMaleL").max=iloscWolnychZnakow;
}
function wybieranieDuzeL(){
    iloscDuzeL=document.getElementById("iloscDuzeL").value;
    document.getElementById("wybDuzeL").value=iloscDuzeL;
}
function wybieranieMaleL(){
    iloscMaleL=document.getElementById("iloscMaleL").value;
    document.getElementById("wybMaleL").value=iloscMaleL;
}