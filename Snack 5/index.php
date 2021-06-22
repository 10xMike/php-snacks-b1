<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
$burnham = "Hello, my name is Bo Burnham. And I am a former comedian, turned social brand consultant. It’s a very exciting time to be a, uh, brand. It’s also a bit of a scary time because customers expect a lot more from their brands than they did in the past. During this incredibly necessary and overdue social reckoning that we’re having in our culture, it is no longer acceptable for brands to stay out of the conversation. Consumers want to know, “Are you willing to use your brand awareness to effect positive social change?” Which will create more brand awareness. The question I ask the brands I work with is, is, is, is, is, is, is, is, is, is… “Are you gonna be on the right side of history?”";
$burnhamArray = explode(".", $burnham);

echo "<pre>";
var_dump($burnham, $burnhamArray);
echo "</pre>";

echo "<div>" . $burnham . strlen($burnham) . "</div>";
?>

</body>
</html>