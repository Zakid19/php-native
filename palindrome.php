<?php
$str1 = 'malam';
Palindrome($str1);

function Palindrome($string){
    if (strrev($string) == $string){
        echo 'Palindome';
    }
    else{
        echo 'Bukan Palindrome';
    }
}
?>
