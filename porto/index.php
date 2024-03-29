<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Porfolio</title>
    <link rel="stylesheet" href="css/style.css" >

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- jumbotron -->
    <div class="jumbotron text-center">
      <img src="img/sandhika.png" class="img-circle">
      <h1>Sandhika Galih</h1>
      <p>Lecturer | Web Developer | YouTuber</p>
    </div>
    <!-- akhir jumbotron -->


    <!-- about -->
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">About</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5 col-sm-offset-1">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta aut fuga recusandae ad vero voluptates voluptatibus iusto expedita voluptas animi itaque, ratione commodi pariatur. Quia veniam hic eius iure quis.</p>
          </div>
          <div class="col-sm-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla ipsam, veritatis nesciunt eveniet voluptas labore quidem recusandae enim, repudiandae ab accusantium consectetur minus optio adipisci voluptates omnis consequuntur dolore qui?</p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir about -->

    <!-- Youtube dan IG -->

    <section class="social bg-light" id="social">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Social Media</h2>
          </div>
        </div>
        <!-- AIzaSyCCdNym578KnWIiwjePYXgraQR3cHSxPLQ -->
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-4">
              <img src="img/sandhika.png" widht="200" class="rounder-circle img-thumbnail">
              </div>
              <div class="col-md-8">
              <h5>Rudini Nor Habibi</h5>
              <p>70000 Subscribers.</p>
              </div>
            </div>
            <div class="row mt-3 pb-3">
              <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
                <div class="row">
                  <div class="col-md-4">
                  <img src="img/sandhika.png" widht="200" class="rounder-circle img-thumbnail">
                  </div>
                  <div class="col-md-8">
                    <h5>Rudini Nor Habibi</h5>
                    <p>70000 Followers.</p>
                    </div>
                </div>
                <div class="row mt-3 pb-3">
                  <div class="col">
                    <div class="ig-thumbnail">
                      <img src="img/portfolio/1.png" alt="">
                    </div>
                    <div class="ig-thumbnail">
                      <img src="img/portfolio/2.png" alt="">
                    </div>
                    <div class="ig-thumbnail">
                      <img src="img/portfolio/3.png" alt="">
                    </div>
                    <div class="ig-thumbnail">
                      <img src="img/portfolio/4.png" alt="">
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </section>

    <!-- portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Portfolio</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/1.png">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/2.png">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/3.png">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/4.png">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/5.png">
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/portfolio/6.png">
            </a>
          </div>
        </div>

      </div>
    </section>
    <!-- akhir portfolio -->


    <!-- contact -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Contact</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control" placeholder="masukkan nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="masukkan email">
              </div>
              <div class="form-group">
                <label for="telp">No Telepon</label>
                <input type="tel" id="telp" class="form-control" placeholder="masukkan no telepon">
              </div>
              <select class="form-control">
                <option>-- Pilih Kategori --</option>
                <option>Web Design</option>
                <option>Web Development</option>
              </select>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="10" placeholder="masukkan pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->

    
    <!-- footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2017 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="http://instagram.com/sandhikagalih">Sandhika Galih</a>.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <a href="http://youtube.com/webprogrammingunpas" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i> Subscribe to YouTube</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>




