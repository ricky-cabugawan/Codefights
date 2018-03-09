/*
 *checkPalindrome
 *https://codefights.com/arcade/intro/level-1/s5PbmwxfECC52PWyQ
 *
 */

function checkPalindrome($inputString) {
    if($inputString == strrev($inputString))
        return true;
    else
        return false;
}
