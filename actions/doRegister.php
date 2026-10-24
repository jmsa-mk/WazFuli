<?php

// TASK 1 - HANDLE REGISTRATION
// Your mission in this file:
// 1. Start a session and include ../config/db.php.
// 2. Accept POST requests only. Check the CSRF token from the form.
// 3. Read username, email, password, and confirm_password. Reject missing or invalid fields.
// 4. Username: 3-50 characters; use letters, numbers, dots, underscores, or hyphens.
// 5. Email: a valid address, at most 100 characters. Trim username/email, not the password.
// 6. Password: at least 8 characters, at most 72 bytes, with uppercase, lowercase, number, and symbol.
// 7. Make sure confirm_password matches password.
// 8. Check whether the username or email is already used. Use PDO prepared statements.
// 9. Hash the password and insert the account. Always set role to analyst, even if POST contains another role.
// 10. On success, redirect to ../pages/login.php with a session message.
// 11. On failure, return to ../pages/register.php with an error. Never save passwords in session messages.

// TODO: Write your PHP code here.

