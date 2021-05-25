<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="csss.css" />

    <title></title>
</head>

<body>
    <table>
        <tr>
            <td colspan="2"></td>
            <td>monthly</td>

            <td>yearly </td>

        </tr>

        <tr>
            <td>Total salary</td>
            <td><?php echo $_POST["Salary"]?> </td>

        </tr>
        <tr>

            <td>Tax amount</td>

        </tr>
        <tr>
            <td>Social security fee</td>
        </tr>
        <tr>
            <td>Salary after tax </td>

        </tr>


    </table>


    if(!(<?php $_POST["radio1"]?>) ){
    echo "true";
    }

    else {

    echo "false";
    }

</body>

</html>