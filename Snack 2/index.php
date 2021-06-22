<?php

echo '<pre>';
var_dump($_GET);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>

    <!-- Passare come parametri GET name, mail e age e verificare
    (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
    che mail contenga un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


    <form action="#" method="get">
        <p>Your name: <input type="text" name="name" id="name" placeholder="Name"></p>
        <p>Your age: <input type="text" name="age" id="age" placeholder="Age"></p>
        <p>E-mail: <input type="text" name="email" id="email" placeholder="Mail"></p>
    </form>

<?php
if (
    strlen($_GET["name"]) > 3 && is_numeric($_GET["age"]) && strrpos($_GET["mail"], "@", '.')
) echo 'Access granted';
 else {
    echo "Access denied";
}
?>

</body>
</html>
