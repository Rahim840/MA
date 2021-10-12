<?php
$arr1=array(
	array('name','abid'),
	array('class','five'),
	array('age', '11' )
 );
for($i=0; $i<1; $i++){
	for($j=0; $j<2; $j++)
		echo $arr1[$i][$j].'<br>';
	echo "<br>";
}


function add(){
	 $a=30;
	 $b=69;

	 echo $a+$b;
 
}
 
 add ();
 echo "<br>";
 echo "<br>";

  $c=39;
   $d=83;
   function addition($c,$d){
   	echo($c+$d);

   }

addition($c,$d);
echo "<br>";
 echo "<br>";

 $arr11 = array(
 	array(6,8),
 	array(3,4),
 	array(7,9),

 );

 $arr22 = array(
 	array(1,2),
 	array(8,7),
 	array(4,3),

 );

 for($i=0; $i<1; $i++){
 	for($j=0; $j<2; $j++){
 		$arr33[$i][$j] = $arr11[$i][$j] * $arr22[$i][$j];
 		echo $arr33[$i][$j];
 	}

 	echo "<br>";
     
    echo "<br>";
 }                //matrix multiply

echo "<br>";

 for($i=0; $i<1; $i++){
 	for($j=0; $j<2; $j++){
 		$arr44[$i][$j] = $arr11[$i][$j] - $arr22[$i][$j];
 		echo $arr44[$i][$j];
 	}

 	echo "<br>";
     
    echo "<br>";
 }                //matrix subtraction

echo "<br>";

?>


<!Doctype html>
   <head>
<title>
calculator  
</title>    

</head> 

<?php 
$result = "";
if(isset($_POST['operator'])){
   $first_number = $_POST['first_number'];
$second_number = $_POST['second_number'];
$third_number = $_POST['third_number'];
$fourth_number = $_POST['fourth_number'];
$five_number = $_POST['five_number'];
$six_number = $_POST['six_number'];
$seven_number = $_POST['seven_number'];
$eight_number = $_POST['eight_number'];
$operator = $_POST['operator'];

if(is_numeric($first_number)&& is_numeric($second_number)&& is_numeric($third_number)&& is_numeric($fourth_number)&& is_numeric($five_number)&& is_numeric($six_number)&& is_numeric($seven_number)&& is_numeric($eight_number)){

   if($operator=="add"){
  $result = $first_number+$second_number+$third_number+$five_number+$five_number+$six_number+$seven_number+$eight_number;
  #echo $result;
}
else if($operator=="sub"){
  $result = $first_number - $second_number-$third_number-$five_number-$five_number-$six_number-$seven_number-$eight_number;
  #echo $result;
}
else if($operator=="multi"){
  $result = $first_number * $second_number*$third_number*$five_number*$five_number*$six_number*$seven_number*$eight_number;
  #echo $result;
}
}



}

?>


<body>
<h1> hello </h1>
<form method="post">
   <label> 
      First number
   </label>
<input type="name" name="first number" value="<?php echo $first_number; ?>">
<label> 
      second number
   </label>
<input type="name" name="second number" value="<?php echo $second_number;?>">
<label> 

   third number
   </label>
<input type="name" name="third number" value="<?php echo $third_number; ?>">
<label>

 fourth number
   </label>
<input type="name" name="fourth number" value="<?php echo $fourth_number; ?>">
<label> 
   Five number
   </label>
<input type="name" name="five number" value="<?php echo $five_number; ?>">
<label> 
    six number
   </label>
<input type="name" name="six number" value="<?php echo $six_number; ?>">
<label>

   seven numer
   </label>
<input type="name" name="seven number" value="<?php echo $seven_number; ?>">
<label> 

   eight number
   </label>
<input type="name" name="eight number" value="<?php echo $eight_number; ?>">
<label> 
      Result
   </label>
<input type="name" name="result" value="<?php echo $result; ?>">
<input type="name" name="result" value="<?php echo $result; ?>">
<input type="name" name="result" value="<?php echo $result; ?>">
<input type="name" name="result" value="<?php echo $result; ?>">

<input type="submit" value="add" name="operator">
<input type="submit" value="sub" name="operator">
<input type="submit" value="multi" name="operator">



</form>

</body>























