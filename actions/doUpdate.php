<?php

// TASK 3 - RENAME EVIDENCE
// Your mission in this file:
// 1. Check login, allow POST only, and validate the CSRF token.
// 2. Read id and original_name from the form. The ID must be a positive integer.
// 3. Find the file and check that it belongs to the logged-in user.
// 4. The new name must be 1-255 characters, without folder paths or control characters.
// 5. Keep the original extension. Change only original_name, not stored_name or the file contents.
// 6. Update the record with a PDO prepared statement. Check ownership in the update as well.
// 7. Return to ../pages/list.php with a success message, or the edit page with an error.

// TODO: Write your PHP code here.

