<?php
$users = [
    "pet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Opdrachten</title>
</head>
<body>


<?php

if (!isset($_POST['knop'])) {  ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD="post">
    Naam: <input type="text" name="emailadres" placeholder="emailadres"><br>
    Wachtwoord: <input type="password" name="wachtwoord" placeholder="wachtwoord"><br>
    <input type="submit" name="knop" value="Submit">
</form>

<?php
} else {
    if (!isset($_POST['emailadres']) OR empty($_POST['emailadres'])) {
        exit("nee niet cappen ga terug en zet je email.");
    }
    if (!isset($_POST['wachtwoord']) OR empty($_POST['wachtwoord'])) {
        exit("nee niet cappen ga terug en zet je wachtwoord.");
    }
    $emailadres = $_POST['emailadres'];
    $wachtwoord = $_POST['wachtwoord'];

    foreach ($users as $key => $value) {
        if($key == $emailadres AND $value == $wachtwoord) {
            exit("Welkom");
        }
    }
    exit("Sorry Geen toegang.");
}

?>