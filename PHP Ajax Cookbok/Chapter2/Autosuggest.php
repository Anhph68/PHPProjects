<?php
$str = $_GET["string"];

$arr = array(
    "Adam",
    "Eva",
    "Milan",
    "Mikki",
    "Mikel",
    "Miles",
    "Mills",
    "Rajesh",
    "Roshan",
    "Ronald",
    "Xavier",
    "Brad",
    "Rose",
    "Michael",
    "Dastan",
    "Romeo"
);

function filter($var)
{
    global $str;
    if (!empty($str))
        return strstr($var, $str);
}

$filterArr = array_filter($arr, "filter");

$result = "";

foreach ($filterArr as $key => $value) {
    $row = "<li>".str_replace($str, "<strong>".$str."</strong>", $value)."</li>";
    $result .= $row;
}

echo $result;