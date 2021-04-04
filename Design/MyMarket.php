<?php
if (!$Id) {
    header('Location: login.html');
} else {

    

    template_header('My Market', $Id);
echo <<<EOT
            <div class="container containerItems mt-4 mb-4 pt-4 pb-4">
                <ul class="nav nav-tabs">
                <li class="nav-item tabs">
                    <a class="nav-link active" href="Index?page=MyMarket&Id=$Id">My Market</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Index?page=MyProfile&Id=$Id">My Profile</a>
                </li>
                </ul>
                <div align='center' class="mb-3 mt-3"> 
                            <a type="button" class="btn btn-outline-primary btn-lg" id="submit" href="Index.php?page=AddProduct&Id=$Id">Add a Product
                            </a>
                        </div>
            </div>
            EOT;

template_footer();
};