<?php

require('actions/database.php');

$getAllMyQuestions = $bdb->prepare('SELECT id, titre, description FROM questions WHERE id auteur ')

?>