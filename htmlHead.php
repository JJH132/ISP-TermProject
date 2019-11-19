<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/default_style.css.php" media="screen">
<link rel="author" href="humans.txt">
<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates|Roboto&display=swap" rel="stylesheet">
<?php require 'config.php'; ?>
<?php 
$companyName = elements::getByName("company_name"); 
$icon = elements::getByName("icon_file_path")
?>
<link rel="icon" href="<?=$icon->contents?>" type="image/x-icon">