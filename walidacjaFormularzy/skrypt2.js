const formularz=document.querySelector("form");
const dane1a=formularz.querySelector("input[name=wejscie1]");
const dane2a=formularz.querySelector("input[name=wejscie2]");
const dane3a=formularz.querySelector("input[name=wejscie3]");
const dane4a=formularz.querySelector("input[name=wejscie4]");

formularz.addEventListener("submit", e => {
    e.preventDefault();
    alert("imię: "+dane1a.value + "\nNazwisko: "+dane2a.value+ "\nNumer z dziennika"+dane3a.value+ "\nOcena"+dane4a.value);
} );
const form1=document.querySelector("#formularz1");
const dane1b=form1.querySelector("#wejscie1");
const dane2b=form1.querySelector("#wejscie2");
const dane3b=form1.querySelector("#wejscie3");
const dane4b=form1.querySelector("#wejscie4");

form1.addEventListener("submit", e =>{
    e.preventDefault();
    console.log("imię: "+dane1b.value + "\nNazwisko: "+dane2b.value+ "\nNumer z dziennika"+dane3b.value+ "\nOcena"+dane4b.value);
})
const form2=document.querySelector(".formularz");
const dane1c=form2.querySelector(".wejscie1");
const dane2c=form2.querySelector(".wejscie2");
const dane3c=form2.querySelector(".wejscie3");
const dane4c=form2.querySelector(".wejscie4");
const wynik=form2.querySelector(".wiadomosc");

form2.addEventListener("submit", e =>{
    e.preventDefault();
    wynik.innerHTML=`<p>Wynik działania to:
    Imię: ${dane1c.value} <br>
    Nazwisko: ${dane2c.value} <br>
    Numer z dziennika: ${dane3c.value} <br>
    Ocena: ${dane4c.value} <br>
    </p> `
})