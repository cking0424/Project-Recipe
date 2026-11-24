<?php

$pwdSignup = "tposu";

$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_DEFAULT, $options);

$pwdLogin = "tposu67";

if (password_verify($pwdLogin, $hashedPwd)) {
    echo "Passwords Match!";
} else {
    echo "Passwords Don't Match :(";
}