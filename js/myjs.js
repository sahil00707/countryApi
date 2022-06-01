var all_countries=document.querySelector(".all_countries");
var country=document.querySelector(".country");

var loading_screen=document.querySelector(".loading_screen");

function cloneCountry(){
    for(var i=0;i<249;i++){
var clone=country.cloneNode(true);
all_countries.appendChild(clone);
    }
}
cloneCountry();
var country=document.querySelectorAll(".country");
var main_country_flag=document.querySelectorAll(".main_country_flag");
var main_country_name=document.querySelectorAll(".main_country_name");
var main_country_capital=document.querySelectorAll(".main_country_capital");
var main_country_region=document.querySelectorAll(".main_country_region");
var main_country_population=document.querySelectorAll(".main_country_population");
var main_country_capital_big=document.querySelectorAll(".main_country_capital_big");
function changeId(){
for(var i=0;i<249;i++){
    country[i].id='country'+'Id'+i;
    
   country[i].setAttribute( "onClick", "showHide("+i+");" );

   
}
}
changeId();

async function getData() {
  
  let url = await fetch("https://restcountries.com/v3.1/all");
let res = await url.json();
    for (var i = 0; i < 250; i++) {
       
        main_country_name[i].innerHTML = res[i].name.common;
        main_country_capital[i].innerHTML = res[i].capital;
        if(main_country_capital[i].innerHTML=="undefined"){
            main_country_capital_big[i].style.display="none";
        }
        main_country_region[i].innerHTML = res[i].region;
        main_country_population[i].innerHTML = res[i].population;
        main_country_flag[i].src = res[i].flags.png;
  
    }
  }
getData();

function getRegion(){
var filter=document.querySelector("#filter");
for(var i=0;i<250;i++){
 //   alert(filter.value);
 if(filter.value=="All"){
    country[i].style.display="block";

}
else{
    if(main_country_region[i].innerHTML!=filter.value){
      country[i].style.display="none";
    }
    else{
        country[i].style.display="block";

    }
}
}
}

var second_page=document.querySelector(".second_page");
var first_page=document.querySelector(".first_page");
var country_flag=document.querySelector(".country_flag");
var country_name=document.querySelector(".country_name");
var country_official_name=document.querySelector(".country_official_name");
var country_capital=document.querySelector(".country_capital");
var country_region=document.querySelector(".country_region");
var country_sub_region=document.querySelector(".country_sub_region");
var country_population=document.querySelector(".country_population");
var country_area=document.querySelector(".country_area");
var country_car_side=document.querySelector(".country_car_side");
var country_currency=document.querySelector(".country_currency");
var borders=document.querySelector(".borders");
var border=document.querySelector(".border");
var country_tld=document.querySelector(".country_tld");
second_page.style.display="none";

async function showHide(x){
    
    second_page.style.display="block";
    first_page.style.display="none";
    let url = await fetch("https://restcountries.com/v3.1/all");
    let res = await url.json();
    
   
    country_flag.src=res[x].flags.svg;
    country_name.innerHTML=res[x].name.common;
    country_official_name.innerHTML=res[x].name.official;
    country_capital.innerHTML=res[x].capital;
    if(country_capital.innerHTML=="undefined"){
        document.querySelector(".second_capital").style.display="none";
    }
    else{
        document.querySelector(".second_capital").style.display="block";

        country_capital.innerHTML=res[x].capital;

    }
    country_region.innerHTML= res[x].region;
    country_sub_region.innerHTML=res[x].subregion;
    if(country_sub_region.innerHTML=="undefined"){
        document.querySelector(".second_sub_region").style.display="none";
    }
    else{
        document.querySelector(".second_sub_region").style.display="block";

        country_sub_region.innerHTML=res[x].subregion;

    }
    country_population.innerHTML=res[x].population;
    country_area.innerHTML=res[x].area;
    country_car_side.innerHTML=res[x].car.side;
    country_tld.innerHTML=res[x].tld;
    
   
    
}

function hideShow(){
    second_page.style.display="none";
    first_page.style.display="block";
}

function searchCountry(){
    var input_country_name=document.querySelector(".input_country_name").value;
    for(var i=0;i<250;i++){
        
        if(main_country_name[i].innerHTML.toLowerCase().includes(input_country_name.toLowerCase())){
            country[i].style.display="block";
        }
        else{
            country[i].style.display="none";

        }
        if(input_country_name==""){
            for(var i=0;i<250;i++){
                country[i].style.display="block";

            }
        }
    }
}

var style=document.querySelector(".style");
var dark_mode_img=document.querySelector(".dark_mode_img");
var dark_mode_text=document.querySelector(".dark_mode_text");
var search_icon=document.querySelector(".search_icon");
var select_btn_arrow=document.querySelector(".select_btn_arrow");
var back_arrow=document.querySelector(".back_arrow");
var i=0;
function darkWhiteMode(){
   

    if(i==0){
i=1;

style.href="css/whiteMode.css";
dark_mode_img.src="icons/night.png";
search_icon.src="icons/search_black.svg";
select_btn_arrow.src="icons/down-arrow-black.png";
back_arrow.src="icons/arrow-left-black.svg";
dark_mode_text.innerText="Dark Mode";
    }
    else {
i=0;
style.href="css/style.css";
dark_mode_img.src="icons/sun.svg";
search_icon.src="icons/search_white.svg";
select_btn_arrow.src="icons/down-arrow-white.svg";
back_arrow.src="icons/arrow-left-white.svg";


dark_mode_text.innerText="Light Mode";

    }
   
}