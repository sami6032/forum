<?php
require('actions/securityAction.php');
require('actions/questions/myQuestionsAction.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php
    while ($question = $getAllMyQuestions->fetch()) {
    ?>
     <div class="card">
        <h5 class="card-header">Featured</h5>
        <?= $question['titre']; ?>
  <div class="card-body">
    <p class="card-text">
    <?= $question['description']; ?> 
    </p>
    <a href="#" class="btn btn-primary">Acceder à l'article</a>
    <a href="#" class="btn btn-warning">Modifier à l'article</a>
  </div>
</div>


    <?php




    }


    ?>
</body>

</html>