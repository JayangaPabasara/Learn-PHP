<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method="post">
        username:<br>
        <input type="text" name="username" id=""><br>
        <input type="submit">
    </form>
</body>
</html> -->

<?php

#🌟 SERVER 🌟#
//$_SERVER = SGB that contains headers, paths and script location.
//The entries in this array are created by the web server.
//shows neraly everything you need to know about the current web page env.

// foreach($_SERVER as $key => $value){
//     echo "{$key} = {$value} <br>"; //when run this it have field call PHP_SELF and it contain resent file
// }

/*
//not reliable methode to check if the submit button is clicked or not
if(isset($_POST["submit"])){
    echo "Hello";
}
*/
/*
//reliable way is cheaking $_SERVER REQUEST_METHOD key field
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Hello";
}
*/

#🌟 hashing 🌟#
$password = "pizza123";

$hash = password_hash($password, PASSWORD_DEFAULT); //password_hash(pasword, hashing algorithm[here use bcrypt])
// echo $hash;

if(password_verify("pizza123", $hash)){ //compare given password with hashing and if match return true
    echo "You are logged in";
}else{
    echo "Incorrect Password";
}

?>