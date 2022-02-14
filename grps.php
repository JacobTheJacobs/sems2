<?php
if (isset($_POST['submit'])) {
    //grps
    $sn_num = $_POST['gprs_sn_number'];
    $gprs_date = $_POST['gprs_gprs_date'];
    $po_number = "";
    $gprs_description = "";
    //check if not null then get the values
    if (!empty($_POST['gprs_po_number'])) {
        $po_number = $_POST['gprs_po_number'];
    }
    if (!empty($_POST['gprs_description'])) {
        $gprs_description = $_POST['gprs_description'];
    }


    //make conncetion to database
    $conn = new mysqli('localhost', 'root', '', 'ge');
    //insert all the values into the database

    //check if the sn_num is already in the database
    $sql = "SELECT * FROM `sem` WHERE `sn_num` = '$sn_num'";
    $result = $conn->query($sql);

    if ($result) {
        //update 
        $sql = "UPDATE `sem` SET 
        `gprs_date`='$gprs_date',
        `po_number`='$po_number',
        `gprs_description`='$gprs_description' WHERE `sn_num` = '$sn_num'";
    } else {
        //create new
        $sql = "INSERT INTO `sem`(`sn_num`, `gprs_date`, `po_number`, `gprs_description`) VALUES ('$sn_num','$gprs_date','$po_number','$gprs_description')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

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
                <input type="date" name="gprs_gprs_date" id="gprs_gprs_date" class="form-control" />
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