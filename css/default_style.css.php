<?php
require '../config.php';
{
    $titleColor = colorScheme::getColorHexByColorName("titleColor");
    $minorText = colorScheme::getColorHexByColorName("minorText");
    $highlightMajor = colorScheme::getColorHexByColorName("highlightMajor");
    $body = colorScheme::getColorHexByColorName("body");
    $headColor = colorScheme::getColorHexByColorName("headColor");
    $mainText = colorScheme::getColorHexByColorName("mainText");
    $highlightMinor = colorScheme::getColorHexByColorName("highlightMinor");
}
# switch comment out code for localhost
// {
//     $titleColor = '#856850';
//     $minorText = '#705843';
//     $highlightMajor = '#B89B82';
//     $body = '#E3E3E3';
//     $headColor = '#C5C5C9';
//     $mainText = '#3D3D3D'; 
//     $highlightMinor = '#D9B79A';
// }



?>
<?php header("Content-type: text/css"); ?>
/*FONTS
font-family: 'Roboto', sans-serif;
font-family: 'Montserrat Alternates', sans-serif;
*/
/*
    COLORS PHP CODE
    $titleColor = <?=$titleColor?>
    $minorText = <?=$minorText?>
    $highlightMajor = <?=$highlightMajor?>
    $body = <?=$body?>
    $headColor = <?=$headColor?>
    $mainText = <?=$mainText?>
    $highlightMinor = <?=$highlightMinor?>
*/

nav{
    background-color: <?=$headColor?>;
    display: flex;
    justify-content: space-between;
    border-bottom: 2px solid <?=$highlightMajor?>;
}

.home_link a{
    color: <?=$titleColor?>;
    font-family: 'Montserrat Alternates', sans-serif;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.home_link a:hover {
    color: <?=$mainText?>;
}

footer {
    background-color: <?=$highlightMajor?>;
    display: flex;
    justify-content: space-between;
    padding: 10px;
}

body{
    margin: 0;
    background-color: <?=$body?>;
    color: <?=$mainText?>;
}

.home_link h1, img{
    display: inline;
    vertical-align: middle;
}

.rightNavLinks{
    margin: auto 10px auto 0;
    text-decoration: none;
    font-family: 'Montserrat Alternates', sans-serif;
    font-weight: bold;
    color: <?=$highlightMajor?>;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.rightNavLinks:hover {
    color: <?=$mainText?>;
}

.footerRight {
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    color: <?=$minorText?>;
}

.footerRight a {
    text-decoration: none;
    color: <?=$mainText?>;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}
.footerRight a:hover {
    color: <?=$titleColor?>;
}

.footerLeft {
    margin-top: auto;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
    color: <?=$highlightMinor?>;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.footerLeft:hover {
    color: <?=$titleColor?>
}

.mainContainer {
    width: 85%;
    margin: auto;
    padding: 5% 0 5% 0;
}

.flex-container {
    display: flex;
    flex-wrap: wrap;
    margin: auto;
}
.flex-container > div {
  margin: 3px;
  line-height: 1.3;
}

.homeH {
    text-align: center;
    font-family: 'Montserrat Alternates', sans-serif;
}

.homeH h1{
    color: <?=$mainText?>; 
    font-size: 100px; 
    font-weight: bold;
}

.homeH h2{
    font-size: 40px;
}

.aboutus p{
    color: <?=$mainText?>;
    font-family: 'Roboto', sans-serif;
}

.aboutus h1{
    color: <?=$titleColor?>;
    font-family: 'Montserrat Alternates', sans-serif;

}

.signinContainer input[type="text"], .signinContainer input[type="password"]{  
  padding: 12px;
  width: 100%;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;  
  margin-bottom: 15px;
  font-size: 1.1em;
  font-family: 'Roboto', sans-serif;
  color: <?=$mainText?>;
}

.signinContainer button{
    border-radius: 4px;
    width: 100%;
    height: 40px;
    font-size: 1.1em;
    font-family: 'Montserrat Alternates', sans-serif;
    background-color: <?=$mainText?>;
    border: 1px solid <?=$mainText?>;
    color: <?=$body?>; 
    transition: all 0.5s;
    cursor: pointer;
}

.signinContainer {
  margin: auto;
  border-radius: 5px;
  background-color: <?=$highlightMinor?>;
  border: 1px solid <?=$highlightMajor?>;
  padding: 30px;
  width: 25%;
  color: <?=$mainText?>;
}

.signInHeader{
    font-size: 1.5em;
    padding-top: 75px;
    width: 40%;
    margin: auto;
    text-align: center;
    color: <?=$mainText?>;
    font-family: 'Montserrat Alternates', sans-serif;
}

.sininCreateAccout {
    width: 40%;
    text-align: center;
    margin: auto;
    margin-top: 25px;
    margin-bottom: 75px;
    font-family: 'Roboto', sans-serif;
    font-size: 1.1em;
}

.wapper h2{
    font-size: 1.7em;
    font-family: 'Montserrat Alternates', sans-serif;
}

.wrapper{
    font-family: 'Roboto', sans-serif;
    font-size: 1.1em;
    /*margin: auto;*/
    background-color: <?=$headColor?>;
    border-radius: 4px;
    padding: 25px;
    width: 60%;
    /*position: relative;*/
}
.flex-container2 {
    display: flex;
    flex-wrap: wrap;
    margin: auto;
    width: 85%;
    margin-top: 75px;
    margin-bottom: 75px;
}
.signupdiv {
/*    margin: 0;
    position: absolute;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);*/
}

.signupdiv input[type="text"], .signupdiv input[type="password"], .signupdiv input[type="number"]{  
  padding: 12px;,
  width: 100%;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;  
  margin-bottom: 15px;
  font-family: 'Roboto', sans-serif;
  color: <?=$mainText?>;
}

.signupdiv input[type="submit"], .signupdiv input[type="reset"]{
    border-radius: 4px;
    /*width: 100%;*/
    height: 40px;
    font-size: 1.1em;
    font-family: 'Montserrat Alternates', sans-serif;
    background-color: <?=$mainText?>;
    border: 1px solid <?=$mainText?>;
    color: <?=$body?>; 
    transition: all 0.5s;
    cursor: pointer;
}

.accountDetails {
    color: <?=$mainText?>;
    font-family: 'Roboto', sans-serif;
    width: 80%;
    margin: auto;
    margin-top: 75px;
    margin-bottom: 75px;
}