<?php
class Form7a
{
    //properties
    public $form7a_natureOfCredit;
    public $form7a_notionalLimitSanctionDate;
    public $form7a_notionalLimitAmount;
    public $form7a_notionalLimitExpiry;
    public $form7a_sanctioningAuthority;
    public $form7a_lcDate;
    public $form7a_lcTenor;
    public $form7a_lcValueFc;
    public $form7a_lcValueBdt;
    public $form7a_lcMarginPercentage;
    public $form7a_dateDocumentReceivedInBranch;
    public $form7a_documentValue;
    public $form7a_lodgementDate;
    public $form7a_dateDiscrepencyNotice;
    public $form7a_dueDate;
    public $form7a_acceptancePaymentDate;
    public $form7a_padCreatoionDate;
    public $form7a_padAmount;
    public $form7a_sourceOfAdjustment;
    public $form7a_billEntryMatchingDate;
    public $form7a_amountSinceeAdjusted;
    public $form7a_presentOutstanding;
    public $form7a_forcedLoanCreationDate;
    public $form7a_forcedLoanCreationReason;
    public $form7a_classificationStatus;
    public $form7a_litigableAmount;
    public $form7a_remarks;
}
include('connection.php');

if (isset($_POST['submit7a'])) {
    $form7a_natureOfCredit               = $_POST['form7a_natureOfCredit'];
    $form7a_notionalLimitSanctionDate    = $_POST['form7a_notionalLimitSanctionDate'];
    $form7a_notionalLimitAmount          = $_POST['form7a_notionalLimitAmount'];
    $form7a_notionalLimitExpiry          = $_POST['form7a_notionalLimitExpiry'];
    $form7a_sanctioningAuthority         = $_POST['form7a_sanctioningAuthority'];
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

    $sql = "INSERT INTO form7a (`form7a_natureOfCredit`, `form7a_notionalLimitSanctionDate`, `form7a_notionalLimitAmount`, `form7a_notionalLimitExpiry`, `form7a_sanctioningAuthority`, `form7a_lcDate`, `form7a_lcTenor`, `form7a_lcValueFc`, `form7a_lcValueBdt`, `form7a_lcMarginPercentage`, `form7a_dateDocumentReceivedInBranch`, `form7a_documentValue`, `form7a_lodgementDate`, `form7a_dateDiscrepencyNotice`, `form7a_dueDate`, `form7a_acceptancePaymentDate`, `form7a_padCreatoionDate`, `form7a_padAmount`, `form7a_sourceOfAdjustment`, `form7a_billEntryMatchingDate`, `form7a_amountSinceeAdjusted`, `form7a_presentOutstanding`, `form7a_forcedLoanCreationDate`, `form7a_forcedLoanCreationReason`, `form7a_classificationStatus`, `form7a_litigableAmount`, `form7a_remarks`)
            VALUES( 
form7a_natureOfCredit = '$form7a_natureOfCredit',
form7a_notionalLimitSanctionDate = '$form7a_notionalLimitSanctionDate',
form7a_notionalLimitAmount = '$form7a_notionalLimitAmount',
form7a_notionalLimitExpiry = '$form7a_notionalLimitExpiry',
form7a_sanctioningAuthority = '$form7a_sanctioningAuthority',
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
)";
    echo "<pre>";
    print_r($sql);
    die;
    $result = $conn->query($sql);

    if ($result == 1) {
        echo "Successfully Inserted!";
        header("Location: ../index.php");
    }

    // try {
    // include('connection.php');
    // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*$sql = $insert_query;
        echo "<pre>";
        echo $conn->exec($sql);
        die;
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    // $conn = null;

    // $result = $query($sql);
    // echo "<pre>";
    // print_r($sql);
    // die;

    /*
    echo $form7a_natureOfCredit;
    echo $form7a_notionalLimitSanctionDate;
    echo $form7a_notionalLimitAmount;
    echo $form7a_notionalLimitExpiry;
    echo $form7a_sanctioningAuthority;
    echo $form7a_lcDate;
    echo $form7a_lcTenor;
    echo $form7a_lcValueFc;
    echo $form7a_lcValueBdt;
    echo $form7a_lcMarginPercentage;
    echo $form7a_dateDocumentReceivedInBranch;
    echo $form7a_documentValue;
    echo $form7a_lodgementDate;
    echo $form7a_dateDiscrepencyNotice;
    echo $form7a_dueDate;
    echo $form7a_acceptancePaymentDate;
    echo $form7a_padCreatoionDate;
    echo $form7a_padAmount;
    echo $form7a_sourceOfAdjustment;
    echo $form7a_billEntryMatchingDate;
    echo $form7a_amountSinceeAdjusted;
    echo $form7a_presentOutstanding;
    echo $form7a_forcedLoanCreationDate;
    echo $form7a_forcedLoanCreationReason;
    echo $form7a_classificationStatus;
    echo $form7a_litigableAmount;
    echo $form7a_remarks;*/
}
