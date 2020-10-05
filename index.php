<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div>
        <form action="services/login.proc.php" method="POST">
            <label for="fname">Email </label>
            <input type="text" id="email" name="email" placeholder="Your mail.." required>

            <label for="lname">Password</label>
            <input type="password" id="passwd" name="passwd" placeholder="Your last name.." required>
        
            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>