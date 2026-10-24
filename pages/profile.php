<?php

// TASK 1 - PROFILE PAGE
// Your mission in this file:
// 1. Start a session and check login here. Include ../config/db.php for database queries.
// 2. Replace the sample username, email, and role with the current account details.
// 3. Read the account using the session user ID, not an ID sent in the URL.
// 4. Use htmlspecialchars when displaying account details.
// 5. Show management links only for a manager or director. Add a CSRF token to logout.

// TODO: Write your PHP code here.

// The HTML below uses sample data for the layout. Replace it as you complete the tasks.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WazFuli - Cyber Incident Evidence Vault">
    <title>Analyst profile | WazFuli</title>
    <link rel="icon" href="../assets/favicon.svg" type="image/svg+xml">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="../assets/script.js" defer></script>
</head>
<body class="min-h-screen bg-slate-950 font-sans text-slate-200 antialiased selection:bg-emerald-300 selection:text-slate-950">
    <header class="border-b border-slate-800/80 bg-slate-950">
        <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-5 px-6 py-5">
            <a href="index.php" class="inline-flex items-center gap-3 text-2xl font-semibold tracking-tight text-white">
                <span class="flex h-10 w-10 items-center justify-center rounded-xl border border-emerald-400/25 bg-emerald-400/10 text-emerald-300">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path d="m12 3-8 3v6c0 4 8 9 8 9s8-5 8-9V6z" />
                        <path d="m8 12 3 3 5-6" />
                    </svg>
                </span>
                WazFuli<span class="-ml-3 text-emerald-300">.</span>
            </a>
            <nav class="flex flex-wrap items-center gap-1 text-xs" aria-label="Main navigation">
                <a href="index.php" class="rounded-lg px-4 py-2 transition text-slate-400 hover:bg-slate-800 hover:text-white">Dashboard</a>
                <a href="list.php" class="rounded-lg px-4 py-2 transition text-slate-400 hover:bg-slate-800 hover:text-white">Evidence</a>
                <a href="upload.php" class="rounded-lg px-4 py-2 transition text-slate-400 hover:bg-slate-800 hover:text-white">Upload</a>
                <a href="profile.php" class="rounded-lg px-4 py-2 transition bg-emerald-400/10 text-emerald-300" aria-current="page">Profile</a>
                <!-- TODO: Show these links only for SOC Manager or SOC Director. -->
                <a href="users.php" class="rounded-lg px-4 py-2 text-emerald-300 hover:bg-emerald-400/10">Users</a>
                <a href="manageFiles.php" class="rounded-lg px-4 py-2 text-emerald-300 hover:bg-emerald-400/10">Manage files</a>
                <form action="../actions/doLogout.php" method="POST" class="ml-2">
                    <!-- TODO: Fill this value with the session CSRF token and check it in the action. -->
                    <input type="hidden" name="csrf_token" value="">
                    <button type="submit" class="rounded-lg border border-slate-700 px-4 py-2 text-slate-400 transition hover:border-slate-500 hover:text-white">Logout</button>
                </form>
            </nav>
        </div>
    </header>
    <main class="mx-auto max-w-6xl px-6 py-9 md:py-12">
        <p class="mb-6 text-[10px] tracking-widest text-amber-300">PRACTICE TEMPLATE / SAMPLE DATA</p>
        <!-- TASK: Show session messages once and escape their text. -->
        <!-- TODO: Show this error box only when a session message exists; escape its text. -->
        <div hidden role="alert" class="mb-6 rounded-xl border border-red-400/20 bg-red-400/10 px-5 py-4 text-sm text-red-300">
            Your error message goes here.
        </div>

        <!-- TODO: Show this success box only when a session message exists; escape its text. -->
        <div hidden role="status" class="mb-6 rounded-xl border border-emerald-400/20 bg-emerald-400/10 px-5 py-4 text-sm text-emerald-300">
            Your success message goes here.
        </div>
        <div class="mb-8">
            <p class="mb-3 text-[10px] tracking-[0.25em] text-emerald-400">THE ANALYST BEHIND THE EVIDENCE</p>
            <h1 class="text-3xl font-semibold tracking-tight text-white">Your profile<span class="text-emerald-300">.</span></h1>
            <p class="mt-3 text-sm text-slate-400">Your identity in the WazFuli workspace.</p>
        </div>
        <!-- TASK 1: Use the logged-in account details and escape them here. -->
        <section class="max-w-2xl rounded-xl border border-slate-800 bg-slate-900/40 p-7">
            <div class="mb-7 flex items-center gap-4 border-b border-slate-800 pb-6">
                <span class="flex h-14 w-14 items-center justify-center rounded-2xl border border-emerald-400/20 bg-emerald-400/10 text-lg text-emerald-300">WF</span>
                <div>
                    <h2 class="font-medium text-white">sample_analyst</h2>
                    <p class="mt-1 text-xs text-slate-500">Security Analyst</p>
                </div>
            </div>
            <div class="mb-5">
                <label for="profile-username" class="mb-2 block text-xs text-slate-400">Username</label>
                <input id="profile-username" value="sample_analyst" readonly class="w-full rounded-lg border border-slate-800 bg-slate-950/70 px-4 py-3 text-sm text-slate-300">
            </div>
            <div>
                <label for="profile-email" class="mb-2 block text-xs text-slate-400">Email address</label>
                <input id="profile-email" value="analyst@example.com" readonly class="w-full rounded-lg border border-slate-800 bg-slate-950/70 px-4 py-3 text-sm text-slate-300">
            </div>
        </section>
    </main>
    <footer class="mx-auto flex max-w-6xl flex-wrap justify-between gap-3 border-t border-slate-800/70 px-6 py-6 text-[11px] text-slate-600">
        <span>WazFuli / Cyber Incident Evidence Vault</span>
        <span>Keep the evidence. Protect the investigation.</span>
    </footer>
</body>
</html>
