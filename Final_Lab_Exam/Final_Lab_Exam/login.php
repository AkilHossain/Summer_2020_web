<body>
    <h1>Login</h1>

    <form action="abc.php">
    <form action="abc.php" onsubmit="return f1()">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" id="username" name="username" onkeyup="f2"></td>
                <td id="userMsg"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" id="password" name="password"></td>
                <td></td>
                <td id="passMsg"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="button" name="submit" value="Submit" onclick="f1(this)"></td>
               
                <td></td>
            </tr>
        </table>
    </form>

    </script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>