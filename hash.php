<?php
// Creating SHA-512 hash of the user's password (DO NOT SAVE IT IN YOUR DATABASE)

$password = 'what ever the user inputs';
$sha512 = hash('SHA512', $password);

// Creating a bcrypt hash

$bcrypt = password_hash("$sha512", PASSWORD_DEFAULT);
?>