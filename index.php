<?php 
    $bdd = new PDO('mysql:host=localhost;dbname=carnetcontacts', 'root', '');
    if(isset($_POST['formSend']))
    {
        if(!empty($_POST['pseudo']) AND !empty($_POST['prenom']) AND !empty($_POST['pays'])
        AND !empty($_POST['genre']) AND !empty($_POST['email']) AND !empty($_POST['telephone'])
        AND !empty($_POST['datenaissance']) AND !empty($_POST['PhotoProfil']))
        {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $pays = htmlspecialchars($_POST['pays']);
            $genre = htmlspecialchars($_POST['genre']);
            $email = htmlspecialchars($_POST['email']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $datenaissance = htmlspecialchars($_POST['datenaissance']);
            $PhotoProfil = htmlspecialchars($_POST['PhotoProfil']);


            $Insertcontact = $bdd->prepare("INSERT INTO carnet(nom, prenom, pays, genre, email,
            telephone, datenaissance, PhotoProfil ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $Insertcontact->execute(array($name, $prenom, $pays, $genre, $email, $telephone, 
            $datenaissance, $PhotoProfil));
        }
        else
        {
            $erreur = "Veuillez remplir tous les champs";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet des Contacts</title>
    <link rel="stylesheet" href="CSS/style.css ">
    <!--<link rel="stylesheet" href="https://kamaleboletech.github.io/carnet-contacts-js/CSS/style.css ">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
</head>
<body>
    <div class="container">
        <div class="titre">
            <h1>Mes Contacts</h1>
            <button id="btn-Add" class="btnajout">Ajouter</button>
        </div>
        <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6 border-start">
                <div id="form" class="form-add d-none">
                    <h2>Ajouter un contact</h2>
                    <form action="" method="POST">
                        <div class="formcontents">
                            <div class="block">
                                <label for="name">Nom</label><br>
                                <input class="label" type="text" id="name" name="name" required>
                            </div>
                            <div class="block">
                                <label for="prenom">Prenom</label><br>
                                <input class="label" type="text" id="prenom" name="prenom" required><br>
                            </div>
                            <div class="block">
                                <label for="pays">Pays</label>
                                    <select class="label" id="pays" name ="pays" required>
                                            <option value="">Choisir</option>
                                            <option value="RDC">Congo DR</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Angola">Angola</option>
                                    </select> <br>
                            </div>
                            <div class="block">
                                <label for="genre">Genre</label><br>
                                    <select class="label" id="genre" name = "genre" required>
                                        <option value="">Choisir le genre</option>
                                        <option value="Feminin">Feminin</option>
                                        <option value="Masculin">Masculin</option>
                                    </select><br>
                            </div>
                            <div class="block">
                                <label for="mail">E-mail</label><br>
                                <input class="label" type="mail" id="mail" name="mail" required><br>
                            </div>
                            <div class="block">
                                <label for="phone">Telephone</label><br>
                                <input class="label" type="tel" id="phone" name="phone" required><br>
                            </div>
                            <div class="block"> 
                                <label for="datenaiss">Date de naissance</label><br>
                                <input class="label" type="date" id="datenaiss" name="datenaiss" required><br>
                            </div>                
                            <div class="block">
                                <label for="file-select">Photo profil du contact</label>
                                <input type="file" name="upload" id="file-select" name="file-select" accept="*.png|*.jpeg">
                            </div>
                            <div class="block">
                                <button id="btnsubmit" class="btnajoutercont" name="formSend">Ajouter contact</button>
                            </div>
                            <div class="block">
                                <button id="btnannuler" class="btnannuler" type="reset">Annuler</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
     <script src="JS/script.js"></script>
   
    <!--<script src="https://kamaleboletech.github.io/carnet-contacts-js/JS/script.js"></script>--> 
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>