<?php
/** You want to extract part of a string, starting at a particular place in the string.
 *  If  $start and  $length are positive,  substr(  )returns  $lengthcharacters in the string, starting at  $start. The first character in the string is at position 0.
 */
$str = 'Watch out for that tree';
$start = 6;
$length = 5;
$subStr = substr($str, $start, $length); // result => out f

echo $subStr;

/*
 * If you leave out  $length,  substr( )returns the string from  $start to the end of the original string
 */

echo "\n" . substr($str, $start); // result => out for that tree

/*
 * If  $startis negative,  substr(  )counts back from the end of the string to determine where your substring starts
 */

print "\n" . substr($str, -6); // result => t tree
print "\n" . substr($str, -17, 5); //result => out f
print "\n" . strlen($str);

/*
 * With a negative $start value that goes past the beginning of the string (for example, if $start is −27 with a 20-character string), substr(  ) behaves as if $start is 0.
 */
print "\n" . substr($str, -27, 8); //result => Watch ou

/*
 * If  $length is negative,  substr(  ) counts back from the end of the string to determine where your substring ends
 */

print "\n" . substr($str, 15, -2); // result => hat tr
print "\n" . substr($str, -4, -1); // result => tre