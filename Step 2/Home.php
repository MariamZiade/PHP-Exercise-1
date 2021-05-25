<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="csss.css" />

</head>

<body>

    <form action="safe.php" method="post">

        <div class="allform">
            Salary in USD:
            <input type="text" name="Salary" placeholder="Salary in USD" />

            <br />

            Yearly
            <input type="radio" name="radio1" value="Yearly" />
            <br />
            monthly
            <input type="radio" name="radio2" value="monthly" />

            <br />

            Tax Free Allowance in USD
            <input type="text" name="taxfree" placeholder="Tax Free Allowance in USD" />
            <br />

            <input type="submit" value="Calculate" />

        </div>
    </form>




</body>

</html>