<?php

    include "mysql/db.php";
    Connection();

    if(isset($_POST["submit"])){
        AddQuest();
    }

    SelectQuest();

    while($row = mysqli_fetch_assoc($result)){  
       $rowID = $row ["id"];
?>
    <div><?php echo htmlspecialchars($row['text'])?></div>
    <a href="otazka.php?id=<?php echo $rowID?>">Pridej komentar</a>
      
<?php 
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
 
 <form action="index.php" method="post">
     <textarea type="text" name="question" size="50" rows="5" placeholder="Zde napis otazku"></textarea>
     <input type="submit" name="submit" value="Odeslat">
 </form>
 <a href="prehled.php">Prehled vsech otazek</a>
 
 
</body>
</html>
