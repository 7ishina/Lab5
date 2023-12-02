<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат анкеты</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $counterPoints = 0;
                          
    if($_POST['v3'] == 'Yes'){
       $counterPoints++;
    }
        
    if($_POST['v9'] == 'Yes'){
       $counterPoints++;
    }   
     
    if($_POST['v10'] == 'Yes'){
       $counterPoints++;
    }
     
    if($_POST['v13'] == 'Yes'){
       $counterPoints++;
    }
     
    if($_POST['v14'] == 'Yes'){
       $counterPoints++;
    }
     
    if($_POST['v19'] == 'Yes'){
       $counterPoints++;
    }   
     
    if($_POST['v1'] == 'No'){
       $counterPoints++;
    }
     
    if($_POST['v2'] == 'No'){
       $counterPoints++;
    }
     
    if($_POST['v4'] == 'No'){
       $counterPoints++;
    }   
        
    if($_POST['v5'] == 'No'){
       $counterPoints++;
    }   
     
    if($_POST['v6'] == 'No'){
       $counterPoints++;
    }   
        
    if($_POST['v7'] == 'No'){
       $counterPoints++;
    }   
        
    if($_POST['v8'] == 'No'){
       $counterPoints++;
    }
        
    if($_POST['v11'] == 'No'){
       $counterPoints++;
    }   
        
    if($_POST['v12'] == 'No'){
       $counterPoints++;
    }   
        
    if($_POST['v15'] == 'No'){
       $counterPoints++;
    }   
        
    if($_POST['v16'] == 'No'){
       $counterPoints++;
    }   
        
    if($_POST['v17'] == 'No'){
       $counterPoints++;
    }   
        
    if($_POST['v18'] == 'No'){
       $counterPoints++;
    }   
        
    if($counterPoints >= 15){
       $result = 'У Вас покладистый характер';
    } elseif($counterPoints < 15 && $counterPoints > 8){
       $result = 'Вы не лишены недостатков, но с вами можно ладить';
    } elseif($counterPoints < 8){
       $result = 'Вашим друзьям можно посочувствовать';
    }
    echo $name. ', Ваш результат: '. $result  ."<br>";
    echo 'Набранное количество баллов: '. $counterPoints;
}
    ?>
</body>
</html>
