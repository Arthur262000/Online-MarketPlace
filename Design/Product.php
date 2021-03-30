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

  <div class="container containerItems pt-4" style="width: 850px; margin-top:102px; margin-bottom:102px">
    <div id="Product">
      <div class="row m-2 align-items-center">
        <div class="col-6">
          <div class="colItems">
            <img src="PS5.png" alt="PS5">
            </div>
        </div>
        <div class="col-6">
                <h3>Product Name</h3>
                <hr>
                <h5>Description</h5>
                <br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <hr>
                <div class="row m-2">
                    <div class="col-6 text-center">
                    <h5>400$</h5>
                    </div>
                    <div class="col-6">
                    <button type="submit" class="btn btn-outline-primary">Add to Cart <img src="../Design/cart.svg"></button>
                    </div>
                </div>
          </div>
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