<?php

function is_text(string $text, int $min, int $max): bool{
    $length = mb_strlen($text);
    return ($length>=$min && $length<=$max);
}

function is_number(int $nb, int $min, int $max): bool{
    return ($nb>=$min && $nb <=$max);
}

function pwd(string $pwd, int $min, int $max): bool{
    $length=mb_strlen($pwd);
    if(
        $pwd>=$min && $pwd <=$max &&
        preg_match('/[A-Z]/',$pwd) && 
        preg_match('/[a-z]/',$pwd) &&
        preg_match('/[\W]/',$pwd)){
            return true;
    }
    return false;
}


?>
