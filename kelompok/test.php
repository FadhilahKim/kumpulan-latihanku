<?php
// See the password_hash() example to see where this came from.
$hash = '$2y$10$WwBGBnKHIBwTrZ0ykKUxAuMaIvFJMmMSWLHvcXl0bQYiQOb/e/dSy';

if (password_verify('123', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
