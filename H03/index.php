<DOCTYPE html>
    <html>
    <head>
        <title>PHP Opdrachten</title>
    </head>
    <body>

    <?php


    $i = 1;
    while($i<=10) {
        echo "<img src='img/Schildpadden/sp".$i.".jpg'>";
        $i++;
    }

    $bomen = [
        "deze gab.jpg",
        "dikke flap.jpg",
        "geel oortje.jpg",
        "grote boy.jpg",
        "opa friet.jpg"
    ];
    foreach($bomen as $boom) {
    echo "<img src='img/bomen/".$boom."'>";
    }

?>
    </body>
    </html>
