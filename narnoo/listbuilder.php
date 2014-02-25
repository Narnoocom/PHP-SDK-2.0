<?php

class Listbuilder extends WebClient {

    public $url = 'http://connect.narnoo.com/listing/';
    public $authen;

    public function __construct($authenticate) {

        $this->authen = $authenticate;
    }
    
    public function builder($op_id,$images=NULL,$brochure=NULL,$video=NULL,$description=NULL) {

        $method = 'builder';
        
        if(!empty($images)){
        $post_builder .= '&images='.$images;
        }
        if(!empty($brochure)){
        $post_builder .= '&brochure='.$brochure;
        }
        if(!empty($video)){
        $post_builder .= '&video='.$video;
        }
        if(!empty($description)){
        $post_builder .= '&description='.$description;
        }

        $this->setUrl($this->url . $method);
        $this->setPost( "id=".$op_id.$post_builder );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    
}

?>
