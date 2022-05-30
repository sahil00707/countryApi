var all_countries = document.getElementById("all_countries");
var country = document.getElementById("country");
var s = document.getElementById("s");
var dark = document.getElementById("dark");
var form = document.getElementById("form");
var navbar = document.getElementById("navbar");
var coun = document.getElementById("coun");
var hidden = document.getElementsByClassName("hidden");
var country_flag_image = document.getElementById("country_flag_image");
var country_name = document.getElementById("country_name");
var country_capital = document.getElementById("country_capital");
var country_region = document.getElementById("country_region");
var country_class = document.getElementsByClassName("country_class");
var flagClassImage = document.getElementsByClassName("country_flag_image");
var country_name_class = document.getElementsByClassName("country_name_class");
var country_capital_class = document.getElementsByClassName("country_capital_class");
var country_region_class = document.getElementsByClassName("country_region_class");
var country_population_class = document.getElementsByClassName("country_population_class");
var x=document.getElementsByClassName("coun");
var all=document.getElementById("all"); 
var back=document.getElementById("back"); 
var big_name=document.getElementById("big_name");
function createCountries() {

  for (var i = 0; i < 249; i++) {
    const clone = form.cloneNode(true);
    all_countries.appendChild(clone);
  }
}

async function getData() {
  let url = await fetch("https://restcountries.com/v3.1/all");
  let res = await url.json();

  for (var i = 0; i < res.length; i++) {
    country_name_class[i].innerHTML = res[i].name.common;
    country_capital_class[i].innerHTML = res[i].capital;
    country_region_class[i].innerHTML = res[i].region;
    flagClassImage[i].src = res[i].flags.png;

  }
}
getData();
createCountries();
for (var i = 0; i < 249; i++) {
 x[i].id=`${i}`; 
x[i].value=`${i}`; 
hidden[i].value=`${i}`;
}


function getRegion(){
  var regionValue=document.querySelector("#filter").value;
  var country_region=document.querySelectorAll(".country_region_class");
for(var i=0;i<249;i++){
  if(country_region[i].innerHTML!=regionValue){
    country_region[i].style.display="none";
  }
}
}