<?php
include('connection.php');

// insert data to table form7a
if (isset($_POST['submit7a'])) {
    // echo "<pre>";
    // print_r($_POST);
    // die;
    $form7a_natureOfCredit = $_POST['form7a_natureOfCredit'];
    $form7a_notionalLimitSanctionDate = $_POST['form7a_notionalLimitSanctionDate'];
    $form7a_notionalLimitAmount = $_POST['form7a_notionalLimitAmount'];
    $form7a_notionalLimitExpiry = $_POST['form7a_notionalLimitExpiry'];
    $form7a_sanctioningAuthority = $_POST['form7a_sanctioningAuthority'];
    $form7a_lcNo = $_POST['form7a_lcNo'];
    $form7a_lcDate = $_POST['form7a_lcDate'];
    $form7a_lcTenor = $_POST['form7a_lcTenor'];
    $form7a_lcValueFc = $_POST['form7a_lcValueFc'];
    $form7a_lcValueBdt = $_POST['form7a_lcValueBdt'];
    $form7a_lcMarginPercentage = $_POST['form7a_lcMarginPercentage'];
    $form7a_dateDocumentReceivedInBranch = $_POST['form7a_dateDocumentReceivedInBranch'];
    $form7a_documentValue = $_POST['form7a_documentValue'];
    $form7a_lodgementDate = $_POST['form7a_lodgementDate'];
    $form7a_dateDiscrepencyNotice = $_POST['form7a_dateDiscrepencyNotice'];
    $form7a_dueDate = $_POST['form7a_dueDate'];
    $form7a_acceptancePaymentDate = $_POST['form7a_acceptancePaymentDate'];
    $form7a_padCreatoionDate = $_POST['form7a_padCreatoionDate'];
    $form7a_padAmount = $_POST['form7a_padAmount'];
    $form7a_sourceOfAdjustment = $_POST['form7a_sourceOfAdjustment'];
    $form7a_billEntryMatchingDate = $_POST['form7a_billEntryMatchingDate'];
    $form7a_amountSinceeAdjusted = $_POST['form7a_amountSinceeAdjusted'];
    $form7a_presentOutstanding = $_POST['form7a_presentOutstanding'];
    $form7a_forcedLoanCreationDate = $_POST['form7a_forcedLoanCreationDate'];
    $form7a_forcedLoanCreationReason = $_POST['form7a_forcedLoanCreationReason'];
    $form7a_classificationStatus = $_POST['form7a_classificationStatus'];
    $form7a_litigableAmount = $_POST['form7a_litigableAmount'];
    $form7a_remarks = $_POST['form7a_remarks'];

    $sql = "INSERT INTO `form7a`(
        `form7a_natureOfCredit`,
        `form7a_notionalLimitSanctionDate`,
        `form7a_notionalLimitAmount`,
        `form7a_notionalLimitExpiry`,
        `form7a_sanctioningAuthority`,
        `form7a_lcNo`,
        `form7a_lcDate`,
        `form7a_lcTenor`,
        `form7a_lcValueFc`,
        `form7a_lcValueBdt`,
        `form7a_lcMarginPercentage`,
        `form7a_dateDocumentReceivedInBranch`,
        `form7a_documentValue`,
        `form7a_lodgementDate`,
        `form7a_dateDiscrepencyNotice`,
        `form7a_dueDate`,
        `form7a_acceptancePaymentDate`,
        `form7a_padCreatoionDate`,
        `form7a_padAmount`,
        `form7a_sourceOfAdjustment`,
        `form7a_billEntryMatchingDate`,
        `form7a_amountSinceeAdjusted`,
        `form7a_presentOutstanding`,
        `form7a_forcedLoanCreationDate`,
        `form7a_forcedLoanCreationReason`,
        `form7a_classificationStatus`,
        `form7a_litigableAmount`,
        `form7a_remarks`
        )
        VALUES(
        '$form7a_natureOfCredit',
        '$form7a_notionalLimitSanctionDate',
        '$form7a_notionalLimitAmount',
        '$form7a_notionalLimitExpiry',
        '$form7a_sanctioningAuthority',
        '$form7a_lcNo',
        '$form7a_lcDate',
        '$form7a_lcTenor',
        '$form7a_lcValueFc',
        '$form7a_lcValueBdt',
        '$form7a_lcMarginPercentage',
        '$form7a_dateDocumentReceivedInBranch',
        '$form7a_documentValue',
        '$form7a_lodgementDate',
        '$form7a_dateDiscrepencyNotice',
        '$form7a_dueDate',
        '$form7a_acceptancePaymentDate',
        '$form7a_padCreatoionDate',
        '$form7a_padAmount',
        '$form7a_sourceOfAdjustment',
        '$form7a_billEntryMatchingDate',
        '$form7a_amountSinceeAdjusted',
        '$form7a_presentOutstanding',
        '$form7a_forcedLoanCreationDate',
        '$form7a_forcedLoanCreationReason',
        '$form7a_classificationStatus',
        '$form7a_litigableAmount',
        '$form7a_remarks'
        )";
    // echo "<pre>";
    // print_r($sql);
    // die;

    $result = $conn->query($sql);

    if ($result == 1) {
        echo "Successfully Inserted!";
        header("Location: ../Table-7aDemandLoanCash.php");
    }


    // try {
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $conn->exec($sql);
    //     echo "New record created successfully";
    // } catch (PDOException $e) {
    //     echo $sql . "<br>" . $e->getMessage();
    // }
}

