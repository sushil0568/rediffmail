<?php

class Palindrome
{
 /**
 * @param string $word
 *
 * @return bool
 */
    public static function isPalindrome($word)
    {
        $newstring = strrev($word);
        if(strcmp($word, $newstring)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
echo Palindrome::isPalindrome('Deleveled');