<?php
$fruits = array(
    'red' => 'Apples',
    'yellow' => 'Bananas',
    'beige' => 'Cantaloupes',
    'brown' => 'Dates'
);  // $color => $fruit

/*
 * The easiest way to cycle though an array and operate on all or some of the elements inside is to use foreach:
 */

foreach ($fruits as $color => $fruit) {
    print "$fruit are $color.\n";
}

// To break an array apart into individual variables, use list(  )
$fruits = array('Apples', 'Bananas', 'Cantaloupes', 'Dates');
list($red, $yellow, $beige, $brown) = $fruits;

print $red;

