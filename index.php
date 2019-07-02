  <?php session_start()?><!DOCTYPE html>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Vidaloka&display=swap" rel="stylesheet"> 
          <link href="https://fonts.googleapis.com/css?family=Marcellus+SC&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC&display=swap" rel="stylesheet"> 
          <link href="https://fonts.googleapis.com/css?family=Vidaloka&display=swap" rel="stylesheet"> 
    <meta charset="utf-8">
  </head>
  <body>

  <?php 

    require_once 'database.php';
  ?>
  <nav class="navbar navbar-dark bg-dark ">
  <a class="navbar-brand" href="#">
  </ul>
    <ul class="nav navbar-nav flex-row justify ml-0">
        <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
        <li class="dropdown order-1">
            <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Connexion <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right mt-2">
                <li class="px-3 py-2">
                    <form class="form" role="form">
                        <div class="form-group">
                            <input id="emailInput" type="email" placeholder="Email" class="form-control form-control-sm" type="text"  required>
                        </div>
                        <div class="form-group">
                            <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn1 btn-primary btn-block">Se connecter</button> <br>
                        </div>
                        <div class="form-group text-center">
                            <small><a href="#" data-toggle="modal" data-target="#modalPassword">Mot de passe oublié ?</a></small> <br> <br>
                            <small><a href="#">Créer un compte</a></small>
                        </div>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
  </div>
  </div>
  </a>
  </nav>
  <nav class="navbar navbar-dark bg-dark ">
  <a class="navbar-brand" href="#"><h5>Sud Rail/ Lille</h5></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Acceuil<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="#">Collectif<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Liaisons metiers<span class="sr-only"></span></a>
          </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          RI & Statut
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Reglement interieur</a>
          <a class="dropdown-item" href="#">Statut du syndicat</a>
        </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Documentation
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Journal CSE</a>
            <a class="dropdown-item" href="#">Journal</a>
            <a class="dropdown-item" href="#">Tract</a>
          </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">RH<span class="sr-only"></span></a>
          </li>
    </ul>
  </div>
  </nav>
  <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
    <h3>Forgot password</h3>
    <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
  </div>
  <div class="modal-body">
    <p>Reset your password..</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
  </div>
  </div>
  </div>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
  <img class="d-block w-100" src="3.jpg" alt="First slide" height="300px;" class="carous">
  <div class="carousel-caption d-none d-md-block">
  <h5><button class="boutoncarousel">Voir les infos ville par ville</button></h5>
  <p>...</p>
  </div>
  </div>
  <div class="carousel-item">
  <img class="d-block w-100" src="3.jpg" alt="Second slide" height="300px;" class="carous">
  <div class="carousel-caption d-none d-md-block">
  <h5><button class="boutoncarousel">Voir le journal</button></h5>
  <p>...</p>
  </div>
  </div>
  <div class="carousel-item">
  <img class="d-block w-100" src="3.jpg" alt="Third slide" height="300px;" class="carous"> 
  <div class="carousel-caption d-none d-md-block">
  <h5><button class="boutoncarousel">Voir les prochains regroupements</button></h5>
  <p>...</p>
  </div>
  </div>
  </div>
  </div>



  <!-- 
  <div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  </div> -->


  <div id="ii">

  <div class="container">
  <div class="row">
  <div class="col-sm">
  <div class="card" style="width: 20rem;">
  <img src="9.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="#" class="btn btn-success"><h5 class="card-title">Mieux comprendre </h5></a><br><br>

  <p class="card-text">Information sur notre structure</p>

  </div>
  </div>
  </div>
  <div class="col-sm">
  <div class="card" style="width: 20rem;">
  <img src="manif.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="#" class="btn btn-success"><h5 class="card-title">Agenda</h5></a><br><br>

  <p class="card-text">2018/2019</p>

  </div>
  </div>
  </div>
  </div>
  </div>








  <div class="container">
  <div class="row">
  <div class="col-sm">
  <div class="card" style="width: 20rem;">
  <img src="Manif.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="#" class="btn btn-success"><h5 class="card-title">Prochaine Manifestation </h5></a><br><br>

  <p class="card-text">Date de nos prochain mouvement</p>
  </div>
  </div>
  </div>
  <div class="col-sm">
  <div class="card" style="width: 20rem;">
  <img src="9.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="#" class="btn btn-success"><h5 class="card-title">Historique</h5></a><br><br>

  <p class="card-text">Information sur notre Syndicat</p>
  </div>
  </div>
  </div>
  </div>
  </div>

  </div>


  <!-- Footer -->
  <footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container">

  <!-- Grid row-->
  <div class="row text-center d-flex justify-content-center pt-5 mb-3">

  <!-- Grid column -->
  <div class="col-md-2 mb-3">
  <h6 class="text-uppercase font-weight-bold">
  <a href="#!">Mentions legales</a>
  </h6>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-2 mb-3">
  <h6 class="text-uppercase font-weight-bold">
  <a href="#!">Informations juridique</a>
  </h6>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-2 mb-3">
  <h6 class="text-uppercase font-weight-bold">
  <a href="#!">Contactez-nous</a>
  </h6>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <!--  <div class="col-md-2 mb-3">
  <h6 class="text-uppercase font-weight-bold">
  <a href="#!">Help</a>
  </h6>
  </div> -->
  <!-- Grid column -->

  <!-- Grid column -->
  <!-- <div class="col-md-2 mb-3">
  <h6 class="text-uppercase font-weight-bold">
  <a href="#!">Contact</a>
  </h6>
  </div> -->
  <!-- Grid column -->

  </div>
  <!-- Grid row-->
  <hr class="rgba-white-light" style="margin: 0 15%;">

  <!-- Grid row-->
  <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

  <!-- Grid column -->
  <div class="col-md-8 col-12 mt-5">
  <h5 style="line-height: 1.7rem">Vous pouvez également nous suivre sur nos réseaux ! </h5> <br>
  <a href="#"><img src="facebook.svg" class="fb"></a> 

  <br>
  <br>

  </div>
  <!-- Grid column -->

  </div>
  <!-- Grid row-->
  <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">



  </div>
  <!-- Footer Links -->


  </footer>
  <!-- Footer -->

  <div class="container">

  <?php 
  $req = $db->query('SELECT * FROM users');

  $user = $req->fetch();

  ?>




  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>