<?php
// $idQuest = htmlspecialchars($_GET["id"]);
$idQuest = addslashes($_GET["id"]);
include "mysql/db.php";

Connection();

global $connection;
    global $result;
    $query = "SELECT * FROM questions WHERE id=$idQuest";
    $result = mysqli_query($connection,$query);
    
while($row = mysqli_fetch_assoc($result)){ 
        echo "<hr>";
      $resultQuest = htmlspecialchars($row ["text"]);}

print_r($resultQuest);

if(isset($_POST["submit"])){
    $answer = $_POST["answer"];
    $answer = addslashes($answer);
    $query = "INSERT INTO answers(id_question, text) VALUES('$idQuest', '$answer')";
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die("Nepodařilo se data zapsat do databáze.");
    } 

}

$query = "SELECT * FROM answers WHERE id_question=$idQuest";
    $result = mysqli_query($connection,$query);
    
while($row = mysqli_fetch_assoc($result)){ 
        echo "<hr>";
      $resultAnsw = htmlspecialchars($row ["text"]);
    echo $resultAnsw;
}
    
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
 
 <form action="otazka.php?id=<?php echo $idQuest; ?>" method="post">
     <textarea type="text" name="answer" size="50" rows="5" placeholder="Odpoved"></textarea>
     <input type="submit" name="submit" value="Odeslat">
     
 </form>
 
 
</body>
</html>