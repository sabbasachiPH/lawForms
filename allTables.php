<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    $(document).ready(function() {
      $("select").change(function() {
        $(this).find("option:selected").each(function() {
          var optionValue = $(this).attr("value");
          if (optionValue) {
            $(".box").not("." + optionValue).hide();
            $("." + optionValue).show();
          } else {
            $(".box").hide();
          }
        });
      }).change();
    });
  </script>

  <title>7.a Demand Loan-Cash</title>

  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 10px;
    }

    caption {
      font-weight: bolder;
      color: blue;
      font-size: 20px;
      /* border: 1px solid blue; */
    }
  </style>
</head>

<body>
  <div>
    <select>
      <option>Choose Color</option>
      <option value="table7a">Table-7.a Demand Loan-Cash</option>
      <option value="table7b">Table-7.b Demand Loan-BBLC</option>
      <option value="table7c">Table-7.c FDBP</option>
      <option value="table7d">Table-7.d Packing Credit</option>
      <option value="table7e">Table-7.e LTR (FC)</option>
      <option value="table7f">Table-7.f LDBP</option>
    </select>
  </div>
  <div class="box table7a">
    <table>
      <caption>
        Table-7.a Demand Loan-Cash
      </caption>
      <thead>
        <tr>
          <th>1</th>
          <th colspan="4">2</th>
          <th colspan="6">3</th>
          <th colspan="2">4</th>
          <th colspan="4">5</th>
          <th colspan="2">6</th>
          <th>7</th>
          <th>8</th>
          <th>9</th>
          <th>10</th>
          <th colspan="2">11</th>
          <th>12</th>
          <th>13</th>
          <th>14</th>
        </tr>

        <tr>
          <th rowspan="2">Nature Of Credit</th>
          <th colspan="4">Notional Limit</th>
          <th colspan="6">Particulars Related to Letter of Credit</th>
          <th colspan="2">Document Received in Branch</th>
          <th colspan="4">Scrutiny of Documents</th>
          <th colspan="2">Creation of PAD</th>
          <th rowspan="2">Source of Adjustment</th>
          <th rowspan="2">Bill of Entry Matching Date</th>
          <th rowspan="2">Amount Since Adjusted</th>
          <th rowspan="2">Present outstanding</th>
          <th colspan="2">Information of Forced Loan/Demand Loan</th>
          <th rowspan="2">Date and Status of Classification</th>
          <th rowspan="2">Litigable Amount</th>
          <th rowspan="2">Rmarks</th>
        </tr>

        <tr>
          <th>Sanction Date</th>
          <th>Amount</th>
          <th>Expiry</th>
          <th>Sanctioning Authority</th>
          <th>Number</th>
          <th>Date</th>
          <th>Tenor</th>
          <th>Value(FC)</th>
          <th>Value (BDT)</th>
          <th>% Margin</th>
          <th>Date</th>
          <th>Value</th>
          <th>Lodgement Date</th>
          <th>Date of Discrepency Notice</th>
          <th>Due Date</th>
          <th>Acceptance/Payment Date</th>
          <th>Date</th>
          <th>Amount</th>

          <th>Date of Creation</th>
          <th>Reason for Creation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="box table7b">
    <table>
      <caption>
        Table-7.b Demand Loan-BBLC
      </caption>
      <thead>
        <tr>
          <th>1</th>
          <th colspan="4">2</th>
          <th colspan="4">3</th>
          <th colspan="4">4</th>
          <th colspan="3">5</th>
          <th>6</th>
          <th colspan="2">7</th>
          <th>8</th>
          <th>9</th>
          <th>10</th>
          <th>11</th>
          <th>12</th>
        </tr>

        <tr>
          <th rowspan="2">Nature Of Credit</th>
          <th colspan="4">Notional Limit</th>
          <th colspan="4">
            Information related to Export Letter of Credit/ Export Contract
          </th>
          <th colspan="4">Particulars of Back to Back Letter of Credit</th>
          <th colspan="3">
            Documents related information of Back to Back Letter of Credit
          </th>
          <th rowspan="2">
            Total Export against Letter of Credit/ Export Contract
          </th>
          <th colspan="2">Particulars of Demand Loan Back to Back`</th>
          <th rowspan="2">Amount Since Adjusted</th>
          <th rowspan="2">Present outstanding</th>
          <th rowspan="2">Date and Status of Classification</th>
          <th rowspan="2">Litigable Amount</th>
          <th rowspan="2">Remarks</th>
        </tr>

        <tr>
          <th>Sanction Date</th>
          <th>Amount</th>
          <th>Expiry</th>
          <th>Sanctioning Authority</th>

          <th>Number</th>
          <th>Date</th>
          <th>Value(FC)</th>
          <th>Date of Obtaining Buyer's Credit Report</th>

          <th>Number</th>
          <th>Date</th>
          <th>Value(FC)</th>
          <th>Value(BDT)</th>

          <th>Date of Documents</th>
          <th>Value</th>
          <th>Discrepant/Clean</th>

          <th>Date</th>
          <th>Amount</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="box table7c">
    <table>
      <caption>
        Table-7.c FDBP
      </caption>
      <thead>
        <tr>
          <th>1</th>
          <th colspan="4">2</th>
          <th colspan="3">3</th>
          <th colspan="3">4</th>
          <th>5</th>
          <th colspan="8">6</th>
          <th>7</th>
          <th>8</th>
          <th>9</th>
          <th>10</th>
          <th>11</th>
        </tr>

        <tr>
          <th rowspan="2">Nature Of Credit</th>
          <th colspan="4">Particulars of Limit</th>
          <th colspan="3">
            Particulars of Export Letter of Credit/ Export Contract
          </th>
          <th colspan="3">Particulars of Transfer</th>
          <th rowspan="2">Date of Export Documents Submission to the Br.</th>
          <th colspan="8">Particulars of FDBP</th>
          <th rowspan="2">Amount Since Adjusted</th>
          <th rowspan="2">Present outstanding</th>
          <th rowspan="2">Date and Status of Classification</th>
          <th rowspan="2">Litigable Amount</th>
          <th rowspan="2">Remarks</th>
        </tr>

        <tr>
          <th>Sanction Date</th>
          <th>Amount</th>
          <th>Expiry</th>
          <th>Sanctioning Authority</th>

          <th>Number</th>
          <th>Date</th>
          <th>Value(FC)</th>

          <th>Name of Transferring Bar.</th>
          <th>Ref. No.</th>
          <th>Date</th>

          <th>Number</th>
          <th>Date</th>
          <th>Documents Value</th>
          <th>Discrepant / Clean</th>
          <th>FDBP Value</th>
          <th>Maturity Date</th>
          <th>Name Presenting Bank</th>
          <th>Reason for non-repartition</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="box table7d">
    <table>
      <caption>
        Table-7.d Packing Credit
      </caption>
      <thead>
        <tr>
          <th>1</th>
          <th colspan="4">2</th>
          <th colspan="4">3</th>
          <th>4</th>
          <th>5</th>
          <th>6</th>
          <th>7</th>
          <th>8</th>
        </tr>

        <tr>
          <th rowspan="2">Nature Of Credit</th>
          <th colspan="4">
            Particulars of Export Letter of Credit / Export Contract
          </th>
          <th colspan="4">Information Related to Packing Credit</th>
          <th rowspan="2">Amount Since Adjusted</th>
          <th rowspan="2">Present outstanding</th>
          <th rowspan="2">Date and Status of Classification</th>
          <th rowspan="2">Litigable Amount</th>
          <th rowspan="2">Remarks</th>
        </tr>

        <tr>
          <th>Number</th>
          <th>Date</th>
          <th>Value(FC)</th>
          <th>Total Export against Letter of Credit/ Export Contract</th>

          <th>Number</th>
          <th>Date</th>
          <th>Value</th>
          <th>Expiry</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="box table7e">

    <table>
      <caption>
        Table-7.e LTR (FC)
      </caption>
      <thead>
        <tr>
          <th>1</th>
          <th colspan="5">2</th>
          <th colspan="4">3</th>
          <th colspan="2">4</th>
          <th colspan="2">5</th>
          <th>6</th>
          <th>7</th>
          <th>8</th>
          <th>9</th>
          <th>10</th>
        </tr>

        <tr>
          <th rowspan="2">Nature Of Credit</th>
          <th colspan="5">Particulars of Sanction</th>
          <th colspan="4">Particulars of Import Letter of Credit</th>
          <th colspan="2">Documents Received in Br.</th>
          <th colspan="2">Creation of LTR(FC)</th>
          <th rowspan="2">Amount Since Adjusted</th>
          <th rowspan="2">Present outstanding</th>
          <th rowspan="2">Date and Status of Classification</th>
          <th rowspan="2">Litigable Amount</th>
          <th rowspan="2">Remarks</th>
        </tr>

        <tr>
          <th>Date</th>
          <th>Amount(FC)</th>
          <th>Amount(BDT)</th>
          <th>% Of Fund-Buildup</th>
          <th>Sanctioning Authority</th>

          <th>Number</th>
          <th>Date</th>
          <th>Value(FC)</th>
          <th>Value(BDT)</th>

          <th>Date</th>
          <th>Value</th>

          <th>Date</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="box table7f">
    <table>
      <caption>
        Table-7.f LDBP
      </caption>
      <thead>
        <tr>
          <th>1</th>
          <th colspan="4">2</th>
          <th colspan="6">3</th>
          <th>4</th>
          <th colspan="5">5</th>
          <th colspan="3">6</th>
          <th>7</th>
          <th>8</th>
          <th>9</th>
          <th>10</th>
          <th>11</th>
        </tr>

        <tr>
          <th rowspan="2">Nature Of Credit</th>
          <th colspan="4">Particulars of Sanction</th>
          <th colspan="6">
            Particulars of Back to Back Letter of Credit Received
          </th>
          <th rowspan="2">Name of Importer</th>
          <th colspan="5">Information Related to Documents</th>
          <th colspan="3">Particulars of LDBP</th>
          <th rowspan="2">Amount Since Adjusted</th>
          <th rowspan="2">Present outstanding</th>
          <th rowspan="2">Date and Status of Classification</th>
          <th rowspan="2">Litigable Amount</th>
          <th rowspan="2">Remarks</th>
        </tr>

        <tr>
          <th>Sanction Date</th>
          <th>Amount</th>
          <th>Expiry</th>
          <th>Sanctioning Authority</th>

          <th>Number</th>
          <th>Date</th>
          <th>Value(FC)</th>
          <th>Value(BDT)</th>
          <th>Name of Issuing Bank</th>
          <th>Weather Authenticated or Not</th>

          <th>Date of Documents Submission to the Br.</th>
          <th>Value(FC)</th>
          <th>Value(BDT)</th>
          <th>Discrepant/Clean</th>
          <th>Due Date</th>

          <th>Number</th>
          <th>Date</th>
          <th>Amount(BDT)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>

  </div>

</body>

</html>