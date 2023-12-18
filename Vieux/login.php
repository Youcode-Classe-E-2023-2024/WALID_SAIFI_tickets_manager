<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page de Connexion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Connexion
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Entrez votre email">
            </div>
            <div class="mb-3">
              <label for="inputPassword" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="inputPassword" placeholder="Entrez votre mot de passe">
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Liens CDN Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8Yg0lBsGTF/cWsZP+R9dU5K3YB77FsapAnT44pKZmP7I8tEiMjtuX3aVTFSI" crossorigin="anonymous"></script>

</body>
</html>
