<?php
     $value=$_POST['hidden'];  
   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>India</title>
    <link rel="stylesheet" href="countryInfo.css">
    <link rel="stylesheet" href="style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Maven+Pro&family=Nunito+Sans:wght@200&family=Red+Hat+Mono:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<div class="navbar" id="navbar">
    <div class="where_dark">
      <h2 id="where_in">Where in the world?</h2> 
      <button class="dark" id="dark" onclick="darkSmallMode()">Dark Mode</button>
    </div>
</div>  
    <div class="all" id="all">  
        <a href="index.php">
        <button class="back" id="back">Back</button></a>
        <div class="all_small">
            <div class="image_flag_other" id="image_flag_other">
                <img src="images/off.jpg" alt="" id="img001">
            </div> 
            <div class="details01">
                <h4 id="big_name">Canada</h4> 
                <div class="border" id="border"></div> 
                <p class="ppp"><span  id="con1"  class="con">Official Name : </span><span   id="detail_country_name"  class="detail_country_name">India</span></p>
                <p class="ppp"><span  id="con2" class="con">Capital : </span><span   id="detail_country_capital" class="detail_country_capital">Delhi</span></p>
                <p class="ppp"><span  id="con3" class="con">Region : </span><span  id="detail_country_region"  class="detail_country_region">Asia</span></p>
                <p class="ppp"><span  id="con4" class="con">Sub Region : </span><span  id="detail_country_sub_region"  class="detail_country_sub_region">Asia</span></p>
                <p class="ppp"><span  id="con5" class="con">Population : </span><span  id="detail_country_population"  class="detail_country_population">454557</span></p>
                <p class="ppp"><span  id="con6" class="con">Area : </span><span   id="detail_country_area" class="detail_country_area">7674</span></p>
                <p class="ppp"><span  id="con7" class="con">Car Side : </span><span   id="detail_country_car_side" class="detail_country_car_side">Right</span></p>
                <p class="ppp"><span  id="con8" class="con">Top Level Domain : </span><span   id="tld" class="tld">.in</span></p>
            </div>
        </div>
    </div> 




<script >

var big_name=document.getElementById("big_name");
var img001=document.getElementById("img001");
var tld=document.getElementById("tld");
var detail_country_name=document.getElementById("detail_country_name");
//var detail_country_currencies=document.getElementById("detail_country_currencies");
var detail_country_capital=document.getElementById("detail_country_capital");
var detail_country_region=document.getElementById("detail_country_region");
var detail_country_sub_region=document.getElementById("detail_country_sub_region");
var detail_country_population=document.getElementById("detail_country_population");
var detail_country_area=document.getElementById("detail_country_area");
var detail_country_car_side=document.getElementById("detail_country_car_side");
var navbar=document.getElementById("navbar");

async function getData() {
  let url = await fetch("https://restcountries.com/v3.1/all");
  let res = await url.json();

img001.src=res[<?php echo $value?>].flags.svg;
tld.innerHTML=res[<?php echo $value?>].tld;
  big_name.innerText=res[<?php echo $value?>].name.common;
detail_country_name.innerText=res[<?php echo $value?>].name.official;
detail_country_capital.innerText=res[<?php echo $value?>].capital;
detail_country_region.innerText=res[<?php echo $value?>].region;
detail_country_sub_region.innerText=res[<?php echo $value?>].subregion;
detail_country_population.innerText=res[<?php echo $value?>].population;
detail_country_area.innerText=res[<?php echo $value?>].area;
detail_country_car_side.innerText=res[<?php echo $value?>].car.side;
//detail_country_currencies.innerText=res[<?php echo $value?>].currencies.map(elem=>elem.name);
//detail_country_name.innerText=res[echo $value].name.common;
} 
getData(); 

</script> 
<script src="my_js.js"></script>
</body>

</html>