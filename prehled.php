<?php
include "mysql/db.php";
Connection();

?>


<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>


<body>
   
   <h1>Prehled otazek</h1>
<?php 
    SelectQuest();
    
while($row = mysqli_fetch_assoc($result)){ 
    echo "<hr>";
    $resultQuest = $row ["text"];
    $idQuest = $row ["id"];
 echo $resultQuest;
    $query = "SELECT * FROM answers WHERE id_question=$idQuest";
    $result = mysqli_query($connection,$query);
    
while($row = mysqli_fetch_assoc($result)){ 
        echo "<hr>";
      $resultAnsw = $row ["text"];
    echo $resultAnsw;
}
}
    ?>
</body>
</html>
