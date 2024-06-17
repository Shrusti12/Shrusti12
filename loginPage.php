<html>
    <body>
        <?php
        $data=$_POST;
        var_dump($data);
        $Username=$_POST["username"];
        $Password=$_POST["password"];
        ?>

        <form method="POST">
            <label>Username</label><br>
            <input type="text" Name="username"><br>
            <label>Password</label><br>
            <input type="text" Name="password"><br>
            <button type="submit">LOGIN</button>

        </form>
    </body>
</html>