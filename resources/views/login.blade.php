<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="action_page.php" method="post">
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="submit">Masuk</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <br>
            <button type="reset" class="cancelbtn">Batal</button>
            <span class="psw"><a href="#">Lupa password?</a></span>
        </div>
    </form>
</body>
</html>