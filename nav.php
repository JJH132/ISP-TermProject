<nav>
    <div class="home_link">
    <a style="text-decoration: none;" href="index.php">    
        <img style="height: 100px" src="<?=$icon->contents?>">
        <h1><?=$titleCode->contents?></h1>
    </a>
<!-- <span style="color: #3D3D3D; font-size: 1.3em;">[</span>Untitled<span style="color: #3D3D3D; font-size: 1.3em;">]</span> Pizza Online  -->
    </div>
    <?php 
    if(!isset($_SESSION))
    {
    	    session_start();
    }
    	echo '<a class="rightNavLinks" href="order.php">Order </a>';
    	echo '<a class="rightNavLinks" href="aboutus.php">About Us</a>';
    	echo '<a class="rightNavLinks" href="contactus.php">Contact Us</a>';
    	echo '<a class="rightNavLinks" href="accountdetails.php">Account Details</a>';
    if(isset($_SESSION['email']))
	    {

	    	echo '<a class="rightNavLinks"> Hello ' . $_SESSION['email'] . '.</a><br>';
	    	echo '<a class="rightNavLinks" href="logout.php">Log out </a>';
	    }
	    else
	    {
	    	echo '<a class="rightNavLinks" href="register_form.php">Sign up</a>';
	    	echo '<a class="rightNavLinks" href="sign_in.php">Sign in</a>';

	    }
    ?>
</nav>
