<!--    🔴🔴🔴   1️⃣st Day    🔴🔴🔴     -->
<!-- //🛑 HTML form - 1
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="">User Name : </label><br>
        <input type="text" name="username"><br>
        <label for="">Password : </label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>
</body>
</html> -->

<!-- //🛑 HTML form - 2
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Quantity :</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html> -->

<!-- //🛑 HTML form - 3
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">x:</label>
        <input type="text" name="x"><br>
        <label for="">y:</label>
        <input type="text" name="y"><br>
        <label for="">z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="Total">
    </form>
</body>
</html> -->

<!-- //🛑 HTML form - 4
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html> -->


<!-- 🛑 HTML form - 5
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter a number to count to :</label>
        <input type="text" name="counter" id="">
        <input type="submit" value="start">
    </form>
</body>
</html> -->

<?php
/*
#🌟 Introduction 🌟#
echo "I fk you <br>";
echo "I'm good";
//This is a comment
/*This
is 
a muliline 
comment 
*/

/*
#🌟 Varaibles 🌟#

$name = "Jayanga";
$food = "pizza";
$email = "fake@gmail.com";

$age = 21;
$users = 3;

$gpa = 2.5;
$price = 4.22;
$quantity = 3;

$employed = false; //boolean values dosen't display in web page because their is false
$online = true; //show 1 for the output because their is true

echo "Hello {$name} <br>";
echo "You like {$food} <br>";
echo "Your email is {$email} <br>";

echo "You are {$age} years old <br>";
echo "There are {$users} users online <br>";

echo "Your Gpa is {$gpa} <br>";
echo "Your pizza is \${$price}";

echo "Online status : {$online} <br>";
echo "You are employee : {$employed} <br>";

echo "<br><b>Bill</b><br><br>";

$total = null;

echo "You have ordered {$quantity} X {$food} <br>";
$total = $quantity * $price;
echo "Your Total is : \${$total}";
*/

/*
#🌟 Arithmatic Operators 🌟#
+ - * ** %

$num1 = 10;
$num2 = 20;

$value = $num1 + $num2;
$value = $num1 - $num2;
$value = $num1 * $num2;
$value = $num1 ** $num2;
$value = $num1 % $num2;
echo "{$value}";

Incement, Decrement

$count = 0;
$count++;
echo $count;

$count--;
echo $count;
*/

/*
//🛑 HTML form - 1
#🌟 $_GET, $_POST suprglobal variables 🌟#

echo "{$_GET["username"]} <br>"; //This $_GET varible work like a array with value key pair it contain password and user name.
echo $_GET["password"] . "<br>";
echo "Your Credencials"

echo "{$_POST["username"]} <br>"; //This $_GET varible work like a array with value key pair it contain password and user name.
echo $_POST["password"] . "<br>";
echo "Your Credencials"

//🛑 HTML form - 2

$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = null;

$total = $quantity * $price;

echo "You have ordered {$quantity} X {$item}/s <br>";
echo "Your total is \${$total}";
*/

/*
//🛑 HTML form - 3
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

$total = abs($x);
$total = round($x);
$total = floor($x);
$total = ceil($x);
$total = sqrt($x);
$total = pow($x, $y);
$total = max($x, $y, $z);
$total = min($x, $y, $z);
$total = pi(); // give π value
$total = rand(1, 6);

echo $total;
*/

/*
//🛑 HTML form - 4
Exersice 🏋️‍♀️🏋️‍♂️
$radius = $_POST["radius"];
$circumference = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2); //rounded to 2 decimal point.

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4/3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "Circumference is {$circumference}cm <br>";
echo "Area is {$area}cm<sup>2</sup> <br>";
echo "Volume is {$volume}cm<sup>3</sup>";
*/

/*
//    🔴🔴🔴   2️⃣nd Day    🔴🔴🔴

#🌟 if statement 🌟#

$age = 11;

if ($age >= 100) {
    echo "You are too old to enter this site";
} elseif ($age >= 18) {
    echo "You may enter this site";
} elseif ($age <= 0) {
    echo "That wasn't a valid age";
} else {
    echo "You must be 18+ to enter";
}

$adult = false;

if($adult){
    echo "You may enter this site";
}
else{
    echo "You must be a adult to enter";
}
*/

/*
#🌟 Logical Operators 🌟#
$temp = 20;
$cloudy = true;

if($temp < 0 || $temp > 30){
    echo "The weather is bad<br>";
}
else{
    echo "The weather is good<br>";
}

if(!$cloudy){
    echo "It's cloudy";
}else{
    echo "It's sunny";
}
*/

/*
#🌟 switch 🌟#
$grade = "C";

switch ($grade) {
    case "A":
        echo "You did great";
        break;
    case "B":
        echo "You did good";
        break;
    case "C":
        echo "You did okay";
        break;
    case "D":
        echo "You did poor";
        break;
    default:
        echo "{$grade} is not valid";
}

$date = date("l");

switch ($date) {
    case "Monday":
        echo "I hate Monday";
        break;
    case "Wednesday":
        echo "It is taco day!";
        break;
}
*/

/*
#🌟 for loop 🌟#

for ($i = 0; $i < 5; $i++) {
    echo "Hello <br>";
}

//🛑 HTML form - 5

$counter = $_POST["counter"];

for($i = 1; $i <= $counter; $i++){
    echo $i . "<br>";
}
*/

/*
#🌟 while loop 🌟#

$counter = 0;
while($counter <= 10){
    echo $counter . "<br>";
    $counter++;
}
*/

/*
#🌟 array 🌟#
$foods = array('apple', 'orange', 'banana', 'coconut');

echo $foods[0] . "<br>";
echo $foods[1] . "<br>";
echo $foods[2] . "<br>";
echo $foods[3] . "<br>";


$foods[4] = "pineapple";
array_push($foods, "pineapple"); //Add element to end of the array
array_pop($foods); //remove last element
array_shift($foods); //remove first array
$reversed_array = array_reverse($foods); //revers the array and return the reversed array
echo count($food); //count the elements

foreach($foods as $food){
    echo $food . "<br>";
}
*/
?>