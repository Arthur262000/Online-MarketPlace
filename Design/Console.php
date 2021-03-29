<?php
require_once("./php/Item.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InstantGaming | Console Section</title>
  <link rel="stylesheet" href="bootstrap5\css\bootstrap.css">
  <link rel="icon" href="favicon.ico"/>
</head>

<body>

  <!-- Structure -->
  <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a href="index.html">
          <img src="logo.svg" alt="Logo" style="width: 150px; padding: 2px 10px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="CategoriesDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Categories</a>
              <ul class="dropdown-menu" aria-labelledby="CategoriesDropdown">
                <li><a class="dropdown-item" href="Console.html" id="GamingConsoleDropdown" role="button"
                    data-toggle="modal" aria-expanded="false">Gaming Console</a></li>
                <ul>

                  <a class="dropdown-item" href="Console.html#Playstation">Playstation</a>
                  <a class="dropdown-item" href="Console.html#Xbox">Xbox</a>
                  <a class="dropdown-item" href="Console.html#Nintendo">Nintendo</a>
                  <a class="dropdown-item" href="Console.html#Other">Other</a>

                </ul>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="Video-game.html" class="dropdown-toggle" id="VideoGamesDropdown"
                    role="button" data-toggle="modal" aria-expanded="false">Video Games</a></li>
                <ul>

                  <a class="dropdown-item" href="Video-game.html#Action">Action</a>
                  <a class="dropdown-item" href="Video-game.html#Adventure">Adventure</a>
                  <a class="dropdown-item" href="Video-game.html#Battle">Battle</a>
                  <a class="dropdown-item" href="Video-game.html#Sport">Sport</a>

                </ul>

              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Sell.html">sell</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Account.html">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Cart.html"><img src="../Design/cart.svg"></a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>

  <div class="container containerItems pt-4 mt-4">
    <div id="Playstation">
      <h2>Playstation</h2>
      <hr>
      <div class="row m-2">
            <?php
            Item("Playstation 5"," ",499,"./upload/PS5.png");

            ?>
      </form>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="PS4-Slim.png" alt="PS4-Slim">
          </div>
          <div class="productCaption">
            <h5>Playstation 4 Slim</h5>
            <p>369.99$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="PS4.png" alt="PS4">
          </div>
          <div class="productCaption">
            <h5>Playstation 4</h5>
            <p>309.99$</p>
          </div>
        </div>
      </div>
      <div class="row m-2">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="PS3.png" alt="PS3">
          </div>
          <div class="productCaption">
            <h5>Playstation 3</h5>
            <p>119.90$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="PS2.png" alt="PS2">
          </div>
          <div class="productCaption">
            <h5>Playstation 2</h5>
            <p>86.98$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="PS1.png" alt="PS1">
          </div>
          <div class="productCaption">
            <h5>Playstation 1</h5>
            <p>79.99$</p>
          </div>
        </div>
      </div>
    </div>
    <div id="Xbox">
      <h2>Xbox</h2>
      <hr>
      <div class="row m-2">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="XBOX-SerieX.png" alt="XBOX-SerieX">
          </div>
          <div class="productCaption">
            <h5>XBOX Serie X</h5>
            <p>700.90$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="XBOX-One-S.png" alt="XBOX-One-S">
          </div>
          <div class="productCaption">
            <h5>XBOX One S</h5>
            <p>369.99$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="XBOX-One.png" alt="XBOX-One">
          </div>
          <div class="productCaption">
            <h5>XBOX One</h5>
            <p>309.90$</p>
          </div>
        </div>
      </div>
      <div class="row m-2">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="XBOX-360.png" alt="XBOX-360">
          </div>
          <div class="productCaption">
            <h5>XBOX 360</h5>
            <p>119.95$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="XBOX-1.png" alt="XBOX-1">
          </div>
          <div class="productCaption">
            <h5>XBOX 1st Generation</h5>
            <p>69.99$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="XBOX-One.png" alt="XBOX-One">
          </div>
          <div class="productCaption">
            <h5>XBOX One</h5>
            <p>305.99$</p>
          </div>
        </div>
      </div>
    </div>
    <div id="Nintendo">
      <h2>Nintendo</h2>
      <hr>
      <div class="row m-2">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-Switch-Lite.png" alt="Nintendo-Switch-Lite">
          </div>
          <div class="productCaption">
            <h5>Nintendo Switch Lite</h5>
            <p>119.90$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-Switch.png" alt="Nintendo-Switch">
          </div>
          <div class="productCaption">
            <h5>Nintendo Switch</h5>
            <p>259.98$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-Wii-U.png" alt="Nintendo-Wii-U">
          </div>
          <div class="productCaption">
            <h5>Nintendo Wii U</h5>
            <p>119.90$</p>
          </div>
        </div>
      </div>
      <div class="row m-2">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-Wii.png" alt="Nintendo-Wii">
          </div>
          <div class="productCaption">
            <h5>Nintendo Wii</h5>
            <p>89.95$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-3DS.png" alt="Nintendo-3DS">
          </div>
          <div class="productCaption">
            <h5>Nintendo 3DS</h5>
            <p>119.90$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-2DS.png" alt="Nintendo-2DS">
          </div>
          <div class="productCaption">
            <h5>Nintendo 2DS</h5>
            <p>125.90$</p>
          </div>
        </div>
      </div>
      <div class="row m-2">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-DS-Lite.png" alt="Nintendo-DS-Lite">
          </div>
          <div class="productCaption">
            <h5>Nintendo DS Lite</h5>
            <p>69.98$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-GameCube.png" alt="Nintendo-GameCube">
          </div>
          <div class="productCaption">
            <h5>Nintendo Game Cube</h5>
            <p>84.50$</p>
          </div>
        </div>
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="Nintendo-GameBoy.png" alt="Nintendo-GameBoy">
          </div>
          <div class="productCaption">
            <h5>Playstation 3</h5>
            <p>112.00$</p>
          </div>
        </div>
      </div>
    </div>
    <div id="Other">
      <h2>Other</h2>
      <hr>
      <div class="row m-2">
        <div class="col-md m-3 colItems">1</div>
        <div class="col-md m-3 colItems">2</div>
        <div class="col-md m-3 colItems">3</div>
      </div>
    </div>
  </div>



  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Form -->
      <section>
        <form>
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8 col-lg-8 col-md-8 col-sm-12">
              <!--Grid column-->
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
              <!-- Email input -->
              <div class="input-group">
                <input type="email" id="footerMail" class="form-control m-2" placeholder="Email adress"
                  aria-label="Email addess"></input>
                <button type="submit" class="btn btn-outline-primary m-2">
                  Subscribe
                </button>
              </div>
            </div>
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
    </div>
    <!-- Grid container -->
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0,1);">
      © 2021 Copyright :
      <a class="text-orange" href="index.html">InstantGaming.com</a>
    </div>
    <!-- Copyright -->
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>

</body>

</html>