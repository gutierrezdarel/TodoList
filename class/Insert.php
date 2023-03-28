<?php 

    class Insert extends config{
        public $task;
        public $id;

        public function __construct($task,$id){
            $this->task = $task;
        }

        public function insertTask($task){
            $con = $this->con();

            $sql = "INSERT INTO `users`(`item`,`stats`) VALUES ('$this->task', 'PENDING')";
            $data = $con->prepare($sql);
            if($data->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function getPendingtask(){
            $con = $this->con();

            $sql = "SELECT * FROM users WHERE stats = 'PENDING'"; 
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            if($result){
                foreach($result as $row){
                    echo '<tr>';
                    echo '<td>'.$row['item'].'</td>';
                    echo '<td>'.$row['stats'].'</td>';
                    echo '<td><button class="btn btn-success" onclick = Update('.$row['id'].')>Add To Completed Task</button>&nbsp&nbsp&nbsp
                          <button class="btn btn-danger" onclick = Delete('.$row['id'].')>Delete</button></td>';
                    echo '</tr>';
                }
            }
        }
        // public function getCompletedtask(){
        //     $con = $this->con();

        //     $sql = "SELECT * FROM users WHERE stats = 'COMPLETED'"; 
        //     $data = $con->prepare($sql);
        //     $data->execute();
        //     $result = $data->fetchAll(PDO::FETCH_ASSOC);
        //     if($result){
        //         foreach($result as $row){
        //             echo '<tr>';
        //             echo '<td>'.$row['item'].'</td>';
        //             echo '<td>'.$row['stats'].'</td>';
        //             echo '</tr>';
        //         }
        //     }
        // }

        public function UpdateTask(){
            $con = $this->con();


        }
    }

?>