<?php
// Creating SHA-512 hash of the user's password (DO NOT SAVE IT IN YOUR DATABASE)

$password = 'what ever the user inputs';
$sha512 = hash('SHA512', $password);

// Creating a bcrypt hash

$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq'; // a hash from your database
if (password_verify($sha512, $hash)) {
echo 'Password is correct';
} else { echo 'Password is incorrect'; }
?>