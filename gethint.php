<?php
// Array with names
$a[] = "Malaysia";
$a[] = "Indonesia";
$a[] = "Myanmar";
$a[] = "Portugal";
$a[] = "Bolivia";
$a[] = "Cuba";
$a[] = "Denmark";
$a[] = "France";
$a[] = "Iceland";
$a[] = "Poland";
$a[] = "Argentina";
$a[] = "Chile";
$a[] = "Spain";
$a[] = "Singapore";
$a[] = "Sweden";
$a[] = "England";
$a[] = "Italy";
$a[] = "Vietnam";
$a[] = "Japan";
$a[] = "South Korea";
$a[] = "Peru";
$a[] = "Germany";
$a[] = "Arab Saudi";
$a[] = "Palestine";
$a[] = "UAE";
$a[] = "Egypt";
$a[] = "Bahrain";
$a[] = "Bangladesh";
$a[] = "Norway";
$a[] = "Tunisia";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";
$option = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;

      } else {
        $hint .= ", $name";
      }
      if ($option === "") {
        $option = "<option>".$name."</option>";
      } else {
        $option .= "<option>".$name."</option>";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $option === "" ? "<option>No Brand found</option>" : $option;
?>