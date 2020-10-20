<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Opdrachten</title>
    <style>
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
        }
        td {
            padding: 20px;
        }
    </style>
</head>
<body>

<table>

<?php


$server = "localhost";
$dbname = "phpschool";
$username = "root";
$password = "";




try {
    $conn = new PDO("mysql:host={$server};port=3308;dbname={$dbname}", $username, $password);
    echo "Connected successfully";
} catch (PDOException $error) {
    echo "Connection failed: " . $error->getMessage();
}
$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query) or die ("Error 1.");
$stmt->execute() or die("Error 2.");

while ($array = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $array['cursistnr'] . "</td>";
    echo "<td>" . $array['naam'] . "</td>";
    echo "<td>" . $array['roepnaam'] . "</td>";
    echo "<td>" . $array['straat'] . "</td>";
    echo "<td>" . $array['postcode'] . "</td>";
    echo "<td>" . $array['plaats'] . "</td>";
    echo "<td>" . $array['geslacht'] . "</td>";
    echo "<td>" . $array['geb_datum'] . "</td>";
    echo "</tr>";
}

?>
</table>

</body>
</html>