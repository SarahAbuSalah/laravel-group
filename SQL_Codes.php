<?php

require "connection_db.php";

if(isset($_POST['add_task'])){
    $task_name = $_POST['name'];
    $task_description = $_POST['description'];

    $sql = "INSERT INTO tasks VALUES (null , '$task_name' , '$task_description')";
    mysqli_query($conn ,$sql);
    
    header("location:form.php");
}

$sql_fetch_tasks = "SELECT * FROM tasks" ;
$result = mysqli_query($conn , $sql_fetch_tasks);


// show && update task

$id = $_GET['id'] ?? null ;

if(isset($id)){

    $sql_fetch_task = "SELECT * FROM tasks WHERE id = $id" ;
    $result = mysqli_query($conn , $sql_fetch_task);
    $task = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) == 0){

        header("location:notfound.php");

        exit();
    }

}

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql_update_task = "UPDATE tasks SET name = '$name' , description = '$description' WHERE id = $id" ;
    mysqli_query($conn, $sql_update_task);

    header("location:form.php");

    }
























