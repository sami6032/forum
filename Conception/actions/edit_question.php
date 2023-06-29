<?php
require ('actions/questions/getInfosOfEditedQuestionAction.php');
require ('actions/users/securityAction.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poser question</title>
    //head
    <?php include '' ?> 
</head>
<body>
    
//navbar
    <?php include '' ?> 

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'<p>';} ?>

    <?php 
    if (isset($question_date)){
   ?>

<form method="POST">
    
    <div>
        <label for=title class=form-label>Titre de la question</label>
        <input type="text" class=form-label name ="title" value=" <?=$question_title?>">
    </div>
    <div>
    <label for=description class=form-label>Description de la question</label>
        <input type="text" name ="description" class=form-label name ="title" value=" <?=$question_title?>">
    </div>

    <div>
        
        <label for=question>Contenu de la question</label>
        <textarea type="text" name="question" id="" cols="30" rows="10"></textarea>
    </div>

        <button type="submit" href="" name="validate"> Publier la question</button>
    </form>

    <?php 
     }
    ?>
</body>
</html>