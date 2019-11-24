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
// # switch comment out code for localhost
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


/* Style inputs, select elements and textareas */
input[type=text], input[type=number]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  margin-top: 10px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  margin: auto;
  margin-top: 75px;
  margin-bottom: 75px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
  color: black;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
  border-right: 2px solid grey;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}