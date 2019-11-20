<?php
    session_start();
    if(isset($_POST['submit'])){
        $halfOrFull = "";
        if(isset($_POST['onoffswitch'])){
            $halfOrFull = $_POST['onoffswitch'];
        }
       
        $order = "";
        if($halfOrFull != "on"){
            $order .= "HALF: ";

            $order .= "CHEESE: ";
            $var = $_POST['cheese'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "PEPPERONI: ";
            $var = $_POST['pepperoni'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "HAM: ";
            $var = $_POST['ham'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "BACON: ";
            $var = $_POST['bacon'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "SAUSAGE: ";
            $var = $_POST['sausage'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "SALAMI: ";
            $var = $_POST['salami'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "BEEF: ";
            $var = $_POST['beef'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "Anchovies: ";
            $var = $_POST['anchovies'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "Chicken: ";
            $var = $_POST['chicken'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "PORK: ";
            $var = $_POST['pork'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "PINEAPPLE: ";
            $var = $_POST['pineapple'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "MUSHROOMS: ";
            $var = $_POST['mushrooms'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "ONIONS: ";
            $var = $_POST['onions'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "HOT SAUCE: ";
            $var = $_POST['hot-sauce'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "SPINACH: ";
            $var = $_POST['spinach'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "TOMATOES: ";
            $var = $_POST['tomatoes'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "OLIVES: ";
            $var = $_POST['olives'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "BANANA PEPPERS: ";
            $var = $_POST['banana-peppers'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "RED PEPPERS: ";
            $var = $_POST['red-peppers'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "JALAPENO PEPPERS: ";
            $var = $_POST['jalapeno-peppers'];
            if($var != "none"){
                $order .= $var;
                $order .= "       HALF: ";
            }

            $order .= "CHEESE: ";
            $var = $_POST['cheese2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "PEPPERONI: ";
            $var = $_POST['pepperoni2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "HAM: ";
            $var = $_POST['ham2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "BACON: ";
            $var = $_POST['bacon2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "SAUSAGE: ";
            $var = $_POST['sausage2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "SALAMI: ";
            $var = $_POST['salami2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "BEEF: ";
            $var = $_POST['beef2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "Anchovies: ";
            $var = $_POST['anchovies2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "Chicken: ";
            $var = $_POST['chicken2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "PORK: ";
            $var = $_POST['pork2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "PINEAPPLE: ";
            $var = $_POST['pineapple2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "MUSHROOMS: ";
            $var = $_POST['mushrooms2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "ONIONS: ";
            $var = $_POST['onions2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "HOT SAUCE: ";
            $var = $_POST['hot-sauce2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "SPINACH: ";
            $var = $_POST['spinach2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "TOMATOES: ";
            $var = $_POST['tomatoes2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "OLIVES: ";
            $var = $_POST['olives2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "BANANA PEPPERS: ";
            $var = $_POST['banana-peppers2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "RED PEPPERS: ";
            $var = $_POST['red-peppers2'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "JALAPENO PEPPERS: ";
            $var = $_POST['jalapeno-peppers2'];
            if($var != "none"){
                $order .= $var;

            //echo($order);
        }
        else {
            $order .= "FULL: ";

            $order .= "CHEESE: ";
            $var = $_POST['cheese'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "PEPPERONI: ";
            $var = $_POST['pepperoni'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "HAM: ";
            $var = $_POST['ham'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "BACON: ";
            $var = $_POST['bacon'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "SAUSAGE: ";
            $var = $_POST['sausage'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "SALAMI: ";
            $var = $_POST['salami'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "BEEF: ";
            $var = $_POST['beef'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "Anchovies: ";
            $var = $_POST['anchovies'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "Chicken: ";
            $var = $_POST['chicken'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "PORK: ";
            $var = $_POST['pork'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "PINEAPPLE: ";
            $var = $_POST['pineapple'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "MUSHROOMS: ";
            $var = $_POST['mushrooms'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "ONIONS: ";
            $var = $_POST['onions'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "HOT SAUCE: ";
            $var = $_POST['hot-sauce'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "SPINACH: ";
            $var = $_POST['spinach'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "TOMATOES: ";
            $var = $_POST['tomatoes'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "OLIVES: ";
            $var = $_POST['olives'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "BANANA PEPPERS: ";
            $var = $_POST['banana-peppers'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "RED PEPPERS: ";
            $var = $_POST['red-peppers'];
            if($var != "none"){
                $order .= $var;
                $order .= ", ";
            }

            $order .= "JALAPENO PEPPERS: ";
            $var = $_POST['jalapeno-peppers'];
            if($var != "none"){
                $order .= $var;
                $order .= " ";
            }
            //echo($order);
        }
        $currUser = $_SESSION['email'];
        $price = 5;
        $dt = '2009-04-30 10:09:00';
        $ec = "15 minutes";

        $conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);


        $SELECT = "SELECT user_id FROM users WHERE email = ? LIMIT 1";
        $stmnt = $conn->prepare($SELECT);
        $stmnt->bind_param("s", $currUser);
        $stmnt->execute();
        //$stmnt->bind_result($currUser);
        $result = $stmnt->get_result();
        $r = $result->fetch_array(MYSQLI_ASSOC);
        $userId = $r['user_id'];

        $INSERT = "INSERT Into orders (details,price,estimated_completion,user_id) values(?,?,?,?)";
        $stmnt = $conn->prepare($INSERT);
        $stmnt->bind_param("sisi", $order, $price, $ec, $userId);
        $stmnt->execute();


        $SELECT = "SELECT order_id FROM orders WHERE user_id = ? LIMIT 1";
        $stmnt1 = $conn->prepare($SELECT);
        $stmnt1->bind_param("s", $userId);
        $stmnt1->execute();
        $result1 = $stmnt1->get_result();
        $r1 = $result1->fetch_array(MYSQLI_ASSOC);
        $orderId = $r1['order_id'];

        $UPDATE = "UPDATE users SET past_orders=".$orderId." WHERE user_id=".$userId."";
        $stmnt1 = $conn->prepare($UPDATE);
        $stmnt1->execute();


        $conn->close();
        $stmnt->close();
        $stmnt1->close();
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
        <?php include 'htmlHead.php';?>
        <title><?=$companyName->contents?> | Order</title>
        <meta name="description" content="">
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