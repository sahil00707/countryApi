<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css" class="style">
    <link rel="stylesheet" href="css/responsive.css" class="style">
    <link rel="icon" href="icons/info.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Maven+Pro&family=Nunito+Sans:wght@200&family=Red+Hat+Mono:wght@300&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
</head>
<body  >

    <div class="title_dark_mode">
        <h3>Where in the World ?</h3>
        <button onclick="darkWhiteMode()">
            <img src="icons/sun.svg" alt="" class="dark_mode_img">
            <p class="dark_mode_text">Light Mode</p>
        </button>
    </div>
    <div class="first_page">
        <div class="search_filer">
            <div class="search">
                <img src="icons/search_white.svg" alt="" class="search_icon">
            <input type="text" name="input_country_name" class="input_country_name" placeholder="Search for a country..."
                oninput="searchCountry()">
                </div>
                <div class="filter_div">
                    
            <select name="filter" id="filter" class="filter" onchange="getRegion()">
                <option value="All">All</option>
                <option value="Asia">Asia</option>
                <option value="Africa">Africa</option>
                <option value="Europe">Europe</option>
                <option value="Africa">Africa</option>
                <option value="Americas">America</option>
                <option value="Antarctic">Antractic</option>
                <option value="Oceania">Oceania</option>
            </select>
            <img src="icons/down-arrow-white.svg" alt="" class="select_btn_arrow">
            </div>
        </div>
        <div class="all_countries">
            <button class="country" id="country" onclick="showHide()">
                <div class="image">
                    <img src="images/india_flag.png" alt="" class="main_country_flag">
                </div>
                <div class="info">
                    <p class="main_country_name">India</p>
                  <p class="main_country_capital_big"><span>Capital : </span>   <span class="main_country_capital">Delhi</span></p>
                  <p><span>Region : </span>   <span class="main_country_region">Delhi</span></p>
                  <p><span>Population : </span>   <span class="main_country_population">Delhi</span></p>
                   
                </div>
            </button>
        </div>
    </div>
    
        </div>
    </div>

    <div class="second_page">
        
        <div class="content">
             <button class="back" id="back" onclick="hideShow()">
                <img src="icons/arrow-left-white.svg" alt="" class="back_arrow">
                <p>Back</p>
             </button>
           <div class="country_info_flag">
               <div class="flag">
                   <img src="images/india_flag.png" alt="" class="country_flag">
                </div>
             <div class="info">
                 <h3 class="country_name">India</h3> 
                 <div class="info_details">
                     <div class="details01">
                            <p><span>Official Name : </span> <span  class="country_official_name">India</span></p>
                            <p class="second_capital"><span>Capital : </span> <span  class="country_capital">Delhi</span></p>
                            <p><span>Region : </span> <span  class="country_region">Asia</span></p>
                            <p class="second_sub_region"><span>Sub Region : </span> <span class="country_sub_region">South Asia</span></p>
                            <p><span>Car Side : </span> <span class="country_car_side"></span></p>
                     </div>
                     <div class="details02">
                         <p ><span>Population : </span> <span class="country_population">123456</span></p>
                         <p ><span>Area : </span> <span class="country_area">2345</span></p>
                         <p ><span>Currency : </span class="country_currency"> rupees</p>
                         <p ><span>Top Level Domain : </span> <span class="country_tld">.in</span></p>             
                     </div>
                 </div>
                 <div class="borderbigg">
            <h4> Borders :</h4>
       <div class="all_borders">
    
       </div>
        </div>
                
             </div>
            
        </div>
     
        </div>
    </div>


    <script src="js/myjs.js"></script>
</body>

</html>