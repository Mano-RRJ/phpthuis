<?php

//print_r($_POST);

//echo "<img src='img/".$_POST['Schildpadden'].".jpg'>";

//print_r($_POST['Schildpadden']);

foreach ($_POST['Schildpadden'] as $Schildpad) {

    echo "<img src='img/".$Schildpad.".jpg'>";
}