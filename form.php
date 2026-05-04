<?php
require "SQL_Codes.php";

session_start();

if(!isset($_SESSION['user_id'])){
    header("location: ../auth/login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Tasks Page</title>
</head>
<body class="bg-gray-100 ">

    <div class="w-[80%] mx-auto mt-10">

        <form method="post" action="auth/login_operations.php" class="flex justify-end p-4">
            <button type="submit" name="logout" class="bg-red-500 transition text-white px-4 py-2 rounded-lg"> Logout </button>
        </form>

        <form method="post" action="SQL_Codes.php" class="bg-white p-6 w-full">
            <h2 class="text-2xl font-bold mb-4 text-center">Tasks</h2>
            <div class="mb-4">
                <label for="name" class="block text-gray-700 mb-2 ">Name</label>
                <input type="text" name="name" id="name" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 mb-2 ">Description</label>
                <textarea name="description" required id="description" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your description"></textarea>
            </div>
            <button name="add_task" type="submit" class="w-50 bg-blue-500 text-white py-2 rounded-lg transition"> Add New Task </button>
        </form>
       
        <table class="bg-white min-w-full border border-white-200 rounded-lg overflow-hidden mt-5 shadow-sm">
            <thead class="">
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
                <tr>
                    <th class="px-6 py-4" scope="row"><?= $i++ ?></th>
                    <td class="px-6 py-4 text-center"><?= $rows['name']; ?></td>
                    <td class="px-6 py-4 text-center space-x-2">
                        <a href="show_task.php?id=<?= $rows['id']; ?>" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm transition">Show</a>
                        <a href="edit_task.php?id=<?= $rows['id']; ?>" class="bg-green-500 text-white px-4 py-2 rounded-lg text-sm transition">edit</a>
                        <form method="post" action="delete_task.php" class="inline">
                            <input type="hidden" name="id" id="id" value="<?= $rows['id']; ?>">
                            <button type="submit" name="delete_task" class="bg-red-500 text-white px-4 py-2 rounded-lg text-sm transition">delete</button>
                        </form>
                    </td>
                </tr> 
            <?php } ?>
            </tbody>
        </table>
        
    </div>

</body>
</html>
