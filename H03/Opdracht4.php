<DOCTYPE html>
        <html>
        <head>
            <title>PHP Opdrachten</title>
            <style>
                .red {
                    border: red solid 5px;
                }
                .green {
                    border: green solid 5px;
                }
            </style>
        </head>
        </html>
    </DOCTYPE>

<?php

for($i = 1; $i<=10 ;$i++) {
    if($i % 2 == 0) {
        $class = "class='red'";
    } else {
        $class = "class='green'";
    }
    echo "<img ".$class."src='img/Schildpadden/sp".$i.".jpg'>";
}
