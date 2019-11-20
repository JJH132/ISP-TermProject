<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/default_style.css.php" media="screen">
<link rel="author" href="humans.txt">
<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates|Roboto&display=swap" rel="stylesheet">
<?php require 'config.php'; ?>
<?php 
{
$companyName = elements::getByName("company_name"); 
$icon = elements::getByName("icon_file_path");
$footerCode = elements::getByName("footer_text");
$companyName = elements::getByName("company_name");
$titleCode = elements::getByName("title_text");
}
# comment out upper block for localhost DO NOT COMMIT
// {
// $companyName->contents = '[Untitled] Pizza Online';
// $icon->contents = 'img/untitled_logo.png';
// $footerCode->contents = '[Untitled] Pizza Co.<br>
//         357 Alton St. | Brooklyn, NY <br>
//         (718) 634-5789 <br>
//         <a href="#">Instagram</a> | <a href="#">Facebook</a> <br>
//         MO & TU: 11:30 TO 10 PM <br>
//         WE & TH: 11:30 AM TO 10 PM <br>
//         FR & SA: 11:30 AM TO 11 PM <br>
//         SU: 12 PM TO 10 PM<br>';
// $titleCode->contents = '<span style="color: #3D3D3D; font-size: 1.3em;">[</span>Untitled<span style="color: #3D3D3D; font-size: 1.3em;">]</span> Pizza Online';
// }

?>
<link rel="icon" href="<?=$icon->contents?>" type="image/x-icon">