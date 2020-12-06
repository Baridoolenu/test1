

<?php 
/*
echo "i love programing<br>";
//my first program

// tihs is the 
//comment section


for ($x =0; $x <= 10; $x++){
	echo "the number is: $x <br>";
}

$t = date("M");

if ($t > "20") {
    echo "Have a good day!<br>";
}

$gott = 12;
if (date("H") > $gott){
	
	echo  " i need more time<br>";
}
$x = 1; 

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 50);

function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);


function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
function writeMesg(){
	echo "hello World";
}

writeMesg();

$color = array("red", "green", "blue", "yellow");

foreach ($color as $value) {
	echo "$value <br>";
}



echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['SCRIPT_URI'];
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
ECHO "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
*/
?> 


<body>

<form method="post" action="<? php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    // collect value of input field
    $name = $_POST['fname'];
	
	function posting($psting){
		echo "<p> $psting</p> <br>";
	}

    if (empty($name)) {
        echo "Name is empty";
    } else {
		posting ('$fname'); 
        echo $name;
    }

?>

</body>
</html>