<?php
if (isset($_POST['submit'])) {
}

?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .box {
            width: 800px;
            margin: 0 auto;
        }

        .active_tab1 {
            background-color: #fff;
            color: #333;
            font-weight: 600;
        }

        .inactive_tab1 {
            background-color: #f5f5f5;
            color: #333;
            cursor: not-allowed;
        }

        .has-error {
            border-color: #cc0000;
            background-color: #ffff99;
        }
    </style>
</head>

<body>
    <div class="container box">
        <br />
        <h2 align="center">MultiCutting Edge System For Inventory Mangment Of Sem Boards</h2><br />
        <!--TABS-->
        <form action="index.php" method="post" id="sems_form">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active_tab1" style="border:1px solid #ccc" id="gprs_details_tab">GPRS </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="marlog_details_tab" style="border:1px solid #ccc">MARLOG </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="scat_details_tab" style="border:1px solid #ccc">SCAT </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="testing_details_tab" style="border:1px solid #ccc">Testing </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="marlog2_details_tab" style="border:1px solid #ccc">MARLOG2 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="gprsusr_details_tab" style="border:1px solid #ccc">GRPS2/USR </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="usr_repair_details_tab" style="border:1px solid #ccc">USR REPAIR </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active_tab1" id="marlog3_scrap_details_tab" style="border:1px solid #ccc">MARLOG3 </a>
                </li>
            </ul>
            <!--GPRS DETAILS-->
            <div class="tab-content" style="margin-top:16px;">
                <?php include 'grps.php'; ?>
                <!--MARLOG-->
                <?php include 'marlog.php'; ?>
                <!--SCAT-->
                <?php include 'scat.php'; ?>
                <!--Testing-->
                <?php include 'testing.php'; ?>
                <!--Marlog 2-->
                <?php include 'marlog2_pass.php'; ?>
                <?php include 'marlog2_fail.php'; ?>
                <!--GRPS/USR-->
                <?php include 'grps2.php'; ?>
                <?php include 'usr.php'; ?>
                <!--USR REPAIR-->
                <?php include 'usr_repair.php'; ?>
                <!--MARLOG 3-->
                <?php include 'marlog3.php'; ?>

                <?php include 'search.php'; ?>
            </div>
        </form>
    </div>
</body>

</html>

