<?php

function initializeUser(): array {
    return [
        'fname' => '',
        'lname' => '',
        'email' => '',
        'pwd' => '',
        'mobile' => '',
        'adrs1' => '',
        'adrs2' => '',
        'zcode' => '',
        'country' => '',
        'option' => '',
        'terms' => '',
    ];
}

function initializeErrors(): array {
    return [
        'fname' => '',
        'lname' => '',
        'pwd' => '',
        'zcode' => '',
        'option' => '',
        'terms' => '',
    ];
}

function loadUserData(array $postData): array {
    return [
        'fname' => $postData['fname'] ?? '',
        'lname' => $postData['lname'] ?? '',
        'email' => $postData['email'] ?? '',
        'pwd' => $postData['password'] ?? '',
        'mobile' => $postData['mobile'] ?? '',
        'adrs1' => $postData['address1'] ?? '',
        'adrs2' => $postData['address2'] ?? '',
        'zcode' => $postData['zipcode'] ?? '',
        'country' => $postData['country'] ?? '',
        'option' => $postData['option'] ?? '',
        'terms' => isset($postData['terms']) && $postData['terms'] === 'true',
    ];
}

function validateUserForm(array $user): array {
    global $options; // Reference the global $options array
    
    $errors['fname'] = is_text($user['fname'], 1, 20) ? '' : "First name must be between 1 and 20 characters.";
    $errors['lname'] = is_text($user['lname'], 1, 20) ? '' : "Last name must be between 1 and 20 characters.";
    $errors['pwd'] = pwd($user['pwd'], 8, 20) ? '' : "Password must be between 8 and 20 characters.";
    $errors['zcode'] = is_text($user['zcode'], 5, 5) ? '' : "Zipcode must be exactly 5 characters.";
    $valid_option = in_array($user['option'], $options);
    $errors['option'] = $valid_option ? '' : "You must choose one of the options.";
    $errors['terms'] = $user['terms'] ? '' : "You must agree to the terms.";

    return $errors;
}
