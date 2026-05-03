<?php
require "connection_db.php";

if(isset($_POST['delete_task'])){
        $id = $_POST['id'];

        $sql = "DELETE FROM tasks WHERE id = $id";

        mysqli_query($conn , $sql);

        header("location:form.php");
    }
