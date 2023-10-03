<?php 
$data = file_get_contents('pizza.json');
$menu = json_decode($data ,true);

$menu = $menu["menu_pizza_hut"]["pizzas"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
        
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="https://upload.wikimedia.org/wikipedia/id/thumb/d/d2/Pizza_Hut_logo.svg/381px-Pizza_Hut_logo.svg.png?20150807124832" width="120">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
  
      </div>
    </div>
  </div>
</nav>

<div class="container">

    <div class="row mt-3">
        <div class="col">
            <h1>All Menu</h1>
        </div>
    </div>

    <div class="row">
        
    <?php foreach ($menu as $row) : ?>

        <div class="col-md-4">

            
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $row["gambar"] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["nama"] ?></h5>
                        <p class="card-text"><?php echo $row["deskripsi"] ?></p>
                        <h5>Rp. <?php echo $row["harga"] ?><</h5>
                        <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
            </div>
         
        </div>
        <?php endforeach; ?>

        
    </div>
</div>

</body>
</html>