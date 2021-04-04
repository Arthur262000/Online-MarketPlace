<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'webmarket';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title, $Id) {
echo <<<EOT
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>InstantGaming | $title </title>
    <link rel="stylesheet" href="bootstrap5\css\bootstrap.css">
    <link rel="icon" href="favicon.ico"/>
</head>

<body>

    <!-- Navbar -->
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">   
            <a href="Index.php">
                    <img src="logo.svg" alt="Logo" style="width: 150px; padding: 2px 10px;">
                        </a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="CategoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                                <ul class="dropdown-menu" aria-labelledby="CategoriesDropdown">
                                    <li><a class="dropdown-item" href="Index.php?page=Console" id="GamingConsoleDropdown" role="button" data-toggle="modal" aria-expanded="false">Gaming Console</a></li>
                                        <ul>
                                            
                                            <a class="dropdown-item" href="Index.php?page=Console#Playstation">Playstation</a>
                                            <a class="dropdown-item" href="Index.php?page=Console#Xbox">Xbox</a>
                                            <a class="dropdown-item" href="Index.php?page=Console#Nintendo">Nintendo</a>
                                            <a class="dropdown-item" href="Index.php?page=Console#Other">Other</a>
                                        
                                        </ul>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="Index.php?page=Video-game" class="dropdown-toggle" id="VideoGamesDropdown" role="button" data-toggle="modal" aria-expanded="false">Video Games</a></li>
                                        <ul>
                                            
                                                <a class="dropdown-item" href="Index.php?page=Video-game#Action">Action</a>
                                                <a class="dropdown-item" href="Index.php?page=Video-game#Adventure">Adventure</a>
                                                <a class="dropdown-item" href="Index.php?page=Video-game#Battle">Battle</a>
                                                <a class="dropdown-item" href="Index.php?page=Video-game#Sport">Sport</a>
                                            
                                        </ul>
                                    
                                  </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="Index.php?page=MyMarket&Id=$Id">sell</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="Index.php?page=MyAccount&Id=$Id">Account</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="Index.php?page=Cart&Id=$Id"><img src="../Design/cart.svg"></a>
                              </li>
                            </ul>
                            <form class="d-flex" action="search.php" method="POST">
                              <input class="form-control me-2" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-primary" type="submit" >Search</button>
                    </form>
                </div>
            </div>
        </nav>             
    </div>     
EOT;
}


// Template footer
function template_footer() {
echo <<<EOT
<footer class="text-center text-white">
<div class="container-fluid containerfooter">
  <section>
    <form>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8 col-lg-8 col-md-8 col-sm-12">
          <p class="pt-2">
            <strong>Sign up for our newsletter</strong>
          </p>
          <div class="input-group">
            <input type="email" id="footerMail" class="form-control mb-4" placeholder="Email adress"
              aria-label="Email addess"></input>
            <button type="submit" class="btn btn-outline-primary mb-4">
              Subscribe
            </button>
          </div>
        </div>
      </div>
    </form>
  </section>
 </div> 
<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0,1);">
  © 2021 Copyright :
  <a class="text-orange" href="Index.php">InstantGaming.com</a>
</div>
<!-- Copyright -->
</footer>


    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>
EOT;
}

// Upload 

$folder_name = 'C:\wamp64\www\Online-MarketPlace\Design\Upload';

if(!empty($_FILES))
{
  $temp_file = $_FILES['file']['tmp_name'];
  $location = $folder_name . $_FILES['file']['name'];
  move_uploaded_file($temp_file, $location);

}

$result = array();

//$files = scandir('upload');

/*$output = '<div class="row">';

if(false !== $files)
{
  foreach($files as $file)
  {
    if('.' != $file && '..' != $file)
    {
      $output .= '<p>Success</p>';
    }
  }

}
$output .= '</div>';
echo $output;*/
?>