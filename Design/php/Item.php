<?php

function Item($Name,$Description,$Price,$Image){
    $element='
    
    <form action="Console.php" method="POST">
        <div class="col-md m-3 Item">
          <div class="colItems">
            <img src="$Image" alt="$Name">
          </div>
          <div class="productCaption">
            <h5>$Name</h5>
            <p>$Price $</p>
          </div>
        </div>
      </form>';}

?>