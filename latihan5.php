

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
        <script src="tes.js"></script>
        <script></script>
    <title>Rudini Movies</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
     <h1>RAJA FILM BIRU</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Search Movie </a>
      
      </div>
    </div>
  </div>
</nav>

<div class="container">

    <div class="row mt-3 justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Search Movie</h1>
            
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nama Film">
                <button class="btn btn-primary" type="button" id="search-button">Cari</button>
            </div>

        </div>
    </div>

    <div class="row" id="movie-list">

  
    </div>
</div>

</body>
</html>