<div class="tab-pane active" id="gprs_details">
    <div class="panel panel-default">
        <div class="panel-heading">GPRS Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Sem Serial Number</label>
                <input type="text" name="gprs_sn_number" id="gprs_sn_number" class="form-control" />
                <span id="error_sn" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Sem PO Number</label>
                <input type="text" name="gprs_po_number" id="gprs_po_number" class="form-control" />
            </div>
            <div class="form-group">
                <label>GPRS Description</label>
                <input type="text" name="gprs_description" id="gprs_description" class="form-control" />
            </div>
            <div class="form-group">
                <label>GPRS Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="gprs_gprs_date" id="gprs_gprs_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_gprs_gprs_date" class="text-danger"></span>
            </div>
            <br />
            <div align="center">
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                <button type="button" name="next" id="btn_gprs_details_next" class="btn btn-info btn-lg">Next</button>
            </div>
            <br />
        </div>
    </div>
</div>