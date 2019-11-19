<?php 

$titleCode = elements::getByName("title_text");
$icon = elements::getByName("icon_file_path");

?>

<nav>
    <div class="home_link">
    <a style="text-decoration: none;" href="index.php">
    
        <img style="height: 100px" src="<?=$icon->contents?>">
        <h1><?=$titleCode->contents?></h1>
    </a>
    </div>
    <a class="rightNavLinks" href="sign_in.php">Sign in</a>
</nav>

<!-- <span style="color: #3D3D3D; font-size: 1.3em;">[</span>Untitled<span style="color: #3D3D3D; font-size: 1.3em;">]</span> Pizza Online  -->