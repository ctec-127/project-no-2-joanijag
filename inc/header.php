<body>
<?php 
        //$_GET['blueheader']
$show = false;
if (isset($_GET['blueHeader'])) {
    if ($_GET['blueHeader'] == 'yes') {
        $show = true;
    }else{
        if ($_GET['blueHeader'] == 'yes') {
            $show = true; 
         }
    }
}

if ($show == true) {
    echo '<header style="background-color:rgba(90, 132, 221, 0.904)">';
}else{
    echo '<header style="background-color: darkgrey;">';
}
?>
   
    <h1>Project No. 2</h1>
    <ul>
        <li><a href="page1.php">Home</a></li>
        <li><a href="page2.php">Play</a></li>
    </ul>  
</header>
<h1>HAPPY</h1>