<?php 
        //$_GET['blueFooter']
$show = false;
if (isset($_GET['blueFooter'])) {
    if ($_GET['blueFooter'] == 'yes') {
        $show = true;
    }else{
        if ($_GET['blueFooter'] == 'yes') {
            $show = true; 
         }
    }
}

if ($show == true) {
    echo '<footer style="background-color:rgba(90, 132, 221, 0.904)">';
}else{
    echo '<footer style="background-color: grey;">';
}
?>
    <p>This is my beautiful footer!</p>
    <p>I spent way too much time trying to style this little bastard.</p>
    <p>I finally had to throw in the towel because I am so freaking far behind.</p>
</footer>