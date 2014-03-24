<?php

class Register extends WebClient {

    public $url = 'http://connect.narnoo.com/registration/';
    public $authen;

    public function __construct($authenticate) {

        $this->authen = $authenticate;
    }
    
    public function registerOperator($businessName,$contact,$email,$url,$phCode,$areaPhone,$phone,$category,$subcategory,$keywords=NULL,$latitude=NULL,$longitude=NULL,$address=NULL) {
        
        if(!empty($keywords)){
            $option_fields .='&keywords='.$keywords;
        }
        if(!empty($latitude) && !empty($longitude)){
        $option_fields .= '&latitude='.$latitude.'&longitude='.$longitude;
        }
        if(!empty($address)){
        $option_fields .= '&address='.$address;
        }
        
        $method = 'register_operator';
        
        $this->setUrl( $this->url . $method );
        $this->setPost( "businessName=".$businessName."&contactName=".$contact."&email=".$email."&url=".$url."&countryCode=".$phCode."&areaPhone=".$areaPhone."&phone=".$phone."&category=".$category."&subcategory=".$subcategory.$option_fields );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    
    
}

?>
