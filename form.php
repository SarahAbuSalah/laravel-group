<?php
require 'SQL_Codes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Tasks Page</title>
</head>
<body>

<div class="w-[80%] mx-auto mt-10">
   
        <form method="post" action="SQL_Codes.php" class="bg-white p-6 w-full">
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
       
        <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden mt-5 shadow-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 " scope="col">id</th>
                    <th class="px-6 py-3 " scope="col">Task</th>
                    <th class="px-6 py-3 " scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php
                $i = 1;
                while ($rows = mysqli_fetch_assoc($result)){ ?>
                <tr class="hover:bg-gray-50 transition">
                    <th class="px-6 py-4" scope="row"><?= $i++ ?></th>
                    <td class="px-6 py-4 text-center"><?= $rows['name']; ?></td>
                    <td class="px-6 py-4 text-center space-x-2">
                        <a href="show_task.php?id=<?= $rows['id']; ?>" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm transition">Show</a>
                        <a href="edit_task.php?id=<?= $rows['id']; ?>" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm transition">edit</a>
                        <form method="post" action="delete_task.php" class="inline">
                            <input type="hidden" name="id" id="id" value="<?= $rows['id']; ?>">
                            <button type="submit" name="delete_task" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm transition">delete</button>
                        </form>
                    </td>
                </tr> 
            <?php } ?>
            </tbody>
        </table>
</div>

</body>
</html>
