<!DOCTYPE html>
<html>
<head>
    <title>[Untitled] Pizza | Home</title>
    <meta name="description" content="">
    <?php include 'htmlHead.php';?>
</head>
<body>
    <?php include 'nav.php' ?>

    <?php  
    require 'config.php';

    # Set New Colors
    if (isset($_POST['save'])) {
        # titleColor : #856850
        $titleColor = colorScheme::getByColor_Name("titleColor");
        $titleColor->color_hex = $_POST['titleColor'];
        $titleColor->update();
        # minorText : #705843
        $minorText = colorScheme::getByColor_Name("minorText");
        $minorText->color_hex = $_POST['minorText'];
        $minorText->update();
        # highlightMajor : #B89B82
        $highlightMajor = colorScheme::getByColor_Name("highlightMajor");
        $highlightMajor->color_hex = $_POST['highlightMajor'];
        $highlightMajor->update();
        # body : #E3E3E3
        $body = colorScheme::getByColor_Name("body");
        $body->color_hex = $_POST['body'];
        $body->update();
        # headColor : #C5C5C9
        $headColor = colorScheme::getByColor_Name("headColor");
        $headColor->color_hex = $_POST['headColor'];
        $headColor->update();
        # mainText : #3D3D3D
        $mainText = colorScheme::getByColor_Name("mainText");
        $mainText->color_hex = $_POST['mainText'];
        $mainText->update();
        # highlightMinor : #D9B79A
        $highlightMinor = colorScheme::getByColor_Name("highlightMinor");
        $highlightMinor->color_hex = $_POST['highlightMinor'];
        $highlightMinor->update();
    }

    # Restore Defaults
    if (isset($_POST['restore'])) {
        # titleColor : #856850
        $titleColor = colorScheme::getByColor_Name("titleColor");
        $titleColor->color_hex = '#856850';
        $titleColor->update();
        # minorText : #705843
        $minorText = colorScheme::getByColor_Name("minorText");
        $minorText->color_hex = '#705843';
        $minorText->update();
        # highlightMajor : #B89B82
        $highlightMajor = colorScheme::getByColor_Name("highlightMajor");
        $highlightMajor->color_hex = '#B89B82';
        $highlightMajor->update();
        # body : #E3E3E3
        $body = colorScheme::getByColor_Name("body");
        $body->color_hex = '#E3E3E3';
        $body->update();
        # headColor : #C5C5C9
        $headColor = colorScheme::getByColor_Name("headColor");
        $headColor->color_hex = '#C5C5C9';
        $headColor->update();
        # mainText : #3D3D3D
        $mainText = colorScheme::getByColor_Name("mainText");
        $mainText->color_hex = '#3D3D3D';
        $mainText->update();
        # highlightMinor : #D9B79A
        $highlightMinor = colorScheme::getByColor_Name("highlightMinor");
        $highlightMinor->color_hex = '#D9B79A';
        $highlightMinor->update();
    }

    ?>

    <div class="mainContainer">
    	<form action="" method="post">
    		<input type="text" minlength="7" name="titleColor" placeholder="#856850">
            <input type="text" minlength="7" name="minorText" placeholder="#705843">
            <input type="text" minlength="7" name="highlightMajor" placeholder="#B89B82">
            <input type="text" minlength="7" name="body" placeholder="#E3E3E3">
            <input type="text" minlength="7" name="headColor" placeholder="#C5C5C9">
            <input type="text" minlength="7" name="mainText" placeholder="#3D3D3D">
            <input type="text" minlength="7" name="highlightMinor" placeholder="#D9B79A">
    		<input type="submit" name="save" value="Save Changes">
            <input type="submit" name="restore" value="Restore Defaults">
    	</form>
    </div>

    <?php include 'footer.php' ?>
</body>
</html>