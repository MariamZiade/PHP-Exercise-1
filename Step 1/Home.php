<html>

<head>

    <meta charset="UTF-8">
    <title>Exercise 1</title>
    <link rel="stylesheet" type="text/css" href="css.css" />

</head>

<body>
    <form action="safe.php" method="post">

        <div class="allpage">

            <div class="hh">

                <h1>Registration</h1>

                <!-- <label> Full Name</label> -->
                <input type="text" classs="input" name="FullName" placeholder="Full Name" />
                <br />

                <!-- <label> Username</label> -->
                <input type="text" classs="input" name="Username" placeholder="Username" />

                <br />

                <!-- <label> Password</label> -->
                <input type="Password" classs="input" name="Password" placeholder="Password" />

                <br />


                <!-- <label> Confirm Password</label> -->
                <input type="text" classs="input" name="ConfirmPassword" placeholder="Confirm Password" />

                <br />

                <!-- <label> Email</label> -->
                <input type="text" name="Email" placeholder="Email" />

                <br />

                <!-- <label> Phone</label> -->
                <input type="text" name="Phone" placeholder="Phone" />

                <br />

                <!-- <label> Date of Birth</label> -->
                <input type="date" name="birthday">



                <br />

                <!-- <label>Social Security Number Username</label> -->
                <input type="text" name="Social" placeholder="Social" />
                <br />

                <input type="submit" value="Submit" />
            </div>
    </form>


    <form action="safe.php" method="post">


        <div className=login>
            <h1> Log In</h1>

            <label> Username</label>
            <input type="text" name="LUsername" placeholder="name" required />
            <br />
            <label> Password</label>
            <input type="Password" name="LPassword" placeholder="name" />
            <br />
            <input type="submit" value="Submit" />

        </div>

    </form>

</body>

</html>