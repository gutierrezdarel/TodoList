
<?php

function inserT()
{
    if (isset($_POST['submit'])) {
        $item = $_POST['item'];
        $Insert = new Insert();
        if ($Insert->insertTask($item)) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully Insert!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Not Inserted!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        }
    }
}


function getP()
{

    $viewTask = new Insert();
    $viewTask->getPendingtask();
}

function getC()
{
    $viewTask = new Insert();
    $viewTask->getCompletedtask();
}


function UpdateT()
{
    if (isset($_POST['update'])) {
        $id = $_POST['update_id'];
        $UpdateTask = new Insert();
        if ($UpdateTask->UpdateTask($id)) {
            
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Task Completed</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Not Completed</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        }
    }
}


function DeleteT()
{
    if (isset($_POST['delete'])) {
        $delete_id = $_POST['delete_id'];
        $DeleteTask = new Insert();
        if ($DeleteTask->DeleteTask($delete_id)) {
            
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Deleted</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Not Deleted</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        }
    }
}


?>