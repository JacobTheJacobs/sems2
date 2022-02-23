<?php

if (isset($_POST['submit'])) {


    $search_value = $_POST['search'];

    $conn = new mysqli('localhost', 'root', '', 'ge');

    if ($conn->connect_error) {
        echo 'Connection Faild: ' . $con->connect_error;
    } else {
        echo 'cool';
        //find all the sem num and po number 
        $sql = "SELECT * FROM `sem` WHERE `sn_num` = '$search_value'";
        $result = $conn->query($sql);
        //loop through all the results and display them
        while ($row = $result->fetch_assoc()) {

            echo " <br>";

            echo $row['sn_num'] . "<br>";

            echo $row['po_number'] . "<br>";

            echo $row['gprs_description'] . "<br>";

            echo $row['gprs_date'] . "<br>";
        }
    }
}

?>

<?php include "inc/header.php"; ?>


<div class="container box">
    <br />
    <h2 align="center">MultiCutting Edge System For Inventory Mangment Of Sem Boards</h2><br />

    <form action="" method="post" style="display: flex;
justify-content: center;">
        <div class="input-group mb-3">

            <input type="text" name="search">

            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" name="submit">Button</button>
            </div>

        </div>
    </form>
</div>

<?php include "inc/footer.php"; ?>