<?php require_once('header.php'); ?>
<?php
$tiltle = 'web'; // string
$decode = 1996; // integer (number)
$hasSequel = false; // boolean
echo "</br>\n $decode";
echo $tiltle;
//die (var_dump($decode));

function read() {
    $fp1=fopen("/dev/stdin", "r");
    $input=fgets($fp1, 255);
    fclose($fp1);

    return $input;
}


//print("What is your first name? ");
//    $first_name = read();

//echo "Your first name is $first_name";
