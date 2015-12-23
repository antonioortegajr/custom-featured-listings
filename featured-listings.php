<html>
<head>
<style>
body{
 padding-left:35%;
padding-right:35%;
}
#main-image {
  max-width:500px;
}
#address{
  font-weight:lighter;
}
#price{
  font-weight:bolder;
}
.image{
padding-bottom:25px;
}
.text{
padding-top:5px;
padding-bottom:10px;
}
</style>
</head>
<body>
<h1>Featured Listings</h1>
<?php

    //load up the stored json and decode
    $listings = json_decode(file_get_contents("temp.json"), true);

    //loop through all properties
    foreach ($listings as $key => $value) {

      //The first property image in the images array
      echo '<div class="image"><img id="main-image" src="'.$value["image"][0]["url"].'"></div>';

      //the property address
      echo '<div id="address" class="text">'.$value["address"]."</div>";

      //The property price
      echo '<div id="price" class="text">'.$value["listingPrice"]."</div>";

    }
?>
</body>
</html>
