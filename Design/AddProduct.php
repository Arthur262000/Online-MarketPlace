<?php
if (!$Id) {
    header('Location: login.html');
} else {

template_header('Add Product', $Id);

echo <<<EOT
                <link rel="stylesheet" href="bootstrap5\Dropzone\dropzone.css">
                    <script language="javascript" type="text/javascript">
                    function Categories(listindex)
                    {
                        document.getElementById("subcategory").length = 0;
                        switch (listindex)
                        {
                        case "Console" :
                            document.getElementById("subcategory").options[0]=new Option("-- Select Sub-Category --","");
                            document.getElementById("subcategory").options[1]=new Option("Playstation","Playstation");
                            document.getElementById("subcategory").options[2]=new Option("Xbox","Xbox");
                            document.getElementById("subcategory").options[3]=new Option("Nintendo","Nintendo");
                            document.getElementById("subcategory").options[4]=new Option("Other","Other");
                            break;
                        case "Video-Game" :
                            document.getElementById("subcategory").options[0]=new Option("-- Select Sub-Category --","");
                            document.getElementById("subcategory").options[1]=new Option("Action","Action");
                            document.getElementById("subcategory").options[2]=new Option("Adventure","Adventure");
                            document.getElementById("subcategory").options[3]=new Option("Battle","Battle");
                            document.getElementById("subcategory").options[4]=new Option("Sport","Sport");
                            break;
                        }
                        return true;
                    }
                    </script>
                <script language="javascript" type="text/javascript">
                    function SellOptions(listindex)
                    {
                        document.getElementById("option2").length = 0;
                        switch (listindex)
                        {
                        case "Auction" :
                            document.getElementById("option2").options[0]=new Option("-- Select Option 2 --","");
                            document.getElementById("option2").options[1]=new Option("Buy It Now","BuyItNow");
                            break;
                        case "BuyItNow" :
                            document.getElementById("option2").options[0]=new Option("-- Select Option 2 --","");
                            document.getElementById("option2").options[1]=new Option("Auction","Auction");
                            document.getElementById("option2").options[2]=new Option("Best Offer","BestOffer");
                            break;
                        case "BestOffer" :
                            document.getElementById("option2").options[0]=new Option("-- Select Option 2 --","");
                            document.getElementById("option2").options[1]=new Option("Buy It Now","BuyItNow");
                            break;
                        }
                        return true;
                    }
                    </script>
                <div class="MediumContainer containerItems mt-4 mb-4 pt-4 pb-4">
                    <h2 align="center">Add a Product</h2>
                    <hr>
                    <div class="row">
                        <div class="form-group col-4">
                            <input type="text" id="Name" name="Name" class="form-control mb-4 mt-4" placeholder="Name"
                                                aria-label="Name"></input>
                        </div>
                        <div class="form-group col-4">
                            <select class="form-select mb-4 mt-4" class="required-entry" name="Category" id="Category" onchange="javascript: Categories(this.options[this.selectedIndex].value);">
                                <option value="">-- Select Category --</option>
                                <option value="Console">Console</option>
                                <option value="Video-Game">Video Game</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                        <script type="text/javascript" language="JavaScript">
                        document.write('<select class="form-select mb-4 mt-4" name="subcategory" id="subcategory"><option value="">-- Select Sub-Category --</option></select>')
                        </script>
                        <noscript>
                            <select class="form-select mb-4 mt-4" name="subcategory" id="subcategory">
                                <option value="">-- Select Sub-Category --</option>
                            </select>
                        </noscript>
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
                            <div class="form-group col-4">
                                    <input type="text" class="form-control mb-3" placeholder="Price" aria-label="Price">
                            </div>
                            <div class="form-group col-4">
                                    <select class="form-select mb-3" class="required-entry" name="Categorie" id="Categorie" onchange="javascript: SellOptions(this.options[this.selectedIndex].value);">
                                        <option value="">-- Select Option 1 --</option>
                                        <option value="Auction">Auction</option>
                                        <option value="BuyItNow">Buy It Now</option>
                                        <option value="BestOffer">Best Offer</option>
                                    </select>                    
                            </div>
                            <div class="form-group col-4">
                                <script type="text/javascript" language="JavaScript">
                                document.write('<select class="form-select" name="option2" id="option2"><option value="">-- Select Option 2 --</option></select>')
                                </script>
                                <noscript>
                                <select class="form-select" name="option2" id="option2">
                                <option value="">-- Select Option 2 --</option>
                                </select>
                                </noscript>                 
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
                template_footer()
                <script src="./Design/Bootstrap5/Dropzone/dropzone.js"></script>

                EOT;

}?>