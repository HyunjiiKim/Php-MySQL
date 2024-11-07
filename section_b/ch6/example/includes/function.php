<?php

// Function to validate text length
function is_text(string $text, int $min, int $max): bool {
    $length = mb_strlen($text);
    return ($length >= $min && $length <= $max);
}

// Function to validate password length
function pwd(string $password, int $min, int $max): bool {
    $length = mb_strlen($password);
    return ($length >= $min && $length <= $max);
}
?>