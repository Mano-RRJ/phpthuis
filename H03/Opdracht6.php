<DOCTYPE html>
    <html>
    <head>
        <title>PHP Opdrachten</title>
        <style>

            table, tr, td {
                border: solid 1px white;
                border-collapse: collapse;
            }

            td {
                padding: 10px;
            }

            td.border {
                border:solid 1px grey;
            }

            body {
                text-align: center;
                font-family: sans-serif;
            }



        </style>
    </head>
    <body>

<!--    <tr>-->
<!--        <td>De Spartelkuikens 25</td>-->
<!--        <td>25</td>-->
<!--        <td class="borderless">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--        </td>-->
<!--    </tr>-->
<!---->
<!--    <tr>-->
<!--        <td>De Waterbuffels</td>-->
<!--        <td>32</td>-->
<!--        <td class="borderless">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--        </td>-->
<!--    </tr>-->
<!---->
<!--    <tr>-->
<!--        <td>Plonsmderin</td>-->
<!--        <td>11</td>-->
<!--        <td class="borderless">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--        </td>-->
<!--    </tr>-->
<!---->
<!--    <tr>-->
<!--        <td>Bommetje</td>-->
<!--        <td>23</td>-->
<!--        <td class="borderless">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--            <img src="//unsplash.it/30" alt="Zwemmer">-->
<!--        </td>-->
<!--    </tr>-->

<?php

$zwemclubs = [
"De Spartelkuikens" => 25,
"De Waterbuffels" => 32,
"Plonsmderin" => 11,
"Bommetje" => 23
];

echo '<table>';

    foreach ($zwemclubs as $clubnaam => $ledenaantal) {
    echo '<tr>';
        echo '<td class="border">' . $clubnaam . '</td>';
        echo '<td class="border">' . $ledenaantal . '</td>';
        $aantal_plaatjes = floor($ledenaantal / 5);
        echo '<td>';
            for ($i = 0 ; $i < $aantal_plaatjes ; $i++) {
            echo '<img src="//unsplash.it/30" alt="Zwemmer">';
            }
            echo '</td>';
        echo '</tr>';
    }
    echo'</table>';
?>

    </body>
    </html>
