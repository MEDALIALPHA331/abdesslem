<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Freelance</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navigation">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">Freelance Typing</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/projet') }}">Nouvel Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/inscription') }}">Inscription</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/projet/liste') }}">Liste des Projets</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <main>
          @yield('contenu')
      </main>
      
      <footer>
        <div class="card text-center bg-dark text-white">
          <div class="card-header">
            Mis en exergue
          </div>
          <div class="card-body">
            <h5 class="card-title">Nous vous aidons à trouver un client ou un emploi</h5>
            <p class="card-text">&copy; Abdesslem Ben Ltaief TD2</p>
            <a href="{{ url('/inscription') }}" class="btn btn-primary">Inscrire au Platforme</a>
          </div>
          <div class="card-footer text-muted">
            il y a 2 jours
          </div>
        </div>
      </footer>
</body>
</html>