<?php
if (!$Id) {
    header('Location: login.html');
} else {

template_header('Payment');

echo <<<EOT

<div class="MediumContainer containerItems">
    <div class="col-6">
        <div class="mt-4">
            <h2>Payment Information</h2>
            <hr> 
            <div class="col-xs-8">
               <label type="text" id="CardNum" name="CardNum" class="mb-2 mt-2"
                    aria-label="Card Number">Card Number :</label>
                    
            </div>
            <div class="form-row">
                <div class="col-xs-8">
                    <label type="text" id="NameDisp" name="NameDisp" class="mb-2 mt-2"
                        aria-label="NameDisp">Name Displayed</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-4">
                            <label type="text" class="" id="CVC" name="CVC">CVC</label>
                        </div>
                        <div class="form-group col-4">
                            <label id="Month" name="Month" class="">MM
                            </label>
                        </div>
                        <div class="form-group col-4">
                            <label type="text" class="mb-4" id="Year" name="Year">YYYY</label>
                        </div>
                    </div> 
        </div>
    </div>
</div>

<?=template_footer()?>