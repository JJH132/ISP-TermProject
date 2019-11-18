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
    width: 80%;
    margin: auto;
    padding: 5% 0 5% 0;
}