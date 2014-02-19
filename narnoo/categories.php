<?php

class Category extends WebClient {

    public $url = 'http://localhost:8888/api/2.0/index.php/category/';
    public $authen;

    public function __construct($api_settings) {

        $this->authen = $api_settings;
    }
    
    public function categories() {

        $method = 'categories';

        $this->setUrl($this->url.$method);
        $this->setGet();
        try {
            $response = json_decode( $this->getResponse($this->authen),TRUE);
            return $response;
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function subCategories($id) {

        $method = 'subcategories';
        
        $this->setUrl($this->url.$method.'/'.$id);
        $this->setGet();
        try {
            $response = json_decode( $this->getResponse($this->authen),TRUE);
            return $response;
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    
    
    

}

?>
