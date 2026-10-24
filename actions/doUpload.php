<?php

// TASK 2 - UPLOAD EVIDENCE
// Your mission in this file:
// 1. Start a session, check login, and include ../config/db.php. Accept POST and check the CSRF token.
// 2. Read the uploaded file from fileUpload. Check upload errors and that a file was actually uploaded.
// 3. Allow a size from 1 byte to 5 MB. Allow only JPG, PNG, PDF, and TXT.
// 4. Check both the extension and the real MIME type on the server. Do not trust the browser file type.
// 5. Reject invalid file names and paths. Generate a new, random stored_name.
// 6. Use the existing ../uploads folder, or create it if missing. Prevent direct access and script execution.
// 7. Move the uploaded file into that folder.
// 8. Insert user_id, original_name, stored_name, file_size, and file_type into files.
// 9. Use the user ID from the session and a PDO prepared statement. Store the real MIME in file_type.
// 10. If the database insert fails, remove the file that was just moved.
// 11. Redirect to ../pages/list.php on success, or ../pages/upload.php with an error on failure.

// TODO: Write your PHP code here.

