<?=template_header('My Market', $Id)?>
<div class="container containerItems mt-4 mb-4 pt-4 pb-4">
    <ul class="nav nav-tabs">
    <li class="nav-item tabs">
        <a class="nav-link active" href="Index?page=MyMarket">My Market</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Index?page=MyProfile">My Profile</a>
    </li>
    </ul>
    <div align='center' class="mb-3 mt-3"> 
                <button type="button" class="btn btn-outline-primary btn-lg" id="submit">Add a Product
                </button>
            </div>

            <?php ?>
</div>

<?=template_footer()?>