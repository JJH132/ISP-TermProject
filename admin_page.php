<!DOCTYPE html>
<html>
<head>
    <?php include 'htmlHead.php';?>
    <title><?=$companyName->contents?> | Admin</title>
    <meta name="description" content="">
</head>
<body>
    <?php include 'nav.php' ?>

    <?php 

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

        # update Elements Table

        $titleCode = elements::getByName("title_text");
        $titleCode->contents = $_POST['title_code'];
        $titleCode->update();

        $footerCode = elements::getByName("footer_text");
        $footerCode->contents = $_POST['footer_code'];
        $footerCode->update();

        $companyName = elements::getByName("company_name");
        $companyName->contents = $_POST['company_name'];
        $companyName->update();
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

        # restore defaults Elements Table

        $titleCode = elements::getByName("title_text");
        $titleCode->contents = '<span style="color: #3D3D3D; font-size: 1.3em;">[</span>Untitled<span style="color: #3D3D3D; font-size: 1.3em;">]</span> Pizza Online';
        $titleCode->update();

        $footerCode = elements::getByName("footer_text");
        $footerCode->contents = '[Untitled] Pizza Co.<br>357 Alton St. | Brooklyn, NY <br>(718) 634-5789 <br><a href="#">Instagram</a> | <a href="#">Facebook</a> <br>MO & TU: 11:30 TO 10 PM <br>WE & TH: 11:30 AM TO 10 PM <br>FR & SA: 11:30 AM TO 11 PM <br>SU: 12 PM TO 10 PM<br>';
        $footerCode->update();

        $imgSrc = elements::getByName("icon_file_path");
        $imgSrc->contents = 'img/untitled_logo.png';
        $imgSrc->update();

        $companyName = elements::getByName("company_name");
        $companyName->contents = '[Untitled] Pizza Online';
        $companyName->update();
    }

    ?>

    <?php
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["img_path"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["save"])) {
        $check = getimagesize($_FILES["img_path"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists. File location updated in database";
        $imgSrc = elements::getByName("icon_file_path");
        $imgSrc->contents = $target_file;
        $imgSrc->update();
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["img_path"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img_path"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["img_path"]["name"]). " has been uploaded.";
            $imgSrc = elements::getByName("icon_file_path");
            $imgSrc->contents = $target_file;
            $imgSrc->update();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
    ?>

    <div class="mainContainer">
    	<form action="" method="post" enctype="multipart/form-data">
            <div class="flex-container">
                <div>
                    <span>Title Color</span><br>
                    <input type="text" onfocus="this.value='#'" maxlength="7" minlength="7" name="titleColor" placeholder="#856850" value="<?=colorScheme::getByColor_Name('titleColor')->color_hex;?>">
                    <br><span>Header Name</span>
                </div>
                <div>
                    <span>Minor Text</span><br>
                    <input type="text" onfocus="this.value='#'" maxlength="7" minlength="7" name="minorText" placeholder="#705843" value="<?=colorScheme::getByColor_Name('minorText')->color_hex;?>" >
                    <br><span>Footer Text, etc.</span>
                </div>
                <div>
                    <span>Highlight Major</span><br>
                    <input type="text" onfocus="this.value='#'" maxlength="7" minlength="7" name="highlightMajor" placeholder="#B89B82" value="<?=colorScheme::getByColor_Name('highlightMajor')->color_hex;?>" >
                    <br><span>Footer, Highlights</span>
                </div>
                <div>
                    <span>Body Color</span><br>
                    <input type="text" onfocus="this.value='#'" maxlength="7" minlength="7" name="body" placeholder="#E3E3E3" value="<?=colorScheme::getByColor_Name('body')->color_hex;?>" >
                    <br><span>Body Background</span>
                </div>
                <div>
                    <span>Head Color</span><br>
                    <input type="text" onfocus="this.value='#'" maxlength="7" minlength="7" name="headColor" placeholder="#C5C5C9" value="<?=colorScheme::getByColor_Name('headColor')->color_hex;?>" >
                    <br><span>Header Background</span>
                </div>
                <div>
                    <span>Main Text</span><br>
                    <input type="text" onfocus="this.value='#'" maxlength="7" minlength="7" name="mainText" placeholder="#3D3D3D" value="<?=colorScheme::getByColor_Name('mainText')->color_hex;?>" >
                    <br><span>Body Text Color</span>
                </div>
                <div>
                    <span>Highlight Minor</span><br>
                    <input type="text" onfocus="this.value='#'" maxlength="7" minlength="7" name="highlightMinor" placeholder="#D9B79A" value="<?=colorScheme::getByColor_Name('highlightMinor')->color_hex;?>" >
                    <br><span>Smaller Highlights</span>
                </div>
            </div>
            <div>
                <div><br>
                    <span>Company Name: HTML</span><br>
                    <textarea name="title_code" style="height: 75px; width: 500px;" placeholder="Enter HTML code here Will place insde a h1 tag"></textarea><br><br>
                </div>
                <div class="flex-container">
                    <div>
                        <span>Company Name: Plain Text</span><br>
                        <input type="text" name="company_name">
                    </div>
                    <div>
                        <span>Upload Icon</span><br>
                        <input type="file" id="img_path" name="img_path">
                    </div>
                </div>
                <div>
                    <span>Footer HTML</span><br>
                    <textarea name="footer_code" style="height: 250px; width: 500px;" placeholder="Enter HTML code here. Will place insde a div tag"></textarea>
                </div>
            </div>
    		<input type="submit" name="save" value="Save Changes">
            <input type="submit" name="restore" value="Restore Defaults">
    	</form>
    </div>

    <?php include 'footer.php' ?>
</body>
</html>
