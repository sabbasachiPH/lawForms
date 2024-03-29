<?php
include('functions/function.php');
if (isset($_GET['form7a_id'])) {
    $form7a_id = $_GET['form7a_id'];
    $existingData = pullForm7aData($form7a_id);
    /*   echo "<pre>";
    print_r($existingData);
    echo "<hr>";
    echo "<hr>";

    include('functions/connection.php');
    $sql = "SELECT * FROM `form7a` WHERE `form7a_id` = {$form7a_id}";
    $result = $conn->query($sql);

    while ($row = mysqli_fetch_array($result)) {
        print_r($row);
    }

    die;*/
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="form7a_viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form-7.a Demand Loan-Cash</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form action="functions/form7a.php" method="post">
        <table>
            <caption>
                Table-7.a Demand Loan-Cash
            </caption>
            <thead>
                <tr colspan="2">
                    <th>Sl. No.</th>
                    <th colspan="2">Description</th>
                    <th>Data</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th>1</th>
                    <th colspan="2">Nature Of Credit</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_natureOfCredit']; ?>" name="form7a_natureOfCredit" id="natureOfCredit" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="4">2</th>
                    <th rowspan="4">Notional Limit</th>
                    <th>Sanction Date</th>
                    <td>
                        <input type="date" value="<?php echo $existingData['form7a_notionalLimitSanctionDate']; ?>" name="form7a_notionalLimitSanctionDate" id="notionalLimitSanctionDate" />
                    </td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_notionalLimitAmount']; ?>" name="form7a_notionalLimitAmount" id="notionalLimitAmount" />
                    </td>
                </tr>
                <tr>
                    <th>Expiry</th>
                    <td>
                        <input type="date" value="<?php echo $existingData['form7a_notionalLimitExpiry']; ?>" name="form7a_notionalLimitExpiry" id="notionalLimitExpiry" />
                    </td>
                </tr>
                <tr>
                    <th>Sanctioning Authority</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_sanctioningAuthority']; ?>" name="form7a_sanctioningAuthority" id="sanctioningAuthority" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="7">3</th>
                    <th rowspan="7">Particulars Related to Letter of Credit</th>
                </tr>
                <tr>
                    <th>LC Number</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_lcNo']; ?>" name="form7a_lcNo" id="lcNo" />
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <input type="date" value="<?php echo $existingData['form7a_lcDate']; ?>" name="form7a_lcDate" id="lcDate" />
                    </td>
                </tr>
                <tr>
                    <th>Tenor</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_lcTenor']; ?>" name="form7a_lcTenor" id="lcTenor" />
                    </td>
                </tr>
                <tr>
                    <th>Value(FC)</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_lcValueFc']; ?>" name="form7a_lcValueFc" id="lcValueFc" />
                    </td>
                </tr>
                <tr>
                    <th>Value (BDT)</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_lcValueBdt']; ?>" name="form7a_lcValueBdt" id="lcValueBdt" />
                    </td>
                </tr>
                <tr>
                    <th>% Margin</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_lcMarginPercentage']; ?>" name="form7a_lcMarginPercentage" id="lcMarginPercentage" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="2">4</th>
                    <th rowspan="2">Document Received in Branch</th>
                    <th>Date</th>
                    <td>
                        <input type="date" value="<?php echo $existingData['form7a_dateDocumentReceivedInBranch']; ?>" name="form7a_dateDocumentReceivedInBranch" id="dateDocumentReceivedInBranch" />
                    </td>
                </tr>
                <tr>
                    <th>Value</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_documentValue']; ?>" name="form7a_documentValue" id="documentValue" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="4">5</th>
                    <th rowspan="4">Scrutiny of Documents</th>
                    <th>Lodgement Date</th>
                    <td>
                        <input type="date" value="<?php echo $existingData['form7a_lodgementDate']; ?>" name="form7a_lodgementDate" id="lodgementDate" />
                    </td>
                </tr>
                <tr>
                    <th>Date of Discrepency Notice</th>
                    <td>
                        <input type="date" value="<?php echo $existingData['form7a_dateDiscrepencyNotice']; ?>" name="form7a_dateDiscrepencyNotice" id="dateDiscrepencyNotice" />
                    </td>
                </tr>
                <tr>
                    <th>Due Date</th>
                    <td>
                        <input type="date" value="<?php echo $existingData['form7a_dueDate']; ?>" name="form7a_dueDate" id="dueDate" />
                    </td>
                </tr>
                <tr>
                    <th>Acceptance/Payment Date</th>
                    <td>
                        <input type="date" value="<?php echo $existingData['form7a_acceptancePaymentDate']; ?>" name="form7a_acceptancePaymentDate" id="acceptancePaymentDate" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="2">6</th>
                    <th rowspan="2">Creation of PAD</th>
                    <th>Date</th>
                    <td>
                        <input type="date" value="<?php echo $existingData['form7a_padCreatoionDate']; ?>" name="form7a_padCreatoionDate" id="padCreatoionDate" />
                    </td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_padAmount']; ?>" name="form7a_padAmount" id="padAmount" />
                    </td>
                </tr>

                <tr>
                    <th>7</th>
                    <th colspan="2">Source of Adjustment</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_sourceOfAdjustment']; ?>" name="form7a_sourceOfAdjustment" id="sourceOfAdjustment" />
                    </td>
                </tr>
                <tr>
                    <th>8</th>
                    <th colspan="2">Bill of Entry Matching Date</th>
                    <td>
                        <input type="date" value="<?php echo $existingData['form7a_billEntryMatchingDate']; ?>" name="form7a_billEntryMatchingDate" id="billEntryMatchingDate" />
                    </td>
                </tr>
                <tr>
                    <th>9</th>
                    <th colspan="2">Amount Since Adjusted</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_amountSinceeAdjusted']; ?>" name="form7a_amountSinceeAdjusted" id="amountSinceeAdjusted" />
                    </td>
                </tr>
                <tr>
                    <th>10</th>
                    <th colspan="2">Present outstanding</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_presentOutstanding']; ?>" name="form7a_presentOutstanding" id="presentOutstanding" />
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">11</th>
                    <th rowspan="2">Information of Forced Loan/Demand Loan</th>
                    <th>Date of Creation</th>
                    <td>
                        <input type="date" value="<?php echo $existingData['form7a_forcedLoanCreationDate']; ?>" name="form7a_forcedLoanCreationDate" id="forcedLoanCreationDate" />
                    </td>
                </tr>
                <tr>
                    <th>Reason for Creation</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_forcedLoanCreationReason']; ?>" name="form7a_forcedLoanCreationReason" id="forcedLoanCreationReason" />
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <th>12</th>
                    <th colspan="2">Date and Status of Classification</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_classificationStatus']; ?>" name="form7a_classificationStatus" id="classificationStatus" />
                    </td>
                </tr>
                <tr>
                    <th>13</th>
                    <th colspan="2">Litigable Amount</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_litigableAmount']; ?>" name="form7a_litigableAmount" id="litigableAmount" />
                    </td>
                </tr>
                <tr>
                    <th>14</th>
                    <th colspan="2">Rmarks</th>
                    <td>
                        <input type="text" value="<?php echo $existingData['form7a_remarks']; ?>" name="form7a_remarks" id="remarks" />
                        
                    </td>
                </tr>
                <tr><td><input type="hidden" value="<?php echo $existingData['form7a_id']; ?>" name="form7a_id" /></td></tr>
            </tbody>
        </table>
        <input type="submit" name="update7a" value="Update" id="remarks" />
    </form>

</body>

</html>