## Preparation Before Starting

You will build **WazFuli**, a cyber security workspace for storing investigation
evidence such as screenshots, incident reports, and logs.

Before you write any PHP logic, complete these preparation steps:

1. **Import the Database:**

   - Open **phpMyAdmin** and make sure **Apache** and **MySQL** are running.
   - From the phpMyAdmin home page, open the **Import** tab and select `database.sql`.
   - Click **Import**. The script creates and selects `db_wazfuli` automatically.
   - It also creates the `users` and `files` tables, including roles and the user-file relationship.
   - Use `config/db.php` for your database connection.

2. **Prepare the Storage Directory:**

   - Make sure a folder named `uploads` exists in the project root, next to `index.php`.
   - If it already exists, keep the folder and its contents.
   - This folder will store the evidence files uploaded by users.

The frontend is provided with sample data. Your task is to complete registration,
login, sessions, file management, and role checks. Keep the existing folder structure.

The workspace pages already include `pages/header.php` for shared navigation.
Edit the menu and logout form there once. Role conditions and the logout
CSRF token are still your tasks. Prepare the
session and check login in each page before any HTML is shown.

Importing `database.sql` also adds these accounts for local testing:

| Username | Password | Role |
| --- | --- | --- |
| manager | Manager123! | SOC Manager |
| director | Director123! | SOC Director |

Their passwords are stored as BCRYPT hashes. Complete the login task to use them.
Existing usernames or emails are skipped on import; their passwords and roles
are not changed. New accounts from registration must start as `analyst`.

*(Read the comments starting with `//` inside each PHP file for step-by-step
instructions. See [SOAL.md](SOAL.md) for the full tasks.)*

## ⚠️ Warning for the Next Phase

Your code will be the starting point for a **Vulnerability Patching Exercise**.
Write the logic to the best of your ability. After you finish, review how the app
protects user accounts, uploaded evidence, and admin access. Find and fix any
security weaknesses in your code.

Good luck and happy coding! :)
