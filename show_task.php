
<?php
require "SQL_Codes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Task Info</title>
</head>
<body>
   
<div class="w-[80%] mx-auto mt-10">
    <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden mt-5 shadow-sm">
            <thead class="bg-gray-100">
                <tr>
                    
                    <th class="px-6 py-3 " scope="col">Task Name</th>
                    <th class="px-6 py-3 " scope="col">Task Description</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 text-center"> <?= $task['name']; ?> </td>
                    <td class="px-6 py-4 text-center"> <?= $task['description']; ?> </td>
                </tr> 
            </tbody>
        </table>
</div>

</body>
</html>