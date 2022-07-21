<?php

$nums = [1,2,3,44,7,6,5];
// //echo $nums[3];
// $summa = 0;

// foreach($nums as $x) {
//     echo "$x<br />";
//     //$summa = $summa + $x;
//     $summa += $x;
// }
// echo ($summa);

// вывести из массива только те числа, которые больше 6

foreach($nums as $x) {
    if ($x > 6) {
        echo "$x<br />";
    }
}

// $people = ["Yuri","Vasya","Yilia"]
// //задача - вывести только те имена которые начанаются на "Y"

// foreach ($people as $name) {
//     if (str_starts_with($name, "Y")) {
//         echo "$name<br />";
//     }
// }

// $people = [
//     ["Yuri","Andrienko", "123456"]
//     ["Vasya", "Pupkin", "1666666"]
//     ["Yulia","Yulina","9999999"]
// ];
// foreach ($people as $person) {
// $firstName = $person [0];
// $lastname = $person [1];
// $salary = $person [2];
// echo "$firstName $lastname has salary $salary <br />";
// }


$people = [
array("firstName" => "Yuri","lastName" => "Andrienko","salary" => 123456 ),
array("firstName" => "Vasya","lastName" => "Pupkin","salary" => 166666 ),
array("firstName" => "Yulia","lastName" => "Yulina","salary" => 999999 ),
];

// foreach ($people as $person) {
//     $firstName = $person ["firstName"];
//     $lastname = $person ["lastname"];
//     $salary = $person ["salary"];
//     echo "$firstName $lastname has salary $salary <br />";
// }

echo(json_encode($people));