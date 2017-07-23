<?php
class Brackets
{
    public function isBracketSequenceCorrect($str) {
        do {
            $prevStrLen = strlen($str);
            $str = str_replace("[]","", $str);
            $str = str_replace("()","", $str);
            $str = str_replace("{}","", $str);
        } while (strlen($str) < $prevStrLen);
        return (strlen($str) == 0) ? true : false;
    }
}
