<?php

// TASK 3 - LIST YOUR EVIDENCE
// Your mission in this file:
// 1. Start a session and check login here. Include ../config/db.php for database queries.
// 2. Read files owned by the logged-in user only.
// 3. JOIN files and users through files.user_id and users.id to show the owner username.
// 4. Replace the sample table row with a loop. Show the real count and an empty-state message when needed.
// 5. Display file name, type, size, owner, and upload date using safe output.
// 6. Set each Edit, Download, and Delete ID from the matching record.
// 7. Use POST for Delete and add its CSRF token. Fill the logout token in header.php.
// 8. Complete the management-link role condition in header.php.

// Shared navigation is in header.php. Prepare login, role, and CSRF data before HTML.

// TODO: Write your PHP code here.

// The HTML below uses sample data for the layout. Replace it as you complete the tasks.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WazFuli - Cyber Incident Evidence Vault">
    <title>Evidence vault | WazFuli</title>
    <link rel="icon" href="../assets/favicon.svg" type="image/svg+xml">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="../assets/script.js" defer></script>
</head>
<body class="min-h-screen bg-slate-950 font-sans text-slate-200 antialiased selection:bg-emerald-300 selection:text-slate-950">
    <?php require_once __DIR__ . '/header.php'; ?>
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
        <div class="mb-8 flex flex-wrap items-end justify-between gap-6">
            <div>
                <p class="mb-3 text-[10px] tracking-[0.25em] text-emerald-400">YOUR INVESTIGATION LIBRARY</p>
                <h1 class="text-3xl font-semibold tracking-tight text-white">Evidence vault<span class="text-emerald-300">.</span></h1>
                <p class="mt-3 text-sm text-slate-400">Your files, organized and ready for investigation.</p>
            </div>
            <a href="upload.php" class="rounded-lg bg-emerald-300 px-5 py-3 text-xs font-semibold text-slate-950 hover:bg-emerald-200">+ Upload evidence</a>
        </div>

        <section class="overflow-hidden rounded-xl border border-slate-800 bg-slate-900/30">
            <div class="flex flex-wrap items-center justify-between gap-4 px-6 py-5">
                <h2 class="text-sm font-medium text-white">All evidence <span class="ml-2 rounded-md bg-slate-800 px-2 py-1 text-[10px] text-slate-400">1</span></h2>
                <label class="flex w-full items-center gap-3 rounded-lg border border-slate-700 bg-slate-950/50 px-3 py-2 sm:w-64">
                    <span class="text-slate-500" aria-hidden="true">⌕</span>
                    <span class="sr-only">Search filename</span>
                    <input type="search" data-file-search placeholder="Search evidence…" class="w-full bg-transparent text-xs text-slate-300 outline-none placeholder:text-slate-600">
                </label>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                    <thead class="border-y border-slate-800 bg-slate-900/70 text-slate-500">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium">File name</th>
                            <th scope="col" class="px-5 py-4 font-medium">Type / Size</th>
                            <th scope="col" class="px-5 py-4 font-medium">Uploaded by</th>
                            <th scope="col" class="px-5 py-4 font-medium">Upload date</th>
                            <th scope="col" class="px-6 py-4 text-right font-medium">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/70">
                        <!-- TASK 3: Escape database text before displaying it to prevent XSS. -->
                        <!-- TODO: Replace this sample row with a loop over the database results; escape text values. -->
                        <tr data-file-row class="hover:bg-slate-800/30">
                            <td class="min-w-52 px-6 py-5">
                                <a href="edit.php?id=101" class="font-medium text-slate-200 hover:text-emerald-300">incident-report.pdf</a>
                                <p class="mt-1 text-[10px] text-slate-600">Evidence #101</p>
                            </td>
                            <td class="px-5 py-5">
                                <p class="text-slate-400">application/pdf</p>
                                <p class="mt-1 text-[10px] text-slate-600">256.0 KB</p>
                            </td>
                            <td class="px-5 py-5 text-slate-400">sample_analyst</td>
                            <td class="whitespace-nowrap px-5 py-5 text-slate-500">2026-10-24 09:00</td>
                            <td class="px-6 py-5">
                                <div class="flex items-center justify-end gap-3 whitespace-nowrap">
                                    <a href="../actions/download.php?id=101" class="text-emerald-300 hover:underline">Download</a>
                                    <a href="edit.php?id=101" class="text-slate-400 hover:text-white">Edit</a>
                                    <!-- TASK 3: Check POST, ownership, and the CSRF token in the delete action. -->
                                    <form action="../actions/doDelete.php" method="POST" data-confirm-delete>
                                        <!-- TODO: Replace the sample ID with the matching database ID. -->
                                        <input type="hidden" name="id" value="101">
                                        <!-- TODO: Fill this value with the session CSRF token and check it in the action. -->
                                        <input type="hidden" name="csrf_token" value="">
                                        <button type="submit" class="text-red-400 hover:text-red-300">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <!-- TODO: End your loop here. -->
                        <!-- TODO: Show this row only when the file list is empty. -->
                        <tr hidden>
                            <td colspan="5" class="px-6 py-16 text-center text-slate-500">Your vault is empty. <a href="upload.php" class="text-emerald-300">Add your first evidence.</a></td>
                        </tr>
                    </tbody>
                </table>
                <p data-no-results hidden class="px-6 py-12 text-center text-xs text-slate-500">No evidence matches your search.</p>
            </div>
            <div class="border-t border-slate-800 px-6 py-4 text-[11px] text-slate-600">Sample evidence for the layout. Replace it with files owned by the logged-in user.</div>
        </section>
    </main>
    <footer class="mx-auto flex max-w-6xl flex-wrap justify-between gap-3 border-t border-slate-800/70 px-6 py-6 text-[11px] text-slate-600">
        <span>WazFuli / Cyber Incident Evidence Vault</span>
        <span>Keep the evidence. Protect the investigation.</span>
    </footer>
</body>
</html>
