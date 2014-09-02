<?php

class Builder extends WebClient {

    public $url = 'http://connect.narnoo.com/builder/';
    public $authen;

    public function __construct($authenticate) {

        $this->authen = $authenticate;
    }
    
	public function getList($id,$images,$brochure,$video,$description,$social,$albumId,$broId,$vId,$desId) 
	{
		$method = 'list';
		$this->setUrl($this->url . $method .'/?id=' .$id.'&images='.$images.'&brochure='.$brochure.'&video='.$video.'&description='.$description.'&social='.$social.'&album='.$albumId.'&brochure_id='.$broId.'&video_id='.$vId.'&description_id='.$desId);
		$this->setGet();
		try {
			return json_decode( $this->getResponse($this->authen) );
		} catch (Exception $e) {
			return 'Error: ' . $e->getMessage();
		}
	}
	
	public function related_operator_get($id) {
		$method = 'related_operator'; 
		$this->setUrl($this->url . $method .'/?operator_d='. $id);
		$this->setGet();
		try {
			return json_decode( $this->getResponse($this->authen) );
		} catch (Exception $e) {
			return 'Error: ' . $e->getMessage();
		}
	}
	
	
	public function getBuilder($id,$images,$brochure,$video,$description,$social,$albumId,$broId,$vId,$desId) {
		$method = 'builderduplicate';
		$this->setUrl($this->url . $method);
		$this->setPost('id='. $id."&brochure_id=".$broId."&video_id=".$vId."&description_id=".$desId."&album=".$albumId.'&images='.$images.'&brochure='.$brochure.'&video='.$video.'&description='.$description.'&social='.$social);
		try {
			return json_decode( $this->getResponse($this->authen) );
		} catch (Exception $e) {
			return 'Error: ' . $e->getMessage();
		}
	}    
}

?>
