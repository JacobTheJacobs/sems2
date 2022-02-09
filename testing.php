<div class="tab-pane fade" id="testing_details">
    <div class="panel panel-default">
        <div class="panel-heading">Testing Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Sem Serial Number</label>
                <input type="text" name="testing_sn_number" id="testing_sn_number" class="form-control" />
                <span id="error_sn" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Sem PO Number</label>
                <input type="text" name="testing_po_number" id="testing_po_number" class="form-control" />
                <span id="error_po" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Description</label>
                <input type="text" name="testing_description" id="testing_description" class="form-control" />
                <span id="error_description" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="testing_gprs_date" id="testing_gprs_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>MARLOG Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="testing_marlog_date" id="testing_marlog_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>SCAT Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="testing_scat_date" id="testing_scat_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Testing Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="testing_testing_date" id="testing_scat_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Testing Failed</label>
                <input type="checkbox" id="myCheck1" onclick="myFunction1()">
                <input type="text" name="testing_fail_description" class="form-control" id="testing_fail_description" style="display:none" />
            </div>
            <br />
            <div align="center">
                <button type="button" name="previous_btn_testing_details" id="previous_btn_testing_details" class="btn btn-default btn-lg">Previous</button>
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                <button type="button" name="btn_testing_details_next" id="btn_testing_details_next" class="btn btn-info btn-lg">Next</button>
            </div>
            <br />
        </div>
    </div>
</div>