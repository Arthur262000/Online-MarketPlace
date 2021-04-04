
<?=template_header('My Market')?>
<div class="container containerItems mt-4 mb-4 pt-4 pb-4">
    <ul class="nav nav-tabs">
    <li class="nav-item tabs">
        <a class="nav-link" href="Index?page=MyMarket">My Market</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="Index?page=MyProfile">My Profile</a>
    </li>
    </ul>
    <div class="row">
        <div class="form-group col-6">
        <div class="profile mt-4">
            <h2>Information</h2>
            <hr>
            <div class="form-row">
                            <input type="text" id="Name" name="Name" class="form-control mb-4 mt-4" placeholder="Name"
                                aria-label="Name"></input>
                        </div>
                    <div class="form-row">
                            <input type="text" id="BgColor" name="BgColor" class="form-control mb-4 mt-4" placeholder="Background Color"
                                aria-label="BgColor"></input>
                        </div>
                    </div>
                </div>
        <div class="form-group col-6 text-center mt-4">
            <div>
                <img src="Images/PP.png" alt="Profile Photo">
            </div>
        </div>
    </div>
</div>

<?=template_footer()?>