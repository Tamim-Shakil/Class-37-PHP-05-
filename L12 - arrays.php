<?php
//$arr = ar

// indexed array
$arr = ["data-1", "data-2", "data-3", "data-4", "data-5"];
echo $arr[0];
echo "<pre>";
print_r($arr);
echo"</pre>";

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br>";
}

// foreach
foreach ($arr as $value) {
    echo $value . "<br>";
}

// associative array
$person = ["name" => "John Doe", "age" => 30];
echo $person["name"];
echo "<pre>";
print_r($person);
echo"</pre>";

foreach ($person as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

// multidimensional array
$persons = [
    ["Kamal", 20, "Dhaka"],
    ["Jamal", 30, "Chittagong"],
    ["Kalam", 40, "Sylhet"],
    ["Salam", 50, "Khulna"],
];

echo $persons[1][2];
echo "<pre>";
print_r($persons);
echo"</pre>";

foreach ($persons as $person) {
    foreach ($person as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

