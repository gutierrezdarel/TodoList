 <?php 
 
    class config{
        private $user = 'root';
        private $pass = 'Allen is Great 200%';
        public $pdo = null;
        private $dbname = 'todolist';

        public function con(){
            try {
                $this->pdo = new PDO("mysql:host=localhost;", $this->user, $this->pass);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $this->pdo->exec("CREATE DATABASE IF NOT EXISTS $this->dbname");
                $this->pdo->exec("USE $this->dbname");
                $this->pdo->exec("CREATE TABLE IF NOT EXISTS users(
                  id int(6) AUTO_INCREMENT PRIMARY KEY,
                  item VARCHAR(50) NOT NULL,
                  stats VARCHAR(50),
                  date_added DATETIME DEFAULT CURRENT_TIMESTAMP,
                  date_completed datetime
                )");



              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
               return $this->pdo;
        }
    }

 ?>