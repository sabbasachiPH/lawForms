<!DOCTYPE html>
<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
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
                    <select id="natureOfCredit">
                        <option value="" selected disabled>Select Nature of Credit</option>
                        <option value="Form7a">Form-7.a Demand Loan-Cash</option>
                        <option value="Form72a">Form-72.a </option>
                        <option value="Form7b">Form-7.b Demand Loan-BBLC </option>
                        <option value="Form7c">Form-7.c FDBP</option>
                        <option value="Form7d">Form-7.d Packing Credit</option>
                        <option value="Form7e">Form-7.e LTR (FC)</option>
                        <option value="Form7f">Form-7.f LDBP</option>
                    </select>
                </td>
            </tr>
            <tr class="siblings">
                <form name="Form-7.a" id="Form7a" style="display:none">
                    <!---- THIS IS FORM 1---->
                    <?php include('Form-7aDemandLoanCash.php'); ?>
                </form>

                <form name="Form-7.a" id="Form72a" style="display:none">
                    <!---- THIS IS FORM 1---->
                    <?php include('Form-72.a Demand Loan-Cash.php'); ?>
                </form>

                <form name="Form-7.b" id="Form7b" style="display:none">
                    <!---- THIS IS FORM 2---->
                    <?php include('Form-7bDemandLoanBBLC.php'); ?>
                </form>

                <form name="Form-7.c" id="Form7c" style="display:none">
                    <!---- THIS IS FORM 3---->
                    <?php include('Form-7cFDBP.php'); ?>
                </form>

                <form name="Form-7.d" id="Form7d" style="display:none">
                    <!---- THIS IS FORM 3---->
                    <?php include('Form-7dPackingCredit.php'); ?>
                </form>

                <form name="Form-7.e" id="Form7e" style="display:none">
                    <!---- THIS IS FORM 3---->
                    <?php include('Form-7eLTR(FC).php'); ?>
                </form>

                <form name="Form-7.f" id="Form7f" style="display:none">
                    <!---- THIS IS FORM 3---->
                    <?php include('Form-7fLDBP.php'); ?>
                </form>

            </tr>
        </tbody>
    </table>

    <script>
        $("#natureOfCredit").on("change", function() {
            $("#" + $(this).val()).show().siblings().hide();
            // $("#" + $(this).val()).show();
            console.log($(this).val());
            console.log($this.siblings().val());

        })
    </script>
</body>

</html>