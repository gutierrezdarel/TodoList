
<?php 

function inserT(){

    if(!empty($_POST['item'])){
        $Insert = new Insert($_POST['item']);
        if($Insert->insertTask()){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successfully Insert!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Not Inserted!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        
    }

    function getP(){

        $viewTask = new Insert();
        $viewTask->getPendingtask();

    }

    function getC(){

    }
}

?>