<?php

include 'functions.php';

?>

<?=template_header('Add Product')?>
<link rel="stylesheet" href="bootstrap5\Dropzone\dropzone.css">

<div class="MediumContainer containerItems mt-4 mb-4 pt-4 pb-4">
    <h2 align="center">Add a Product</h2>
    <hr>
    <div class="row">
        <div class="form-group col-6">
            <input type="text" id="Name" name="Name" class="form-control mb-4 mt-4" placeholder="Name"
                                aria-label="Name"></input>
        </div>
        <div class="form-group col-6">
            <select class="form-select mb-4 mt-4" name="Categorie" id="Categorie">
                <option value="">-Categorie-</option>
                <option value="Console">Console</option>
                <option value="Video-Game">Video Game</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-auto">
            <form action="functions.php" class="dropzone dztxt" id="dropzonefiles">
            Drag and Drop photos

            </form>
        </div>
        <div class="form-group col-auto">
            <form action="functions.php" class="dropzone dztxt" id="dropzonefiles">
            Drag and Drop videos
    
            </form>
        </div>
    </div>
    <div class="form-row">
        <div class="col-xs-8">
            <textarea id="Description" name="Description" class="form-control mb-4 mt-4" placeholder="Description"
                                aria-label="Description"></textarea>
        </div>
    </div>
    <div class="row">
            <div class="form-group col-6">
                    <input type="text" class="form-control mb-3" placeholder="Price" aria-label="Price">
            </div>
            <div class="form-group col-6">
                    <select class="form-select mb-3" name="Categorie" id="Categorie">
                        <option value="">-Option-</option>
                        <option value="Auction">Auction</option>
                        <option value="BuyItNow">Buy It Now</option>
                        <option value="BestOffer">Best Offer</option>
                    </select>                    
            </div>
    </div>
    <div align='center' class="mb-3 mt-3"> 
        <button type="button" class="btn btn-outline-primary btn-lg" id="submit">Upload my Product
        </button>
    </div>
</div>

<script>

$(document).ready(function(){

    Dropzone.options.dropzonefiles = {
        autoProcessQueue: False,
        acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
        init: function(){
            var submit_btn = document.querySelector('#submit');
            myDropzone = this;
            submit_btn.addEventListener("click", function(){
                myDropzone.processQueue();
            });

            this.on("complete", function(){
                if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
            {
                var _this = this;
                _this.removeAllfiles();
            }
            list_image();
            
            });
            
        },
    };

    list_image();

    function list_image()
    {
        $.ajax({
            url:"upload.php",
            success:function(data){
                $('#preview').html(data);
            }
        })
    }

});

</script>

<?=template_footer()?>
<script src="./Design/Bootstrap5/Dropzone/dropzone.js"></script>