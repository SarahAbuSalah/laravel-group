
<?php
require "SQL_Codes.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Edit Task</title>
</head>
<body>
    <div class="w-[80%] mx-auto mt-10">

    <form method="post" class="bg-white p-6 w-full">
                <h2 class="text-2xl font-bold mb-4 text-center">Edit Task</h2>
                <input type="hidden" name="id" value="<?= $task['id']; ?>">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 mb-2 ">Name</label>
                    <input type="text" name="name" value="<?= $task['name']; ?>" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your name">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 mb-2 ">Description</label>
                    <textarea name="description" id="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your description"><?= $task['description']; ?></textarea>
                </div>
                <button name="update" type="submit" class="w-50 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition"> Update Task </button>
    </form>
    </div>
</body>
</html>