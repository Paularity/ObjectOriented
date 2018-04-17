<? 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.inc.php';


class Product
{
    
   private function __construct()
   {
       echo "This is a private message.";
   }
   
   public static function getInstance(){
       
       static $instance = null;
       if (null == $instance)
       {
           $instance = new static();
       }
       else 
       {
            echo 'This is a public message';   
       }
   }
   
   
}


?>