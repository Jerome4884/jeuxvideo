<!--- 
  Seule la page "Actus" Et la page "A propos" sont actives

- En appuyant sur "Se connecter" Vous êtes redirigé sur la page de login, sur vous avez rentré le bon login et mot de passe, votre connexion est enregistrée dans les cookies.

- Si vous n'entrez pas le bon login our mot de passe, un message d'erreur apparaît avec le modèle d'alerte de Bootstrap.

- Une fois connecté, sur le menu apparaît 2 nouveaux liens, les "notes" qui vous redirige ici, ainsi que la possibilité d'Ajouter un article. Le bouton "Se connecter" change et devient "Se déconnecter" qui aura pour effet d'éffacer votre cookie de connexion.

- Une fois déconnecté ou bien sans être connecté, vous n'avez plus la possibilité d'Ajouter un article.


Rappel:
Documentation sur les cookies ici: https://www.w3schools.com/php/php_cookies.asp
Un cookie peut être supprimé en définissant sa durée à une date antérieure : "setcookie("nom du cookie", "", time() - 3600);"

-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Vidéo-Jeux.com</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="index.php"><img src="assets/game-controller-155530__340.webp" alt="logo" width="20%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="index.php">Actus <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Nouveautés</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Forum</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="propos.php">A propos de nous</a>
            </li>
                    </ul>
                <a href="login_J-V.php" class="btn btn-outline-light my-2 my-sm-0">Se connecter</a>
                </div>
        </div>
    </nav>    
    <main class="container mt-5">
        <h2>Bienvenue sur le site de jeux vidéo le plus cool de la galaxie !</h2>
        <p>Nous sommes là pour te donner les dernières nouvelles, les meilleurs conseils et les critiques les plus fiables sur les jeux les plus incroyables. Que tu sois un joueur occasionnel ou un hardcore gamer, nous avons tout ce qu'il te faut. Alors prépare tes manettes et prépare-toi à vivre des aventures épiques !</p>
        <h2 class="my-4">Dernières actus</h2>
        <div class="d-flex flex-wrap">
                    <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src="assets/Zelda63da70d832606.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">The Legend of Zelda: Breath of the Wild</h5>
                    <p class="card-text">Un jeu d&#039;action-aventure en monde ouvert qui se déroule dans un univers fantastique. Il a été largement loué pour son approche inventive du genre, sa vaste zone de jeu, ses personnages attachants et ses puzzles stimulants.</p>
                    <p><i>Note: 9/10</i></p>
                    <a href="#" class="btn btn-primary">Voir l'article complet</a>
                </div>
            </div>
                    <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src="assets/red-dead63da715fc91d2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Red Dead Redemption 2</h5>
                    <p class="card-text">Un jeu d&#039;action-aventure en monde ouvert qui se déroule dans l&#039;Ouest sauvage américain. Il a été salué pour sa narration captivante, son monde vivant et ses personnages riches et complexes.</p>
                    <p><i>Note: 9/10</i></p>
                    <a href="#" class="btn btn-primary">Voir l'article complet</a>
                </div>
            </div>
                    <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src="assets/gta63da71766af60.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Grand Theft Auto V</h5>
                    <p class="card-text">Un jeu d&#039;action-aventure en monde ouvert qui se déroule dans une ville fictive basée sur Los Angeles. Il est connu pour sa liberté dans les missions, son gameplay amusant et son monde ouvert immersif.</p>
                    <p><i>Note: 8/10</i></p>
                    <a href="#" class="btn btn-primary">Voir l'article complet</a>
                </div>
            </div>
                    <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src="assets/dark-soul63da718f52094.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Dark Souls III</h5>
                    <p class="card-text">Un jeu de rôle d&#039;action difficile qui se déroule dans un univers sombre et oppressant. Il est célèbre pour sa difficulté, son exploration passionnante et sa narration minimalistique.</p>
                    <p><i>Note: 9/10</i></p>
                    <a href="#" class="btn btn-primary">Voir l'article complet</a>
                </div>
            </div>
                    <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src="assets/minecraft63da71a6501a3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Minecraft</h5>
                    <p class="card-text">Un jeu de construction et de survie qui permet aux joueurs de construire et de créer librement dans un monde généré par ordinateur. Il est apprécié pour sa créativité illimitée et sa simplicité addictives.</p>
                    <p><i>Note: 8/10</i></p>
                    <a href="#" class="btn btn-primary">Voir l'article complet</a>
                </div>
            </div>
                    <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src="assets/mario63da71b9a77b4.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Super Mario Odyssey</h5>
                    <p class="card-text">Un jeu de plateforme en 3D qui suit Mario dans sa quête pour sauver la princesse Peach. Il est considéré comme l&#039;un des meilleurs jeux de plateforme de tous les temps, avec des niveaux colorés, des personnages attachants et des mécaniques de jeu amusantes.</p>
                    <p><i>Note: 9/10</i></p>
                    <a href="#" class="btn btn-primary">Voir l'article complet</a>
                </div>
            </div>
                </div>
    </main>
</body>
</html>