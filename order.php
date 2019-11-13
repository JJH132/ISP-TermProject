<?php

    if(isset($_POST['submit'])){
        $halfOrFull = "";
        if(isset($_POST['onoffswitch'])){
            $halfOrFull = $_POST['onoffswitch'];
        }
       
        $order = "";
        if($halfOrFull != "on"){
            $order .= "HALF: ";
            echo($order);
        }
        else {
            $order .= "FULL: ";
            echo($order);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <script type = "text/javascript">
            function displaySecondTable() {
                if(document.getElementById("myonoffswitch").checked == true){
                    document.getElementById("table2").style.display = "none";
                }
                else{
                    document.getElementById("table2").style.display = "inline-block";
                }
            }
      </script> 
        <title>[Untitled] Piza | Order</title>
        <meta name="description" content="">
        <?php include 'htmlHead.php';?>
        <link rel="stylesheet" href="css/order_style.php">
    </head>
    <body>
        <?php include 'nav.php';?>
        <form method="post">
            <div align="center">

                    Toppings for full pizza or half/half?
                <div class="onoffswitch" align="left">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked onclick="displaySecondTable()">
                        <label class="onoffswitch-label" for="myonoffswitch">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                </div>
            </div>
        <br>
        <table class="inlineTable" id="table1">
            <tr>
                <td>
                <div class="toppingH">Cheese:</div> 
                </td><td>
                    <input type="radio" name="cheese" value="normal" checked> Normal
                </td><td>
                    <input type="radio" name="cheese" value="none" > No Cheese
                </td><td>
                    <input type="radio" name="cheese" value="extra-whole"> Extra Cheese
                </td>
            </tr><tr>
            </tr><tr>
                <td>
                    <br>
                    <div class="toppingH">Meats:</div>
                    <div class="topping">Pepperoni</div>
                </td><td>
                    <br><br><br><br>
                    <input type="radio" name="pepperoni" value="none" checked> None 
                </td><td>
                    <br><br><br><br>
                    <input type="radio" name="pepperoni" value="full"> Full 
                </td>
            </tr><tr>
                <td><div class="topping">Ham</div> </td><td>
                    <input type="radio" name="ham" value="none" checked> None 
                </td><td>
                    <input type="radio" name="ham" value="full"> Full 
                </td>
            </tr><tr>
                <td><div class="topping">Bacon</div> </td><td>
                    <input type="radio" name="bacon" value="none" checked> None 
                </td><td>
                    <input type="radio" name="bacon" value="full"> Full 
                </td>
            </tr><tr>
                 <td><div class="topping">Sausage</div> </td><td>
                    <input type="radio" name="sausage" value="none" checked> None 
                </td><td>
                    <input type="radio" name="sausage" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Salami </div> </td><td>
                    <input type="radio" name="salami" value="none" checked> None 
                </td><td>
                    <input type="radio" name="salami" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Beef </div></td><td>
                    <input type="radio" name="beef" value="none" checked> None 
                </td><td>
                    <input type="radio" name="beef" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Anchovies </div> </td><td>
                    <input type="radio" name="anchovies" value="none" checked> None 
                </td><td>
                    <input type="radio" name="anchovies" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Chicken </div> </td><td>
                    <input type="radio" name="chicken" value="none" checked> None 
                </td><td>
                    <input type="radio" name="chicken" value="full"> Full 
                </td>
            </tr><tr>

                 <td> <div class="topping">Pork </div> </td><td>
                    <input type="radio" name="pork" value="none" checked> None 
                </td><td>
                    <input type="radio" name="pork" value="full"> Full 
                </td>
            </tr><tr>
                <td> <br><br> <div class="toppingH">Non-Meat Options: </div> </td>
            </tr><tr>
                 <td> <div class="topping">Pineapple </div> </td><td>
                    <input type="radio" name="pineapple" value="none" checked> None 
                </td><td>
                    <input type="radio" name="pineapple" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Mushrooms </div> </td><td>
                    <input type="radio" name="mushrooms" value="none" checked> None 
                </td><td>
                    <input type="radio" name="mushrooms" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Onions </div> </td><td>
                    <input type="radio" name="onions" value="none" checked> None 
                </td><td>
                    <input type="radio" name="onions" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Hot Sauce </div> </td><td>
                    <input type="radio" name="hot-sauce" value="none" checked> None 
                </td><td>
                    <input type="radio" name="hot-sauce" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Spinach </div> </td><td>
                    <input type="radio" name="spinach" value="none" checked> None 
                </td><td>
                    <input type="radio" name="spinach" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Diced Tomatoes </div> </td><td>
                    <input type="radio" name="tomatoes" value="none" checked> None 
                </td><td>
                    <input type="radio" name="tomatoes" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Olives </div> </td><td>
                    <input type="radio" name="olives" value="none" checked> None 
                </td><td>
                    <input type="radio" name="olives" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Banana Peppers </div></td><td>
                    <input type="radio" name="banana-peppers" value="none" checked> None 
                </td><td>
                    <input type="radio" name="banana-peppers" value="full"> Full 
                </td>
            </tr><tr>
                 <td><div class="topping">Red Peppers </div> </td><td>
                    <input type="radio" name="red-peppers" value="none" checked> None 
                </td><td>
                    <input type="radio" name="red-peppers" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Jalapeño Peppers </div> </td><td>
                    <input type="radio" name="jalapeno-peppers" value="none" checked> None 
                </td><td>
                    <input type="radio" name="jalapeno-peppers" value="full"> Full 
                </td>
            </tr><tr>
            </tr>

        </table>

        <table  class="inlineTable1" id="table2">
            <tr>
                <td>
                <div class="toppingH">Cheese:</div> 
                </td><td>
                    <input type="radio" name="cheese2" value="normal" checked> Normal
                </td><td>
                    <input type="radio" name="cheese2" value="none" > No Cheese
                </td><td>
                    <input type="radio" name="cheese2" value="extra-whole"> Extra Cheese
                </td>
            </tr><tr>
            </tr><tr>
                <td>
                    <br>
                    <div class="toppingH">Meats:</div>
                    <div class="topping">Pepperoni</div>
                </td><td>
                    <br><br><br><br>
                    <input type="radio" name="pepperoni2" value="none" checked> None 
                </td><td>
                    <br><br><br><br>
                    <input type="radio" name="pepperoni2" value="full"> Full 
                </td>
            </tr><tr>
                <td><div class="topping">Ham</div> </td><td>
                    <input type="radio" name="ham2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="ham2" value="full"> Full 
                </td>
            </tr><tr>
                <td><div class="topping">Bacon</div> </td><td>
                    <input type="radio" name="bacon2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="bacon2" value="full"> Full 
                </td>
            </tr><tr>
                 <td><div class="topping">Sausage</div> </td><td>
                    <input type="radio" name="sausage2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="sausage2" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Salami </div> </td><td>
                    <input type="radio" name="salami2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="salami2" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Beef </div></td><td>
                    <input type="radio" name="beef2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="beef2" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Anchovies </div> </td><td>
                    <input type="radio" name="anchovies2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="anchovies2" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Chicken </div> </td><td>
                    <input type="radio" name="chicken2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="chicken2" value="full"> Full 
                </td>
            </tr><tr>

                 <td> <div class="topping">Pork </div> </td><td>
                    <input type="radio" name="pork2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="pork2" value="full"> Full 
                </td>
            </tr><tr>
                <td> <br><br> <div class="toppingH">Non-Meat Options: </div> </td>
            </tr><tr>
                 <td> <div class="topping">Pineapple </div> </td><td>
                    <input type="radio" name="pineapple2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="pineapple2" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Mushrooms </div> </td><td>
                    <input type="radio" name="mushrooms2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="mushrooms2" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Onions </div> </td><td>
                    <input type="radio" name="onions2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="onions2" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Hot Sauce </div> </td><td>
                    <input type="radio" name="hot-sauce2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="hot-sauce2" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Spinach </div> </td><td>
                    <input type="radio" name="spinach2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="spinach2" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Diced Tomatoes </div> </td><td>
                    <input type="radio" name="tomatoes2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="tomatoes2" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Olives </div> </td><td>
                    <input type="radio" name="olives2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="olives2" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Banana Peppers </div></td><td>
                    <input type="radio" name="banana-peppers2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="banana-peppers2" value="full"> Full 
                </td>
            </tr><tr>
                 <td><div class="topping">Red Peppers </div> </td><td>
                    <input type="radio" name="red-peppers2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="red-peppers2" value="full"> Full 
                </td>
            </tr><tr>
                 <td> <div class="topping">Jalapeño Peppers </div> </td><td>
                    <input type="radio" name="jalapeno-peppers2" value="none" checked> None 
                </td><td>
                    <input type="radio" name="jalapeno-peppers2" value="full"> Full 
                </td>
            </tr><tr>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
        <?php include 'footer.php' ?>
        
        <script src="js/main.js"></script>
    </body>
</html>