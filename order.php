<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
        .onoffswitch {
            position: relative; width: 90px;
            -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
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
        </style>
        <title>[Untitled] Piza | Order</title>
        <meta name="description" content="">
        <?php include 'htmlHead.php';?>
    </head>
    <body>
        <?php include 'nav.php';?>

        <div class="onoffswitch">
            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
            <label class="onoffswitch-label" for="myonoffswitch">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        </div>

        <form>
        <table>
            <tr>
                <td>
                Cheese: 
                </td><td>
                    <input type="radio" name="cheese" value="normal" checked> Normal
                </td><td>
                    <input type="radio" name="cheese" value="none" > No Cheese
                </td><td>
                    <input type="radio" name="cheese" value="extra-whole"> Extra Cheese (Whole Pizza)
                </td><td>
                    <input type="radio" name="cheese" value="extra-left-half">Extra Cheese (Left only)
                </td><td>
                    <input type="radio" name="cheese" value="extra-right-half">Extra Cheese (Right only)
                </td>
            </tr><tr>
                Meats:
            </tr><tr>
                <td>Pepperoni </td><td>
                    <input type="radio" name="pepperoni" value="none"> None 
                </td><td>
                    <input type="radio" name="pepperoni" value="full"> Full 
                </td><td>
                    <input type="radio" name="pepperoni" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="pepperoni" value="right-half">Right only 
                </td>
            </tr><tr>
                <td>Ham </td><td>
                    <input type="radio" name="ham" value="none"> None 
                </td><td>
                    <input type="radio" name="ham" value="full"> Full 
                </td><td>
                    <input type="radio" name="ham" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="ham" value="right-half">Right only 
                </td>
            </tr><tr>
                <td>Bacon </td><td>
                    <input type="radio" name="bacon" value="none"> None 
                </td><td>
                    <input type="radio" name="bacon" value="full"> Full 
                </td><td>
                    <input type="radio" name="bacon" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="bacon" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Sausage </td><td>
                    <input type="radio" name="sausage" value="none"> None 
                </td><td>
                    <input type="radio" name="sausage" value="full"> Full 
                </td><td>
                    <input type="radio" name="sausage" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="sausage" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Salami </td><td>
                    <input type="radio" name="salami" value="none"> None 
                </td><td>
                    <input type="radio" name="salami" value="full"> Full 
                </td><td>
                    <input type="radio" name="salami" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="salami" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Beef</td><td>
                    <input type="radio" name="beef" value="none"> None 
                </td><td>
                    <input type="radio" name="beef" value="full"> Full 
                </td><td>
                    <input type="radio" name="beef" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="beef" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Anchovies </td><td>
                    <input type="radio" name="anchovies" value="none"> None 
                </td><td>
                    <input type="radio" name="anchovies" value="full"> Full 
                </td><td>
                    <input type="radio" name="anchovies" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="anchovies" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Chicken </td><td>
                    <input type="radio" name="chicken" value="none"> None 
                </td><td>
                    <input type="radio" name="chicken" value="full"> Full 
                </td><td>
                    <input type="radio" name="chicken" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="chicken" value="right-half">Right only 
                </td>
            </tr><tr>

                 <td>Pork </td><td>
                    <input type="radio" name="pork" value="none"> None 
                </td><td>
                    <input type="radio" name="pork" value="full"> Full 
                </td><td>
                    <input type="radio" name="pork" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="pork" value="right-half">Right only 
                </td>
            </tr><tr>
                <td> Non-Meat Options: </td>
            </tr><tr>
                 <td>Pineapple </td><td>
                    <input type="radio" name="pineapple" value="none"> None 
                </td><td>
                    <input type="radio" name="pineapple" value="full"> Full 
                </td><td>
                    <input type="radio" name="pineapple" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="pineapple" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Mushrooms </td><td>
                    <input type="radio" name="mushrooms" value="none"> None 
                </td><td>
                    <input type="radio" name="mushrooms" value="full"> Full 
                </td><td>
                    <input type="radio" name="mushrooms" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="mushrooms" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Onions </td><td>
                    <input type="radio" name="onions" value="none"> None 
                </td><td>
                    <input type="radio" name="onions" value="full"> Full 
                </td><td>
                    <input type="radio" name="onions" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="onions" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Hot Sauce </td><td>
                    <input type="radio" name="hot-sauce" value="none"> None 
                </td><td>
                    <input type="radio" name="hot-sauce" value="full"> Full 
                </td><td>
                    <input type="radio" name="hot-sauce" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="hot-sauce" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Spinach </td><td>
                    <input type="radio" name="spinach" value="none"> None 
                </td><td>
                    <input type="radio" name="spinach" value="full"> Full 
                </td><td>
                    <input type="radio" name="spinach" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="spinach" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Diced Tomatoes </td><td>
                    <input type="radio" name="tomatoes" value="none"> None 
                </td><td>
                    <input type="radio" name="tomatoes" value="full"> Full 
                </td><td>
                    <input type="radio" name="tomatoes" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="tomatoes" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Olives </td><td>
                    <input type="radio" name="olives" value="none"> None 
                </td><td>
                    <input type="radio" name="olives" value="full"> Full 
                </td><td>
                    <input type="radio" name="olives" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="olives" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Banana Peppers</td><td>
                    <input type="radio" name="banana-peppers" value="none"> None 
                </td><td>
                    <input type="radio" name="banana-peppers" value="full"> Full 
                </td><td>
                    <input type="radio" name="banana-peppers" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="banana-peppers" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Red Peppers </td><td>
                    <input type="radio" name="red-peppers" value="none"> None 
                </td><td>
                    <input type="radio" name="red-peppers" value="full"> Full 
                </td><td>
                    <input type="radio" name="red-peppers" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="red-peppers" value="right-half">Right only 
                </td>
            </tr><tr>
                 <td>Jalapeño Peppers </td><td>
                    <input type="radio" name="jalapeno-peppers" value="none"> None 
                </td><td>
                    <input type="radio" name="jalapeno-peppers" value="full"> Full 
                </td><td>
                    <input type="radio" name="jalapeno-peppers" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="jalapeno-peppers" value="right-half">Right only 
                </td>
            </tr><tr>
                End
            </tr>

        </table>

        <?php include 'footer.php' ?>
        
        <script src="js/main.js"></script>
    </body>
</html>