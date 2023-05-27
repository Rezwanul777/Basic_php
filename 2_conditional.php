<?php
// $txt = "W3Schools.com";
// echo "I love $txt!";

// if ---else condition
// $age = 13;


// if($age>=15)

// echo "You are eligible for voter";

// else
//     echo "You are below 15"

// $t = date("H");

// if ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }

// $color="yellow";

// if($color=="green"){
//     print "color is green";
// }elseif($color=="red"){
//     print "color is red";
// }else{
//     print "color is undefined";
// }

// switch case

    // $color="yellow";

    // switch($color){
    //     case "green":
    //         echo "color is green";
    //         break;
    //     case "red":
    //         echo "color is red";
    //         break;
    //     case "yellow":
    //         echo "color is yellow";
    //         break;
    //     default:
    //        echo "color is undefined";
    // }

    // while loop

//     $x = 1;

//    while($x <= 5) {
//    echo "The number is: $x <br>";
//    $x++;
// } 

//   $x = 0;

//   while($x <= 100) {
//   echo "The number is: $x <br>";
//   $x+=10;
// }

// for loop

/*for ($i=0; $i <=10 ; $i++) { 
    echo "The number is: $i <br>";
}

for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  } */

  //for each loop--[key:value]
  //For every loop iteration, the value of the current array element is assigned to $value 

/*$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}*/

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

?> 