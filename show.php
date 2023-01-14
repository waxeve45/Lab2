<!DOCTYPE html>
<html>
<body>
<?php 
    $prefix = $_GET["prefix"];
    $name = $_GET["name"];
    $age = $_GET["age"];
    $sex = $_GET["sex"];
    $status = $_GET["status"];
 
    
    echo "Name:".$prefix.$name."<br>";
    echo "Age:".$age."<br>";
    echo "sex:".$sex."<br>";
    echo "status:".$status."<br>";

?>

</body>
</html>
