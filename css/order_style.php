<?php
header("Content-type: text/css");
?>
/*FONTS
font-family: 'Roboto', sans-serif;
font-family: 'Montserrat Alternates', sans-serif;
*/

.onoffswitch {
    position: relative; width: 90px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.inlineTable {
    display: inline-block;
    padding-right: 30px;
}
.inlineTable1 {
    display: none;
}
.onoffswitch-checkbox {
    display: none;
}
.onoffswitch-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #694D4D; border-radius: 20px;
}
.onoffswitch-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before, .onoffswitch-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch-inner:before {
    content: "FULL";
    padding-left: 10px;
    background-color: #C46313; color: #FFFFFF;
}
.onoffswitch-inner:after {
    content: "HALF";
    padding-right: 10px;
    background-color: #EEEEEE; color: #786F6F;
    text-align: right;
}
.onoffswitch-switch {
    display: block; width: 26px; margin: 2px;
    background: #FFFFFF;
    position: absolute; top: 0; bottom: 0;
    right: 56px;
    border: 2px solid #694D4D; border-radius: 20px;
    transition: all 0.3s ease-in 0s; 
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
    right: 0px; 
}

.topping {
    color: <?=$lighterBrown?>;
    font-family: 'Montserrat Alternates', sans-serif;
}

.toppingH {
    color: <?=$darkBrown?>;
    font-size: 40px;
    font-weight: bold;
    font-family: 'Montserrat Alternates', sans-serif;
}