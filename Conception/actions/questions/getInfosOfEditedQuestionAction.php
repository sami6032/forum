<?php 
require('action/database.php');
 if (isset ($_GET ['id'])AND !empty($_GET ['id'])){
 
    $idOfQuestion = $_GET['id'];
    $checkIfQuestionExists = sbdd ->prepare ['SELECT * FROM questions WHERE id= ?'];
    $checkIfQuestionExists ->execute (array($idOfQuestion));

    if ($checkIfQuestionExists ->rowCount() >0 ){
$questionInfos = $checkIfQuestionExists->fetch();
if($questionInfos ['id_auteur']== $_SESSION['id']){
    $question_title = $questionInfos ['titre'];
    $question_description = $questionInfos ['description'];
    $question_content = $questionInfos ['contenu'];
    $question_date = $questionInfos ['date_publication'];
    
}else{
    $errormsg="vous n'êtes pas l'auteur de cette question !"
}
    }else{
        $errormsg='Question pas encore existante'
    }
 }
 else{
    $errormsg='Aucune question trouvée'
 }
?>