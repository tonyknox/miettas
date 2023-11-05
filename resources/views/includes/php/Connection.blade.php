class Connection
    {
        public static function make()
        {
            $arg = func_get_args();
            $db = $arg[0];
            
            if(preg_match ('/recipes/', $db, $matches)){
                try{
                    return new PDO("mysql:host=127.0.0.1;dbname=recipes", 'tony', 'v1gner0n');
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch(PODexception $e){
                    //die($e->getMessage());
                    echo "Connection failed: " . $e->getMessage();
                }
            }
        }
    }