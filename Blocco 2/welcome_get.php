<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>

<?php 


$guests = array("Mario", "Gabriella", "Federico", "Stefano");

if (in_array($_GET["name"], $guests)) {
    echo "Ok";
} else{
    echo "KO";
}
?>

</body>
</html>