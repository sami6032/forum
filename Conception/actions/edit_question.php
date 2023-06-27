<?php
require ('actions/questions/editQuestionAction.php');
require ('actions/users/securityAction.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    //head
    <?php include '' ?> 
</head>
<body>
    
//navbar
    <?php include '' ?> 

    <?php if(isset($errorMsg)){echo '<p>'.$errorMsg.'<p>';} ?>

    <?php 
    if (isset($question_date)){
    }?>

    //Formulaire publish-questions.php

    <?php 
    ?>
</body>
</html>