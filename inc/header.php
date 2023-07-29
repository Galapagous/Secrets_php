<?php 
include 'config/database.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog</title>
</head>
<body>
    <nav id="navbar" class="flex py-6 w-3/4 mx-auto justify-between items-center border-b-2">
        <div class="logo"><h2 class="text-2xl font-bold">Secrets</h2></div>
        <ul class="flex items-center gap-4">
            <li class="text-stone-600 p-2 hover:bg-stone-600 hover:text-stone-100"><a href='index.php'>Home</a></li>
            <li class="text-stone-600 p-2 hover:bg-stone-600 hover:text-stone-100"><a href='about.php'>About</a></li>
            <li class="text-stone-600 p-2 hover:bg-stone-600 hover:text-stone-100"><a href='secrets.php'>secrets</a></li>
        </ul>
    </nav>