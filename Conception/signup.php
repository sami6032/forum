<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="row " style= "" >
            <div class="col-md-12 corppage ">
                <div class="card corpform">
                    <div class="card-header9">
                        <h4>Ajouter 
                            <a href="../index.php" class="btn  float-end"><strong>Retour</strong></a>
                        </h4>
                    </div>
                    <div class="card-body" style= "background-color: #D90000; " >
                        <form action="../php/code.php" method="POST" onsubmit="return confirmerModif();">

                            <div class="mb-3 ff">
                                <!-- <label> Nom</label> -->
                                <input type="text" name="nom" required placeholder="Entrer votre nom" class="form-control w-50px text-center">
                            </div>
                            <div class="mb-3">
                                <!-- <label>Prenom</label> -->
                                <input type="text" name="prenom" placeholder="Entrer votre prenom" class="form-control text-center">
                            </div>
                            <div class="mb-3">
                                <!-- <label>Date De Naissance</label> -->
                                <input type="date" name="date_de_naissance" placeholder="Entrer votre date de naissance" class="form-control text-center">
                            </div>
                            <div class="mb-3">
                                <!-- <label>Ville d'Origine</label> -->
                                <input type="text" name="ville_origine" placeholder="Entrer votre ville d'origine" class="form-control text-center">
                            </div>
                            <div class="mb-3">
                                <!-- <label>Formation de Base </label> -->
                                <input type="text" name="formation_de_base" placeholder="Entrer votre formation de base" class="form-control text-center">
                            </div>
                           
                            <div class="mb-3 text-center ">
                                <button type="submit" class="btn btn-light text-center" >ENVOYEZ</button>
                            </div>
                            </div>
                        </form>
                    
                </div>
            </div>
        </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>