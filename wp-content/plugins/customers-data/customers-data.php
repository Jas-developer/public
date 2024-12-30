<?php 

/*
 * Plugin Name: Customers Data

*/

//class
class Customers {
    public $method_type;
    public $data_url_api;


    public function __construct($method_type, $data_url_api)
    {
        $this -> method_type = $method_type;
        $this -> data_url_api = $data_url_api;
    }

    function get_data_extract(){
        
        $data = $this -> data_url_api;
    
        ?>
           <script>
             const api = "<?php echo esc_js($data) ?>";
             
             //
             let data_to_json;

            


           </script>
        <?php 


    }
}


//creating an object
$words_counter = new Customers(null,null);