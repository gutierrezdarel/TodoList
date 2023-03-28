<?php
require_once 'php/Init.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">To Do List</a>
        </div>
    </nav>
    <div class="container mt-5">
    <input type="hidden" name="update_id" id="update_id">
        <p><?php
            inserT();
            ?></p>
        <form action="" method="POST">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="To do Task" name="item">
                <button class="btn btn-outline-secondary" type="submit" value="add task">Submit</button>
            </div>
        </form>
            <h3 class="mt-5">PENDING TASK</h3>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Task</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                getP()
                ?>
            </tbody>
        </table>
        <h3 class="mt-5">COMPLETED TASK</h3>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Task</th>
                    <th scope="col">Date Completed</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                getC()
                ?>
            </tbody>
        </table>
        
    </div>

</body>

</html>
<script src="js/actions.js"></script>