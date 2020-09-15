<DOCTYPE html>
    <html>
    <head>
        <title>PHP Opdrachten</title>
    </head>
    <body>
    <ul>
    <?php
    $sporten = [
        "handbal",
        "korfbal",
        "hockey",
        "schaatsen"
        ];

    shuffle($sporten);
    echo "<li>Er zijn ".count($sporten)." verschillende sporten in de array</li><br>";

    GeefArrayWeerAlsLijst($sporten);

    function GeefArrayWeerAlsLijst($arr) {
        foreach ($arr as $arr_element) {
            echo "<li>" . $arr_element . "</li><br>";
        }
    }

    telop(7,5);

    function telop($a, $b) {
        $c = $a + $b;
        echo $a. "+" .$b. "=" .$c;
    }
    ?>
    </ul>
    </body>
    </html>
</DOCTYPE>