<nav>
    <div class="home_link">
    <a style="text-decoration: none;" href="index.php">
    
        <img style="height: 100px" src="img/untitled_logo.png">
        <h1><span style="color: #3D3D3D; font-size: 1.3em;">[</span>Untitled<span style="color: #3D3D3D; font-size: 1.3em;">]</span> Pizza Online </h1>
    </a>
    </div>
    <a class="rightNavLinks" href="sign_in.php">Sign in</a>
<nav>
    <div class="home_link">
    <a style="text-decoration: none;" href="index.php">
    
        <img style="height: 100px" src="img/untitled_logo.png">
        <h1><span style="color: #3D3D3D; font-size: 1.3em;">[</span>Untitled<span style="color: #3D3D3D; font-size: 1.3em;">]</span> Pizza Online </h1>
    </a>
    </div>
    <?php 
    session_start();
    if(isset($_SESSION['email']))
    {
    	echo "Hello " . $_SESSION['email'] . ".<br>";;
    }
    else
    {
    	echo '<a class="rightNavLinks" href="sign_in.php">Sign in</a>';

    }
    ?>
</nav>
