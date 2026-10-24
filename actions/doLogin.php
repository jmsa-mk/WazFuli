<?php

// TASK 1 - HANDLE LOGIN
// Your mission in this file:
// 1. Start a session and include ../config/db.php.
// 2. Accept POST requests only. Validate the CSRF token, username, and password.
// 3. Find the user by username using a PDO prepared statement.
// 4. Check the password against the saved hash.
// 5. If login succeeds, change the session ID to prevent session fixation.
// 6. Save the user ID, username, email, and role in the session. Do not save the password.
// 7. If remember_username is checked, save only the username in a cookie for 7 days.
// 8. If it is unchecked, remove the old username cookie. A cookie must not log the user in.
// 9. Use appropriate cookie settings: HttpOnly, SameSite, and Secure when using HTTPS.
// 10. Redirect to ../pages/index.php on success, or ../pages/login.php with an error on failure.

// TODO: Write your PHP code here.

