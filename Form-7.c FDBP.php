<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form-7.c FDBP</title>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <table>
      <caption>
        Form-7.c FDBP
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
            <input type="text" name="natureOfCredit" id="natureOfCredit" />
          </td>
        </tr>

        <tr>
          <th rowspan="4">2</th>
          <th rowspan="4">Particulars of Limit</th>
          <th>Sanction Date</th>
          <td>
            <input type="date" name="sanctionDate" id="sanctionDate" />
          </td>
        </tr>
        <tr>
          <th>Amount</th>
          <td>
            <input type="text" name="limitAmount" id="limitAmount" />
          </td>
        </tr>
        <tr>
          <th>Expiry</th>
          <td>
            <input type="date" name="limitExpiry" id="limitExpiry" />
          </td>
        </tr>
        <tr>
          <th>Sanctioning Authority</th>
          <td>
            <input
              type="text"
              name="limitSantionAuthority"
              id="limitSantionAuthority"
            />
          </td>
        </tr>

        <tr>
          <th rowspan="3">3</th>
          <th rowspan="3">
            Particulars of Export Letter of Credit/ Export Contract
          </th>
          <th>Number</th>
          <td>
            <input type="text" name="lcNumber" id="lcNumber" />
          </td>
        </tr>
        <tr>
          <th>Date</th>
          <td>
            <input type="date" name="lcDate" id="lcDate" />
          </td>
        </tr>
        <tr>
          <th>Value(FC)</th>
          <td>
            <input type="text" name="lcValueFc" id="lcValueFc" />
          </td>
        </tr>

        <tr>
          <th rowspan="3">4</th>
          <th rowspan="3">Particulars of Transfer</th>
          <th>Name of Transferring Bar.</th>
          <td>
            <input
              type="text"
              name="nameOfTransferingBr."
              id="nameOfTransferingBr."
            />
          </td>
        </tr>
        <tr>
          <th>Ref. No.</th>
          <td>
            <input type="text" name="transferRefNo" id="transferRefNo" />
          </td>
        </tr>
        <tr>
          <th>Date</th>
          <td>
            <input type="date" name="transferDate" id="transferDate" />
          </td>
        </tr>

        <tr>
          <th>5</th>
          <th colspan="2">Date of Export Documents Submission to the Br.</th>
          <td>
            <input
              type="text"
              name="exportDocumentsSubmissionDate"
              id="exportDocumentsSubmissionDate"
            />
          </td>
        </tr>

        <tr>
          <th rowspan="8">6</th>
          <th rowspan="8">Particulars of FDBP</th>
          <th>Number</th>
          <td>
            <input type="text" name="fdbpNumber" id="fdbpNumber" />
          </td>
        </tr>
        <tr>
          <th>Date</th>
          <td>
            <input type="date" name="fdbpDate" id="fdbpDate" />
          </td>
        </tr>
        <tr>
          <th>Documents Value</th>
          <td>
            <input
              type="text"
              name="fdbpDocumentsValue"
              id="fdbpDocumentsValue"
            />
          </td>
        </tr>

        <tr>
          <th>Discrepant / Clean</th>
          <td>
            <input type="text" name="isDiscrepantFdbp" id="isDiscrepantFdbp" />
          </td>
        </tr>
        <tr>
          <th>FDBP Value</th>
          <td>
            <input type="text" name="fdbpValue" id="fdbpValue" />
          </td>
        </tr>
        <tr>
          <th>Maturity Date</th>
          <td>
            <input type="date" name="fdbpMaturityDate" id="fdbpMaturityDate" />
          </td>
        </tr>
        <tr>
          <th>Name Presenting Bank</th>
          <td>
            <input
              type="text"
              name="fdbpPresentingBank"
              id="fdbpPresentingBank"
            />
          </td>
        </tr>
        <tr>
          <th>Reason for non-repartition</th>
          <td>
            <input
              type="text"
              name="reasonForNonRepartition"
              id="reasonForNonRepartition"
            />
          </td>
        </tr>

        <tr>
          <th>7</th>
          <th colspan="2">Amount Since Adjusted</th>
          <td>
            <input
              type="text"
              name="amountSinceeAdjusted"
              id="amountSinceeAdjusted"
            />
          </td>
        </tr>
        <tr>
          <th>8</th>
          <th colspan="2">Present outstanding</th>
          <td>
            <input
              type="text"
              name="presentOutstanding"
              id="presentOutstanding"
            />
          </td>
        </tr>
        <tr>
          <th>9</th>
          <th colspan="2">Date and Status of Classification</th>
          <td>
            <input
              type="text"
              name="classificationStatus"
              id="classificationStatus"
            />
          </td>
        </tr>
        <tr>
          <th>10</th>
          <th colspan="2">Litigable Amount</th>
          <td>
            <input type="text" name="litigableAmount" id="litigableAmount" />
          </td>
        </tr>
        <tr>
          <th>11</th>
          <th colspan="2">Rmarks</th>
          <td>
            <input type="text" name="remarks" id="remarks" />
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
