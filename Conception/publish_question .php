
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/publish.css">
</head>
<body>
<?php
 require_once "./actions/database.php";
 ?>
<form class="container" method="POST">
        <label>titre de la question</label>
        <input type="text" name ="title">
        <label>description de la question</label>
        <input type="text" name ="title">
        <label>contenu de la question</label>
        <input type="text" name ="title">
        <label>password</label>
        <input type="text" name ="password">
        
        <button type="submit" href="../index.php" name="validate"> s'inscrire</button>
    </form>
</body>
</html>