<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Tickets</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
        
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Mon Application</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Paramètres</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Mes Infos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Déconnexion</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <h2 class="text-center">Tableau des Tickets</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Date de Création</th>
                <th scope="col">Priorité</th>
                <th scope="col">Créateur</th>
                <th scope="col">Statut</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Vous devrez remplacer ces lignes avec des données réelles depuis votre base de données -->
            <tr>
                <th scope="row">1</th>
                <td>Titre 1</td>
                <td>Description 1</td>
                <td>2023-01-01 10:00:00</td>
                <td>Haute</td>
                <td>Créateur 1</td>
                <td>En cours</td>
                <td><button class="btn btn-danger">Opération</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Titre 2</td>
                <td>Description 2</td>
                <td>2023-01-02 12:30:00</td>
                <td>Moyenne</td>
                <td>Créateur 2</td>
                <td>Terminé</td>
                <td><button class="btn btn-danger">Opération</button></td>
            </tr>
            <!-- Ajoutez d'autres lignes en conséquence -->
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
