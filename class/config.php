 <?php 
 
    class config{
        private $user = 'root';
        private $pass = 'Allen is Great 200%';
        public $pdo = null;

        public function con(){
            try {
                $this->pdo = new PDO("mysql:host=localhost;dbname=todolist", $this->user, $this->pass);

                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Connected successfully";
              } catch(PDOException $e) {
                    // die($e->getMessage());
                echo "Connection failed: " . $e->getMessage();
              }
               return $this->pdo;
        }
    }

 ?>