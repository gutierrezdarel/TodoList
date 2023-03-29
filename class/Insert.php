<?php 

    class Insert extends config{


        public function insertTask($item){
            $con = $this->con();

            $sql = "INSERT INTO `users`(`item`,`stats`) VALUES ('$item', 'PENDING')";
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
                    echo '<td><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal" onclick = Update('.$row['id'].') >Add To Completed Task</button>&nbsp&nbsp&nbsp
                          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal" onclick = Delete('.$row['id'].')>Delete</button></td>';
                    echo '</tr>';
                }
            }
        }
        public function getCompletedtask(){
            $con = $this->con();

            $sql = "SELECT * FROM users WHERE stats = 'COMPLETED'"; 
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            if($result){
                foreach($result as $row){
                    echo '<tr>';
                    echo '<td>'.$row['item'].'</td>';
                    echo '<td>'.$row['stats'].'</td>';
                    echo '<td>'.$row['date_completed'].'</td>';
                    echo '</tr>';
                }
            }
        }

        public function UpdateTask($id){
            $con = $this->con();

            $sql_update = "UPDATE users SET stats = 'COMPLETED' , date_completed = NOW() WHERE id = '$id'";
            $data = $con->prepare($sql_update);
            if($data->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function DeleteTask($delete_id){
            $con = $this->con();

            $sql_delete = " DELETE FROM users WHERE id = '$delete_id'";
            $data = $con->prepare($sql_delete);
            if($data->execute()){
                return true;
            }else{
                return false;
            }
        }
    }

?>