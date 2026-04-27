<?php

require "connection_db.php";

if(isset($_POST['add_task'])){

    $name = $_POST['name'];

    $description = $_POST['description'];

    $sql = "INSERT INTO tasks VALUES (null, '$name' ,'$description')";

    mysqli_query($conn , $sql);

    header("Location: form.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
        <div class="container mt-5 ">
            <form method="post" action="form.php" class="bg-white p-6 w-full">
                <h2 class="text-2xl font-bold mb-4 text-center">Tasks</h2>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 mb-2 ">Name</label>
                    <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your name">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 mb-2 ">Description</label>
                    <textarea name="description" id="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your description"></textarea>
                </div>
                <button name="add_task" type="submit" class="w-50 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition"> Add New Task </button>
            </form>
        </div>
</body>
</html>