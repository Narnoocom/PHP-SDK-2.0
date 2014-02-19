<?php

class Authenticate extends WebClient {

    public $authenticate_url = 'http://connect.narnoo.com/oauth/';
    public $authen;

    public function __construct($api_settings) {

        $this->authen = $api_settings;
    }
    
    public function access($access,$secret) {

        $method = 'accesstoken';

        $this->setUrl($this->authenticate_url.$method);
        $this->setPost( "client_id=".$access."&client_secret=".$secret."&grant_type=client_credentials");
        try {
            $authen_response = json_decode( $this->getResponse($this->authen),TRUE);
            return $authen_response['access_token'];
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    

}

?>
