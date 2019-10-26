<?php
header("Content-type: text/css");
$darkBrown = '#856850';
$darkerBrown = '#705843';
$lightBrown = '#B89B82';
$lightGray = '#E3E3E3';
$darkGray = '#C5C5C9';
$darkerGray = '#646466';
$almostBlack = '#3D3D3D';
$lighterBrown = '#D9B79A';
?>
/*FONTS
font-family: 'Roboto', sans-serif;
font-family: 'Montserrat Alternates', sans-serif;
*/


nav{
    background-color: <?=$darkGray?>;
    display: flex;
    justify-content: space-between;
    border-bottom: 2px solid <?=$lightBrown?>;
}

.home_link a{
    color: <?=$darkBrown?>;
    font-family: 'Montserrat Alternates', sans-serif;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.home_link a:hover {
    color: <?=$almostBlack?>;
}

footer {
    background-color: <?=$lightBrown?>;
    display: flex;
    justify-content: space-between;
    padding: 10px;
}

body{
    margin: 0;
    background-color: <?=$lightGray?>;
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
    color: <?=$lightBrown?>;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.rightNavLinks:hover {
    color: <?=$darkerGray?>;
}

.footerRight {
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    color: <?=$darkerBrown?>;
}

.footerRight a {
    text-decoration: none;
    color: <?=$almostBlack?>;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}
.footerRight a:hover {
    color: <?=$darkBrown?>;
}

.footerLeft {
    margin-top: auto;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
    color: <?=$lighterBrown?>;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.footerLeft:hover {
    color: <?=$darkBrown?>
}