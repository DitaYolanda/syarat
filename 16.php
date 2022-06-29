<?php
function Palindrome($string){
    if(strrev($string) == $string){
        return 0;

    }
    else{
        return 1;
    }
}

$enambelas ="P, H, O, B, I, A";
if(palindrome ($enambelas)){
    echo "PHOBIAIBOHP";

}
else {
    echo "not a polindrome";
}
