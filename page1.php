<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>
    <?php require 'inc/header.php'; ?>
    <div id="welcome">
        <h2>Welcome to My Happy Little Web Page!</h2>
    </div>
    <div class="section1">
        <p>The object of this website is to display changes by passing parameters into the URL. <strong>Changes will be made on the <a class="a" href="page2.php" target="_blank">PLAY</a> page.</strong> In order to pass in individual parameters you will need to append the parameter to the end of the url that is there when the page loads.</p>
        <p>For example, you will add to the url <i>http://localhost/ctec127/projects/project-no-2-joanijag/page2.php</i><strong>(parameter goes here.)</strong><br>The first parameter must have a question mark <strong>?</strong> in front of it, with no spaces.<br>Additional parameters are added using the ampersand <strong>&</strong></p>
        <p>For example:<br><i>http://localhost/ctec127/projects/project-no-2-joanijag/page2.php</i><strong>?blueHeader=yes&background=yes&row1=yes</strong></p>
        <br>
        <a class="a" href="page2.php" target="_blank">PLAY</a>
        <br>
        <p><i>Be sure to add the question mark <strong>?</strong> and then the ampersand <strong>&</strong> for the parameters after it.</i></p>
        <p>To change the color of the header to blue, copy <strong>blueHeader=yes</strong> and paste it to the end of the url.</p>
        <p>To change the backgroud color to grey, copy <strong>background=yes</strong> and paste it to the end of the url.</p>
        <p>To display three images, copy <strong>row1=yes</strong> and paste it to the end of the url.</p>
        <p>To display three new images, copy <strong>row2=yes</strong> and paste it to the end of the url.</p>
        <p>To display three more new images, copy <strong>row3=yes</strong> and paste it to the end of the url.</p>
        <p>To display all of the images, copy <strong>allRows=yes</strong> and paste it to the end of the url.</p>
        <p>To make the image shapes oval, copy <strong>round=yes</strong> and paste it to the end of the url.</p>
        <p>To change the color of the footer to blue, copy <strong>blueFooter=yes</strong> and paste it to the end of the url.</p>
    </div>    
    <?php require 'inc/footer.php' ?>
</html>