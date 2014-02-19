<?php

class Operator extends WebClient {

    public $operator_url = 'http://connect.narnoo.com/index.php/operator/';
    public $authen;

    public function __construct($authenticate) {

        $this->authen = $authenticate;
    }
    
    public function getImages() {

        $method = 'images';

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getVideos() {

        $method = 'videos';

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getBrochures() {

        $method = 'brochures';

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getDescriptions() {

        $method = 'descriptions';

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getDescriptionText($id) {

        $method = 'description_text';
        $description_id  = $id;
        $method = $method.'/'.$description_id;

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

}

?>
