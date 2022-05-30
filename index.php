<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Maven+Pro&family=Nunito+Sans:wght@200&family=Red+Hat+Mono:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
 
</head> 
<div class="navbar" id="navbar">
    <div class="where_dark">
      <h2 id="where_in">Where in the world?</h2> 
      <button class="dark" id="dark" onclick="darkMode()">Dark Mode</button>
    </div>
</div>  
<div class="s" id="s">
<div class="search_filter">
  <div class="search" id="search">
    <div class="image1">
      <img src="icons/gear.svg" alt="">
    </div> 
    <input type="text" placeholder="Search for Country" id="placeholder">
  </div>
  <div class="filter">
 <select name="filter" id="filter" class="filter" onchange="getRegion()">
   <option value="Asia" >Asia</option>
   <option value="Africa">Africa</option>
   <option value="Europe">Europe</option>
   <option value="Africa" selected>Africa</option>
   <option value="America">America</option>
   <option value="Australia">Australia</option>
 </select>
</div>
</div>  

</div> 
<body class="body">
    <div class="all_countries" id="all_countries"> 
      <form action="countryInfo.php" id="form" class="form" method="post">
      <button class="coun" id="coun" value="2" >
        <div class="country_class" id="country">
            <div class="image">
              <img src="images/off.jpg" alt="" id="country_flag_image" class="country_flag_image">
            </div> 
            <div class="info">
              <h3 class="country_name_class"   id="country_name">Canada</h3> 
              <p  class="country_capital_class"  id="country_capital">Delhi</p> 
              <p  class="country_region_class"  id="country_region">Asia</p>
              <p  class="country_population_class"  id="country_population">245466</p>
            </div>
        </div>
       </button> 
       <input type="hidden" value="1" class="hidden" name="hidden">
       </form>
    </div> 

   <script src="my_js.js"></script>
</body>

</html>
