<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Myapp</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="login">
            <h1>Login</h1>
            <div class="form" id="form">
                <form action="post">
                    <label>Username:</label>
                    <input type="text" id="user" name="user"><br>
                    <label>Password:</label>
                    <input type="password" id="pass" name="pass">
                    <input type="submit" id="btn" value="Login" name="submit">
                    <h6>
                        Don't have an account? Sign up 
                        <input type="submit" id="btn" value="Sign up" name="signup">
                    </h6>
                </form>
            </div>
        </div>
    </body>
</html>