<?php
/*
 * You want to replace a substring with a different string.
 */
// Everything from position $start to the end of $old_string becomes $new_substring
$old_str = 'My pet is a blue dog.'; // strlen() => 21
//echo strlen($old_str);
$new_substr = 'fish.';
$start = 12;
$new_str = substr_replace($old_str, $new_substr, $start);
print $old_str . "\n";
print $new_str;

// $length characters, starting at position $start, become $new_substring
$new_substr = 'greenm ';
$length = 4;
$new_str = substr_replace($old_str, $new_substr, $start, $length);
print "\n" . $new_str;

$credit_card = '4111 1111 1111 1111';
print "\n" . substr_replace($credit_card, 'xxxx ', 0, strlen($credit_card) - 4);