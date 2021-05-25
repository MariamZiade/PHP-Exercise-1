<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Full Name:</em> <?php echo $_POST["FullName"]?></li>
        <li><em>Username:</em> <?php echo $_POST["Username"]?></li>
        <li><em>Password:</em> <?php echo $_POST["Password"]?></li>
        <li><em>Confirm Password:</em> <?php echo $_POST["ConfirmPassword"]?></li>

        <li><em>Email:</em> <?php echo $_POST["Email"]?></li>
        <li><em>Phone:</em> <?php echo $_POST["Phone"]?></li>
        <li><em>Date of Birth:</em> <?php echo $_POST["birthday"]?></li>
        <li><em>Social Security Number:</em> <?php echo $_POST["Social"]?></li>

    </ol>

</body>

<body>

    <ol>
        <li><em>Full Name:</em> <?php echo $_POST["LUsername"]?></li>
        <li><em>password:</em> <?php echo $_POST["LPassword"]?></li>

    </ol>


</body>

</html>