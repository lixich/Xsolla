<?php
$str = 'abcabc abc abcabcabc';
$words = explode(" ", $str);
if (count($words) == 3) {
    $gcd = gmp_strval(gmp_gcd(strlen($words[0]), gmp_gcd(strlen($words[1]), strlen($words[2]))));
    $mainWord = substr($words[0], 0, $gcd);
    if (substr_count($words[0], $mainWord) == strlen($words[0]) / $gcd and
        substr_count($words[1], $mainWord) == strlen($words[1]) / $gcd and
        substr_count($words[2], $mainWord) == strlen($words[2]) / $gcd) {
            echo $mainWord;
        }
}
?>
