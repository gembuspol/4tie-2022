const formularz=document.querySelector("form");
const dane1=formularz.querySelector("input[name=wejscie1]");

formularz.addEventListener("submit", e => {
    e.preventDefault();
    alert(dane1.value);
} );
const form1=document.querySelector("#formularz1");
const dane2=form1.querySelector("#wejscie1");

form1.addEventListener("submit", e =>{
    e.preventDefault();
    console.log(dane2.value);
})
const form2=document.querySelector(".formularz");
const dane3=form2.querySelector(".wejscie");
const wynik=form2.querySelector(".wiadomosc");

form2.addEventListener("submit", e =>{
    e.preventDefault();
    wynik.innerHTML=`<p>Wynik działania to:
    ${dane3.value} </p> `
})