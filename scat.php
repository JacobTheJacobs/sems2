<div class="tab-pane fade" id="scat_details">
    <div class="panel panel-default">
        <div class="panel-heading">SCAT Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Sem Serial Number</label>
                <input type="text" name="scat_sn_number" id="scat_sn_number" class="form-control" />
                <span id="error_sn" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Sem PO Number</label>
                <input type="text" name="scat_po_number" id="scat_po_number" class="form-control" />
                <span id="error_po" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Description</label>
                <input type="text" name="scat_gprs_description" id="gprs_description" class="form-control" />
                <span id="error_description" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="scat_gprs_date" id="scat_gprs_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>MARLOG Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="scat_marlog_date" id="scat_marlog_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>SCAT Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="scat_scat_date" id="scat_scat_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>SCAT SCRAP</label>
                <input type="checkbox" id="myCheck" onclick="myFunction()">
                <input type="text" name="scat_scrap_desc" class="form-control" id="scat_scrap_desc" style="display:none" />
            </div>
            <br />
            <div align="center">
                <button type="button" name="previous_btn_scat_details" id="previous_btn_scat_details" class="btn btn-default btn-lg">Previous</button>
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                <button type="button" style="display:inline" name="btn_scat_details_next" id="btn_scat_details_next" class="btn btn-info btn-lg">Next</button>
            </div>
            <br />
        </div>
    </div>
</div>