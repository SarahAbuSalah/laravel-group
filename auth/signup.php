<?php
require "login_operations.PHP";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>signup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-[80%] mx-auto bg-white p-8 shadow">
        
        <h2 class="text-2xl font-bold text-center mb-6">SignUp</h2>

        <form method="POST" class="space-y-4">


            <!-- Name -->
            <div>
                <label class="block text-gray-700 mb-1">Name</label>
                <input type="text" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your name">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your email">
                <?php if(isset($emailError)) { ?>
                    <p class="text-red-500 text-sm mt-1"><?= $emailError ?></p>
                <?php } ?>
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your password">
            </div>

            <!-- Button -->
            <button type="submit" name="signup" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg transition">
                SignUp Now
            </button>

        </form>