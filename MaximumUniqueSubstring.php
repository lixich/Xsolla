<?php
class MaximumUniqueSubstring
{
    public function findMaximumUniqueSubstring($str) {
        if (strlen($str) != 0) {
            $maxStr = $str[0];
            $curStr = $str[0];
            for ($i = 1; $i < strlen($str); $i++) {
                if (strpos($curStr, $str[$i]) === false) {
                    $curStr = $curStr . $str[$i];
                    if (strlen($curStr) > strlen($maxStr)) {
                        $maxStr = $curStr;
                    } else {}
                } else {
                    $curStr = substr($curStr, strrpos($curStr, $str[$i]) + 1) . $str[$i];
                }
            }
            return $maxStr;
        } else {
            return $str;
        }
    }
}
