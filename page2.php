<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
    </head>
    
    <?php require 'inc/header.php'; ?>
    <?php 
$show = false;
if (isset($_GET['background'])) {
    if ($_GET['background'] == 'yes') {
        $show = true;
    }else{
        if ($_GET['background'] == 'yes') {
            $show = true; 
         }
    }
}

if ($show == true) {
    echo '<style>body {background-color: grey;}</style>';
} else {
    echo '<style>body {background-color: white;}</style>';
}
?>


<?php 
//$_GET['round']
$show = false;
if (isset($_GET['round'])) {
    if ($_GET['round'] == 'yes') {
        $show = true;
    }else{
        if ($_GET['round'] == 'yes') {
            $show = true; 
         }
    }
}

if ($show == true) {
    include 'inc/round.html';
}
?>

<?php 
//$_GET['row1']
$show = false;
if (isset($_GET['row1'])) {
    if ($_GET['row1'] == 'yes') {
        $show = true;
    }else{
        if ($_GET['row1'] == 'yes') {
            $show = true; 
         }
    }
}

if ($show == true) {
    include 'inc/row1.html';
}
?>

<?php 
//$_GET['row2']
$show = false;
if (isset($_GET['row2'])) {
    if ($_GET['row2'] == 'yes') {
        $show = true;
    }else{
        if ($_GET['row2'] == 'yes') {
            $show = true; 
         }
    }
}

if ($show == true) {
    include 'inc/row2.html';
}
?>
<?php 
//$_GET['row3']
$show = false;
if (isset($_GET['row3'])) {
    if ($_GET['row3'] == 'yes') {
        $show = true;
    }else{
        if ($_GET['row3'] == 'yes') {
            $show = true; 
         }
    }
}

if ($show == true) {
    include 'inc/row3.html';
}
?>
<?php 
//$_GET['allRows']
$show = false;
if (isset($_GET['allRows'])) {
    if ($_GET['allRows'] == 'yes') {
        $show = true;
    }else{
        if ($_GET['allRows'] == 'yes') {
            $show = true; 
         }
    }
}

if ($show == true) {
    include 'inc/allRows.html';
}
?>

    <?php require 'inc/footer.php' ?>
    </body>
</html>