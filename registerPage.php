<html>
    <body>
        <?php
        $data=$_POST;
        var_dump($data);
        $Username=$_POST["username"];
        $Email=$_POST["email"];
        $Phone_no=$POST["phone"];
        $Password=$_POST["password"];
        ?>

        <form method="POST">
            <label>Username</label><br>
            <input type="text" Name="username"><br>

            <label>Email</label><br>
            <input type="text" Name="email"><br>

            <label>Phone_no</label><br>
            <input type="number" Name="phone"><br>

            <label>Password</label><br>
            <input type="text" Name="password"><br>
            
            <button type="submit">LOGIN</button>

        </form>
    </body>
</html>