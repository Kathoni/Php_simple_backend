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
        <div class="form"   id="form">
        <form action="post">
         <label>Username: </label>
         <input type="text" id="user" name="user"><br><br>
         <label >Password: </label>
         <input type="password" id="pass" name="pass">
         <input type="submit" id="btn" value="Login" name="submit" style="display: flexbox; border-radius:15px ; background-color: brown;width: 80%;margin: 15px;height: 5vb; cursor: pointer;" >
         <h6>Don't have an account sign up <input type="submit" id="btn" value="Sign up" name="submit" style="border-radius:15px; cursor: pointer;" ></h6>
         </form>
        </div>
    </div>
    </body>
</html>