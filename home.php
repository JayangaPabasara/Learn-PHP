<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the Home page <br>
    <a href="After20th.php">This goes to the login page</a> <br>
    <form action="home.php" method="post">
        <input type="submit" value="Log Out" name="logout">
    </form>
</body>
</html>

<?php

echo $_SESSION["username"]. "<br>";
echo $_SESSION["password"]. "<br>";

if(isset($_POST["logout"])){
    session_destroy();
    header("Location: After20th.php");
}

?>