<script>
    var checIfFailedUsr = document.getElementById("usr_check_failed");
    var checIfFailed = document.getElementById("marlog2_check_failed");
    // Get the checkbox
    var checkBoxTesting = document.getElementById("myCheck1");
    // Get the output text
    var text = document.getElementById("testing_fail_description");


    var checkBoxRepair = document.getElementById("check_repair");
    var textRepair = document.getElementById("usr_repair_description");
    var btnRepair = document.getElementById("btn_usr_repair_details_next");

    function myFunction() {
        // Get the checkbox
        var checkBox = document.getElementById("myCheck");
        // Get the output text
        var text = document.getElementById("scat_scrap_desc");
        var btn = document.getElementById("btn_scat_details_next");
        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
            text.style.display = "block";
            btn.style.display = "none";
            //check the checIfFailed checkbox 
        } else {
            text.style.display = "none";
            btn.style.display = "inline";

        }
    }

    function myFunction1() {

        // If the checkbox is checked, display the output text
        if (checkBoxTesting.checked == true) {
            text.style.display = "block";
            checIfFailed.checked = true;
            checIfFailed.disabled = true;
            checIfFailedUsr.checked = true;
            checIfFailedUsr.disabled = true;
        } else {
            text.style.display = "none";
            checIfFailed.checked = false;
            checIfFailed.disabled = true;
            checIfFailedUsr.checked = false;
            checIfFailedUsr.disabled = true;
        }
    }

    function myFunction2() {


    }


    $(document).ready(function(e) {


        let sn_number;
        //------------------------------------------------------GPRS------------------------------------------------------
        $('#btn_gprs_details_next').click(function(e) {
            e.preventDefault();
            var error_sn = '';
            var error_date = '';


            if ($.trim($('#gprs_sn_number').val()).length == 0) {
                error_sn = 'Sem Number is required';
                $('#error_sn').text(error_sn);
                $('#gprs_sn_number').addClass('has-error');

            } else {
                sn_number = $('#gprs_sn_number').val();
                $('#marlog_sn_number').val(sn_number);
                $('#scat_sn_number').val(sn_number);
            }

            var valueDate = document.getElementById('gprs_gprs_date').value;

            if (!Date.parse(valueDate)) {
                error_date = 'Date is required';
                $('#error_gprs_gprs_date').text(error_date);
                $('#gprs_gprs_date').addClass('has-error');
                return;
            }



            if (error_sn != '') {
                return false;
            } else {
                $('#gprs_details_tab').removeClass('active active_tab1');
                $('#gprs_details_tab').removeAttr('href data-toggle');
                $('#gprs_details').removeClass('active');
                $('#gprs_details_tab').addClass('inactive_tab1');
                $('#marlog_details_tab').removeClass('inactive_tab1');
                $('#marlog_details_tab').addClass('active_tab1 active');
                $('#marlog_details_tab').attr('href', '#marlog_details');
                $('#marlog_details_tab').attr('data-toggle', 'tab');
                $('#marlog_details').addClass('active in');
            }

        });


        //------------------------------------------------------MARLOG------------------------------------------------------
        $('#previous_btn_marlog_details').click(function() {
            $('#marlog_details_tab').removeClass('active active_tab1');
            $('#marlog_details_tab').removeAttr('href data-toggle');
            $('#marlog_details').removeClass('active in');
            $('#marlog_details_tab').addClass('inactive_tab1');
            $('#gprs_details_tab').removeClass('inactive_tab1');
            $('#gprs_details_tab').addClass('active_tab1 active');
            $('#gprs_details_tab').attr('href', '#gprs_details');
            $('#gprs_details_tab').attr('data-toggle', 'tab');
            $('#gprs_details').addClass('active in');
        });


        $('#btn_marlog_details_next').click(function(e) {
            e.preventDefault();
            $('#marlog_details_tab').removeClass('active active_tab1');
            $('#marlog_details_tab').removeAttr('href data-toggle');
            $('#marlog_details').removeClass('active');
            $('#marlog_details_tab').addClass('inactive_tab1');
            $('#scat_details_tab').removeClass('inactive_tab1');
            $('#scat_details_tab').addClass('active_tab1 active');
            $('#scat_details_tab').attr('href', '#scat_details');
            $('#scat_details_tab').attr('data-toggle', 'tab');
            $('#scat_details').addClass('active in');

        });


        //------------------------------------------------------SCAT------------------------------------------------------
        $('#previous_btn_scat_details').click(function() {
            $('#scat_details_tab').removeClass('active active_tab1');
            $('#scat_details_tab').removeAttr('href data-toggle');
            $('#scat_details').removeClass('active in');
            $('#scat_details_tab').addClass('inactive_tab1');
            $('#marlog_details_tab').removeClass('inactive_tab1');
            $('#marlog_details_tab').addClass('active_tab1 active');
            $('#marlog_details_tab').attr('href', '#marlog_details');
            $('#marlog_details_tab').attr('data-toggle', 'tab');
            $('#marlog_details').addClass('active in');
        });


        $('#btn_scat_details_next').click(function(e) {
            e.preventDefault();
            $('#scat_details_tab').removeClass('active active_tab1');
            $('#scat_details_tab').removeAttr('href data-toggle');
            $('#scat_details').removeClass('active');
            $('#scat_details_tab').addClass('inactive_tab1');
            $('#testing_details_tab').removeClass('inactive_tab1');
            $('#testing_details_tab').addClass('active_tab1 active');
            $('#testing_details_tab').attr('href', '#scat_details');
            $('#testing_details_tab').attr('data-toggle', 'tab');
            $('#testing_details').addClass('active in');
        });



        //------------------------------------------------------TESTING------------------------------------------------------
        $('#previous_btn_testing_details').click(function() {
            $('#testing_details_tab').removeClass('active active_tab1');
            $('#testing_details_tab').removeAttr('href data-toggle');
            $('#testing_details').removeClass('active in');
            $('#testing_details_tab').addClass('inactive_tab1');
            $('#scat_details_tab').removeClass('inactive_tab1');
            $('#scat_details_tab').addClass('active_tab1 active');
            $('#scat_details_tab').attr('href', '#marlog_details');
            $('#scat_details_tab').attr('data-toggle', 'tab');
            $('#scat_details').addClass('active in');
        });

        $('#btn_testing_details_next').click(function(e) {
            e.preventDefault();
            if (checkBoxTesting.checked == true) {
                $('#testing_details_tab').removeClass('active active_tab1');
                $('#testing_details_tab').removeAttr('href data-toggle');
                $('#testing_details').removeClass('active');
                $('#testing_details_tab').addClass('inactive_tab1');
                $('#marlog2_details_tab').removeClass('inactive_tab1');
                $('#marlog2_details_tab').addClass('active_tab1 active');
                $('#marlog2_details_tab').attr('href', '#scat_details');
                $('#marlog2_details_tab').attr('data-toggle', 'tab');
                $('#marlog2_fail_details').addClass('active in');
            } else {
                $('#testing_details_tab').removeClass('active active_tab1');
                $('#testing_details_tab').removeAttr('href data-toggle');
                $('#testing_details').removeClass('active');
                $('#testing_details_tab').addClass('inactive_tab1');
                $('#marlog2_details_tab').removeClass('inactive_tab1');
                $('#marlog2_details_tab').addClass('active_tab1 active');
                $('#marlog2_details_tab').attr('href', '#scat_details');
                $('#marlog2_details_tab').attr('data-toggle', 'tab');
                $('#marlog2_pass_details').addClass('active in');
            }
        });


        //------------------------------------------------------MARLOG2------------------------------------------------------
        $('#previous_btn_marlog2_fail_details').click(function() {
            $('#marlog2_details_tab').removeClass('active active_tab1');
            $('#marlog2_details_tab').removeAttr('href data-toggle');
            $('#marlog2_fail_details').removeClass('active in');
            $('#marlog2_details_tab').addClass('inactive_tab1');
            $('#testing_details_tab').removeClass('inactive_tab1');
            $('#testing_details_tab').addClass('active_tab1 active');
            $('#testing_details_tab').attr('href', '#marlog_details');
            $('#testing_details_tab').attr('data-toggle', 'tab');
            $('#testing_details').addClass('active in');
        });

        $('#previous_btn_marlog2_pass_details').click(function() {
            $('#marlog2_details_tab').removeClass('active active_tab1');
            $('#marlog2_details_tab').removeAttr('href data-toggle');
            $('#marlog2_pass_details').removeClass('active in');
            $('#marlog2_details_tab').addClass('inactive_tab1');
            $('#testing_details_tab').removeClass('inactive_tab1');
            $('#testing_details_tab').addClass('active_tab1 active');
            $('#testing_details_tab').attr('href', '#marlog_details');
            $('#testing_details_tab').attr('data-toggle', 'tab');
            $('#testing_details').addClass('active in');
        });


        $('#btn_marlog2_fail_details_next').click(function(e) {
            e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

            $('#marlog2_details_tab').removeClass('active active_tab1');
            $('#marlog2_details_tab').removeAttr('href data-toggle');
            $('#marlog2_fail_details').removeClass('active');
            $('#marlog2_details_tab').addClass('inactive_tab1');
            $('#grpsusr_details_tab').removeClass('inactive_tab1');
            $('#grpsusr_details_tab').addClass('active_tab1 active');
            $('#grpsusr_details_tab').attr('href', '#scat_details');
            $('#grpsusr_details_tab').attr('data-toggle', 'tab');
            $('#usr_details').addClass('active in');

        });


        $('#btn_marlog2_pass_details_next').click(function(e) {
            e.preventDefault();

            $('#marlog2_details_tab').removeClass('active active_tab1');
            $('#marlog2_details_tab').removeAttr('href data-toggle');
            $('#marlog2_pass_details').removeClass('active');
            $('#marlog2_details_tab').addClass('inactive_tab1');
            $('#grpsusr_details_tab').removeClass('inactive_tab1');
            $('#grpsusr_details_tab').addClass('active_tab1 active');
            $('#grpsusr_details_tab').attr('href', '#scat_details');
            $('#grpsusr_details_tab').attr('data-toggle', 'tab');
            $('#gprs2_details').addClass('active in');


        });

        //------------------------------------------------------GPRS2------------------------------------------------------
        $('#previous_btn_gprs2_details').click(function() {
            $('#gprs2_details_tab').removeClass('active active_tab1');
            $('#gprs2_details_tab').removeAttr('href data-toggle');
            $('#gprs2_details').removeClass('active in');
            $('#gprs2_details_tab').addClass('inactive_tab1');
            $('#marlog2_details_tab').removeClass('inactive_tab1');
            $('#marlog2_details_tab').addClass('active_tab1 active');
            $('#marlog2_details_tab').attr('href', '#marlog_details');
            $('#marlog2_details_tab').attr('data-toggle', 'tab');
            $('#marlog2_pass_details').addClass('active in');
        });
        //------------------------------------------------------USR------------------------------------------------------
        $('#previous_btn_usr_details').click(function() {
            $('#usr_details_tab').removeClass('active active_tab1');
            $('#usr_details_tab').removeAttr('href data-toggle');
            $('#usr_details').removeClass('active in');
            $('#marlog2_details_tab').addClass('inactive_tab1');
            $('#marlog2_details_tab').removeClass('inactive_tab1');
            $('#marlog2_details_tab').addClass('active_tab1 active');
            $('#marlog2_details_tab').attr('href', '#marlog_details');
            $('#marlog2_details_tab').attr('data-toggle', 'tab');
            $('#marlog2_fail_details').addClass('active in');
        });

        $('#btn_usr_details_next').click(function(e) {
            e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

            $('#usr_details_tab').removeClass('active active_tab1');
            $('#usr_details_tab').removeAttr('href data-toggle');
            $('#usr_details').removeClass('active');
            $('#usr_details_tab').addClass('inactive_tab1');
            $('#usr_repair_details_tab').removeClass('inactive_tab1');
            $('#usr_repair_details_tab').addClass('active_tab1 active');
            $('#usr_repair_details_tab').attr('href', '#scat_details');
            $('#usr_repair_details_tab').attr('data-toggle', 'tab');
            $('#usr_repair_details').addClass('active in');
        });


        //------------------------------------------------------USR REPAIR------------------------------------------------------
        $('#previous_btn_usr_repair_details').click(function() {
            $('#usr_repair_details_tab').removeClass('active active_tab1');
            $('#usr_repair_details_tab').removeAttr('href data-toggle');
            $('#usr_repair_details').removeClass('active in');
            $('#usr_details_tab').addClass('inactive_tab1');
            $('#usr_details_tab').removeClass('inactive_tab1');
            $('#usr_details_tab').addClass('active_tab1 active');
            $('#usr_details_tab').attr('href', '#marlog_details');
            $('#usr_details_tab').attr('data-toggle', 'tab');
            $('#usr_details').addClass('active in');
        });

        $('#btn_usr_repair_details_next').click(function(e) {
            e.preventDefault();
            var error_first_name = '';
            var error_last_name = '';

            if (checkBoxRepair.checked == true) {


                $('#usr_repair_details_tab').removeClass('active active_tab1');
                $('#usr_repair_details_tab').removeAttr('href data-toggle');
                $('#usr_repair_details').removeClass('active');
                $('#usr_repair_details_tab').addClass('inactive_tab1');
                $('#gprs_details_tab').removeClass('inactive_tab1');
                $('#gprs_details_tab').addClass('active_tab1 active');
                $('#gprs_details_tab').attr('href', '#scat_details');
                $('#gprs_details_tab').attr('data-toggle', 'tab');
                $('#gprs_details').addClass('active in');
            } else {
                $('#usr_repair_details_tab').removeClass('active active_tab1');
                $('#usr_repair_details_tab').removeAttr('href data-toggle');
                $('#usr_repair_details').removeClass('active');
                $('#usr_repair_details_tab').addClass('inactive_tab1');
                $('#marlog3_scrap_details_tab').removeClass('inactive_tab1');
                $('#marlog3_scrap_details_tab').addClass('active_tab1 active');
                $('#marlog3_scrap_details_tab').attr('href', '#scat_details');
                $('#marlog3_scrap_details_tab').attr('data-toggle', 'tab');
                $('#marlog3_scrap_details').addClass('active in');
            }

        });

        //------------------------------------------------------MARLOG 3------------------------------------------------------

        $('#previous_btn_marlog3_scrap_details').click(function() {
            $('#marlog3_scrap_details_tab').removeClass('active active_tab1');
            $('#marlog3_scrap_details_tab').removeAttr('href data-toggle');
            $('#marlog3_scrap_details').removeClass('active in');
            $('#usr_repair_details_tab').addClass('inactive_tab1');
            $('#usr_repair_details_tab').removeClass('inactive_tab1');
            $('#usr_repair_details_tab').addClass('active_tab1 active');
            $('#usr_repair_details_tab').attr('href', '#marlog_details');
            $('#usr_repair_details_tab').attr('data-toggle', 'tab');
            $('#usr_repair_details').addClass('active in');
        });
    });
</script>