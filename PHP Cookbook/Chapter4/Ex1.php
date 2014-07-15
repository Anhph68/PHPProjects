<?php
/*
 * You want to assign multiple elements to an array in one step, but you don’t want the first index to be 0.
 */

$presidents = array(
    1 => 'Washington',
    'Adams',
    'Honest' => 'Jefferson',
    'Madison'
);

$reconstruction_presidents = array(
    16 => 'Lincoln',
    'Johnson',
    'Grant'
);
showArr($presidents);
showArr($reconstruction_presidents);

print $presidents[3] . "\n";
print $presidents["Honest"] . "\n";

$us_leader = array(
    -1 => "Geogre II",
    "Geogre III",
    'Washington'
);
showArr($us_leader);

$whig_presidents = array(
    9 => 'Harrison',
    'Tyler',
    12 => 'Taylor',
    'Fillmore'
);

showArr($whig_presidents);

function showArr($arr)
{
    foreach ($arr as $number => $president) {
        print "$number: $president\n";
    };
}