<?php
                                    // Local Variable
// function name (){
//     $name ="Puspita";
//     echo $name .PHP_EOL;
// }

// name();

// function name1 (){
//     $name ="Rahman";
//     echo $name .PHP_EOL;
// }

// name1();

// function name2 (){
//     $name ="Puspo";
//     echo $name;
// }

// name2();
                                       // Global Variable
// $name = "Zahidul";
//  function name(){
//    global $name;
//     echo $name .PHP_EOL;
// }

// name();

// $name = "Islam";
// echo $name;
                                    
                                            // PHP Constant...
// define('DB_Server' ,'root');
// define('DB_Database' ,'admin');


// echo DB_Server .PHP_EOL;
// echo DB_Database;
                                            //Printf and Sprintf Use
// $greeting = "Good Morning";
// $msg = "How are you?";

// printf( "Hey Puspita %s , Hello ! %s" , $greeting ,$msg .PHP_EOL);

// $a = sprintf( "Hey Puspita %s , Hello ! %s" , $greeting ,$msg);
// echo $a;
 






                                                   // Conditional Statements......
// $num = 21;
// $remainder = $num % 2;

// if ( $remainder == 0){
//     echo ("the number $num Is Even");
// }
// else {
//     echo ("the number $num Is Odd");    
// } 




// $a = 10;
// $b =10;
// if ( $a == $b ){
//     echo "a and b is equal";
// }
// else if($a < $b ){
//     echo "a is Small number";
// }
// else {
//     echo "a is Big number";
// }

                                            // Switch Statement............

// $a = 3;
// $b = $a % 5;
// switch ($b){
//     case 0:
//         echo "$a is a Even number";
//         break;
//         case 1:
//             echo "$a is a Odd number";
//             break;
//             default:
//             echo "$a is not a whole number";
// }




                                      // Match Statement..........



$a = 10;
$b = $a % 5;
$c = match($b){
     0 => "An Even" , 
     1 => "A Odd"
};
echo "the number $a is $c number";
