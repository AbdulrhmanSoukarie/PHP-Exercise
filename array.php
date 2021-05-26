<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>part 4</title>
</head>
<body>
<?php 
 $Multidimensional_Arrays  = array("musicals" => array ( "Oklahoma", "The Music Ma","South Pacific "),
 "dramas" => array ( "Lawrence of Arabia", "To Kill a Mockingbird","Casablanca") ,
 "mysteries" => array ( "The Maltese Falcon", "Rear Window ","North by Northwest") );
 
foreach($Multidimensional_Arrays as $i => $object){
     echo strtoupper resort($i);
     echo "<br>";
     echo "<br>";
     foreach($object as $j=> $object){
        echo "----> $j = $object";
        echo "<br>";
 }}
 ?>
</body>
</html>