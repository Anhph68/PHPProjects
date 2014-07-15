<?php
// You want to know if a string contains a particular substring
/*
 *  To differentiate between return values of 0 and false, you must use the identity operator (===) or  the  not–identity  operator  (!==)  instead  of  regular  equals  (==)  or  not-equals  (!=).
 */

//if(strpos($_POST['email'], '@') === false) {
//$str = 'Anhph68'; // Show message,
$str = 'Anhph68@mail.com';  // index begins with 0

if(strpos($str, '@') === false) {
    print 'There was no @ in the e-mail address';
} else
    print strpos($str, '@');