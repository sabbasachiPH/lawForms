<?php
function pullForm7aData($id)
{
    include('connection.php');
    $sql = "SELECT * FROM `form7a` WHERE `form7a_id` = '$id'";
    $result = $conn->query($sql);

    $existingData = array();
    while ($row = mysqli_fetch_array($result)) {
        $existingData['row'] = $row;
    }
    $conn->close();
    return $existingData['row'];
}
