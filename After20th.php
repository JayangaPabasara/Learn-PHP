<?php

/*
#🌟 cookie 🌟#
//Information about stored in a user's web browser targeted advertisments, browsing preferences and other non-sensitive data

//this cookie expire after 2 days. (86400 = one day)
setcookie("fav_food", "pizza", time() + (86400 * 2), "/"); //setcookie(key, value, expire time, where to save) 
setcookie("fav_drink", "orange juice", time() + (86400 * 3), "/");
setcookie("fav_car", "BENS", time() - 0, "/"); //delete a cookie

foreach($_COOKIE as $key => $value){
    echo "{$key} = {$value} <br>";
}

if(isset($_COOKIE["fav_food"])){
    echo "Buy Some {$_COOKIE["fav_food"]} !!!";
}else{
    echo "I don't know your favorite food";
}
*/

#🌟 session 🌟#
//SGB used to store infrmation on a user to be used across multiple pages. A user is assigned a session-id. Eg: login credentials

?>

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
    <h1>Login Form</h1>
    <form action="After20th.php" method="post">

        user name: <br>
        <input type="text" name="username" id=""> <br>
        password: <br>
        <input type="password" name="password" id=""> <br>
        <input type="submit" value="Login" name="login">

    </form>

</body>

</html>

<?php

if (isset($_POST["login"])) {



    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location: home.php");

    }else{
        echo "Missing user name or password <br>";
    }
}

?>