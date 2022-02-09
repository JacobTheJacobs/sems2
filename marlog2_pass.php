<div class="tab-pane fade" id="marlog2_pass_details">
    <div class="panel panel-default">
        <div class="panel-heading">MARLOG 2 Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label>Sem Serial Number</label>
                <input type="text" name="marlog2_sn_number" id="marlog2_sn_number" class="form-control" />
                <span id="error_sn" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Sem PO Number</label>
                <input type="text" name="marlog2_po_number" id="marlog2_po_number" class="form-control" />
                <span id="error_po" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Description</label>
                <input type="text" name="marlog2_description" id="marlog2_description" class="form-control" />
                <span id="error_description" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>GPRS Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog2_gprs_date" id="marlog2_gprs_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>MARLOG Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog2_marlog_date" id="marlog2_marlog_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>SCAT Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog2_scat_date" id="marlog2_scat_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Testing Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog2_testing_date" id="marlog2_testing_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label>Marlog 2 Date</label>
                <?php
                $a = date("Y-m-d");
                ?>
                <input type="date" name="marlog2_marlog2_date" id="marlog2_marlog2_date" class="form-control" value="<?php echo $a ?>" />
                <span id="error_date" class="text-danger"></span>
            </div>

            <br />
            <div align="center">
                <button type="button" name="previous_btn_marlog2_pass_details" id="previous_btn_marlog2_pass_details" class="btn btn-default btn-lg">Previous</button>
                <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Complete" />
                <button type="button" name="btn_marlog2_pass_details_next" id="btn_marlog2_pass_details_next" class="btn btn-info btn-lg">Next</button>
            </div>
            <br />
        </div>
    </div>
</div>