// edit data 

if (isset($_POST['update7a'])) {
    // echo "<pre>";
    // print_r($_POST);
    // die;
    $form7a_id                           = $_POST['form7a_id'];
    $form7a_natureOfCredit               = $_POST['form7a_natureOfCredit'];
    $form7a_notionalLimitSanctionDate    = $_POST['form7a_notionalLimitSanctionDate'];
    $form7a_notionalLimitAmount          = $_POST['form7a_notionalLimitAmount'];
    $form7a_notionalLimitExpiry          = $_POST['form7a_notionalLimitExpiry'];
    $form7a_sanctioningAuthority         = $_POST['form7a_sanctioningAuthority'];
    $form7a_lcNo                         = $_POST['form7a_lcNo'];
    $form7a_lcDate                       = $_POST['form7a_lcDate'];
    $form7a_lcTenor                      = $_POST['form7a_lcTenor'];
    $form7a_lcValueFc                    = $_POST['form7a_lcValueFc'];
    $form7a_lcValueBdt                   = $_POST['form7a_lcValueBdt'];
    $form7a_lcMarginPercentage           = $_POST['form7a_lcMarginPercentage'];
    $form7a_dateDocumentReceivedInBranch = $_POST['form7a_dateDocumentReceivedInBranch'];
    $form7a_documentValue                = $_POST['form7a_documentValue'];
    $form7a_lodgementDate                = $_POST['form7a_lodgementDate'];
    $form7a_dateDiscrepencyNotice        = $_POST['form7a_dateDiscrepencyNotice'];
    $form7a_dueDate                      = $_POST['form7a_dueDate'];
    $form7a_acceptancePaymentDate        = $_POST['form7a_acceptancePaymentDate'];
    $form7a_padCreatoionDate             = $_POST['form7a_padCreatoionDate'];
    $form7a_padAmount                    = $_POST['form7a_padAmount'];
    $form7a_sourceOfAdjustment           = $_POST['form7a_sourceOfAdjustment'];
    $form7a_billEntryMatchingDate        = $_POST['form7a_billEntryMatchingDate'];
    $form7a_amountSinceeAdjusted         = $_POST['form7a_amountSinceeAdjusted'];
    $form7a_presentOutstanding           = $_POST['form7a_presentOutstanding'];
    $form7a_forcedLoanCreationDate       = $_POST['form7a_forcedLoanCreationDate'];
    $form7a_forcedLoanCreationReason     = $_POST['form7a_forcedLoanCreationReason'];
    $form7a_classificationStatus         = $_POST['form7a_classificationStatus'];
    $form7a_litigableAmount              = $_POST['form7a_litigableAmount'];
    $form7a_remarks                      = $_POST['form7a_remarks'];

    $sql = "UPDATE form7a
            SET form7a_natureOfCredit = '$form7a_natureOfCredit',
                form7a_notionalLimitSanctionDate = '$form7a_notionalLimitSanctionDate',
                form7a_notionalLimitAmount = '$form7a_notionalLimitAmount',
                form7a_notionalLimitExpiry = '$form7a_notionalLimitExpiry',
                form7a_sanctioningAuthority = '$form7a_sanctioningAuthority',
                form7a_lcNo = '$form7a_lcNo',
                form7a_lcDate = '$form7a_lcDate',
                form7a_lcTenor = '$form7a_lcTenor',
                form7a_lcValueFc = '$form7a_lcValueFc',
                form7a_lcValueBdt = '$form7a_lcValueBdt',
                form7a_lcMarginPercentage = '$form7a_lcMarginPercentage',
                form7a_dateDocumentReceivedInBranch = '$form7a_dateDocumentReceivedInBranch',
                form7a_documentValue = '$form7a_documentValue',
                form7a_lodgementDate = '$form7a_lodgementDate',
                form7a_dateDiscrepencyNotice = '$form7a_dateDiscrepencyNotice',
                form7a_dueDate = '$form7a_dueDate',
                form7a_acceptancePaymentDate = '$form7a_acceptancePaymentDate',
                form7a_padCreatoionDate = '$form7a_padCreatoionDate',
                form7a_padAmount = '$form7a_padAmount',
                form7a_sourceOfAdjustment = '$form7a_sourceOfAdjustment',
                form7a_billEntryMatchingDate = '$form7a_billEntryMatchingDate',
                form7a_amountSinceeAdjusted = '$form7a_amountSinceeAdjusted',
                form7a_presentOutstanding = '$form7a_presentOutstanding',
                form7a_forcedLoanCreationDate = '$form7a_forcedLoanCreationDate',
                form7a_forcedLoanCreationReason = '$form7a_forcedLoanCreationReason',
                form7a_classificationStatus = '$form7a_classificationStatus',
                form7a_litigableAmount = '$form7a_litigableAmount',
                form7a_remarks = '$form7a_remarks'
            WHERE form7a_id = '$form7a_id'
    ";
    // echo "<pre>";
    // print_r($sql);
    // die;
    $result = $conn->query($sql);

    if ($result == 1) {
        echo "Updated Successfully !";
        header("Location: ../Table-7aDemandLoanCash.php");
    }

    // try {
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $conn->exec($sql);
    //     echo "Record Updated successfully";
    // } catch (PDOException $e) {
    //     echo $sql . "<br>" . $e->getMessage();
    // }
}
