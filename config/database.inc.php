<?

class Database {

    private $host = 'localhost'; 
    private $user = 'root';
    private $pass = ''; 
    private $db = 'votingsystem_db';

    public function __construct() {
        try{
            $this->connection = new PDO('mysql:host='.$this->host.';dbname='.$this->db, $this->user, $this->pass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);          
        }catch(PDOException $e){
            die("Failed to connect to Database: ". $e->getMessage());
        }
    }
    
    public function getData($table_name, $vin)
    {
        $sql="SELECT * FROM " . $table_name . " WHERE vin= '" . $vin . "'";
        $query = $this->connection->query($sql) or die("failed!");
        
        while($result = $query->fetch(PDO::FETCH_ASSOC)){
            $data[]=$result;
        }
        return $data;
    }
    
    public function getAllData($table_name)
    {
        $sql="SELECT * FROM " . $table_name;
        $query = $this->connection->query($sql) or die("failed!");
        
        while($result = $query->fetch(PDO::FETCH_ASSOC)){
            $data[]=$result;
        }
        return $data;
    }

}



?>
