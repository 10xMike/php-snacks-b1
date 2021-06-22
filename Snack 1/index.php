<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

<?php
$nba_matches = [
    [
        "HomeTeam" => "Golden State Warriors",
        "Guests" => "Sacramento Kings",
        "HomePoints" => "112",
        "GuestsPoints" => "98",
    ],
    [
        "HomeTeam" => "LA Clippers",
        "Guests" => "Los Angeles Lakers",
        "HomePoints" => "100",
        "GuestsPoints" => "79",
    ],
    [
        "HomeTeam" => "New York Knicks",
        "Guests" => "Chicago Bulls",
        "HomePoints" => "104",
        "GuestsPoints" => "99",
    ],
    [
        "HomeTeam" => "Brooklyn Nets",
        "Guests" => "Milwaukee Bucks",
        "HomePoints" => "111",
        "GuestsPoints" => "115",
    ],
    [
        "HomeTeam" => "Miami Heat",
        "Guests" => "Cleveland Cavaliers",
        "HomePoints" => "120",
        "GuestsPoints" => "114",
    ],
];

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

</body>
</html>