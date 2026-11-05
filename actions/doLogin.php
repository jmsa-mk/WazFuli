<?php

// TASK 1 - HANDLE LOGIN
// Your mission in this file:
// 1. Start a session and include ../config/db.php.
// 2. Accept POST requests only. Validate the CSRF token, username, and password.
// 3. Find the user by username using a PDO prepared statement.
// 4. Use password_verify() to check the password against the bcrypt hash in users.password.
// 5. If login succeeds, change the session ID to prevent session fixation.
// 6. Save the user ID, username, email, and role in the session. Do not save the password.
// 7. After login succeeds, handle the two checkboxes separately. The user can check both.
//    If remember_username is checked, save the username in the rememberUser cookie for 7 days.
//    If it is unchecked, clear rememberUser. This cookie only fills in the username field.
// 8. If remember_me is checked, create a new token with bin2hex(random_bytes(32)).
//    Hash this random token with SHA-256 and save the result in users.remember_token_hash.
//    Set remember_expires_at to 7 days from now. Put the original token in the remember_me cookie.
// 9. Give the cookie the same expiry. Use HttpOnly, SameSite=Lax, and Secure on HTTPS.
//    Use the same cookie path for the login page and the logout action.
// 10. If remember_me is unchecked, revoke this browser's matching token and clear the remember_me cookie.
// 11. Redirect to ../pages/index.php on success, or ../pages/login.php with an error on failure.

// TODO: Write your PHP code here.

