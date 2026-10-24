<?php

// TASK 3 AND 4 - DELETE EVIDENCE
// Your mission in this file:
// 1. Check login, allow POST only, and validate the CSRF token and file id.
// 2. Find the file and read the current user role from the database.
// 3. An analyst may delete only their own files. A manager or director may delete any file.
// 4. Check this permission on the server, even if the form button is hidden.
// 5. Use stored_name from the database to find the file inside ../uploads.
// 6. Delete the physical file and its database record. Handle errors without reporting false success.
// 7. Use scope only to choose the return page. It must never give the user extra permissions.
// 8. Return to ../pages/manageFiles.php for management requests, or ../pages/list.php for the personal vault.

// TODO: Write your PHP code here.

