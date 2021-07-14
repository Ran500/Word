<html>

<head>
    <title>PHP login system</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body {
    background: #eee;
}

#frm {
    border: solid gray 1px;
    width: 25%;
    border-radius: 2px;
    margin: 120px auto;
    background: white;
    padding: 50px;
}

#btn {
    color: #fff;
    background: #337ab7;
    padding: 7px;
    margin-left: 70%;
}
</style>

<body>
    <div id="frm">
        <h1>Register</h1>
        <form action="ChekerRig.php" method="POST">
            <p>
                <label> UserName </label>
                <input type="text" name="UserName" />
            </p>
            <p>
                <label> Name </label>
                <input type="text" name="Name" />
            </p>
            <p>
                <label> Email </label> <br>
                <input type="text" name="Email" />
            </p>
            <p>
                <label> Password </label>
                <input type="password" name="Password" />
            </p>
            <p>
                <input type="submit" value="Login" />
                <a href="Login.php">Login</a>
            </p>
        </form>
    </div>


</body>

</html>