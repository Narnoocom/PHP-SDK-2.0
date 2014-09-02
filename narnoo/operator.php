<?php

class Operator extends WebClient {

    public $operator_url = 'http://connect.narnoo.com/operator/';
    public $authen;

    public function __construct($authenticate) {

        $this->authen = $authenticate;
    }
    
    public function accountDetails() {

        $method = 'operator_details';

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function account_get() {

        $method = 'account';

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
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
    
    public function getOpImages($imageId) {

        $method = 'operator_image';

        $this->setUrl($this->operator_url . $method."/?image_id=".$imageId);
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
    
    public function getAlbums() {

        $method = 'albums';

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
    public function getDistributor() {

        $method = 'distributors';

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
    
    public function getAlbumImages($id) {

        $method = 'album_images';
        $method = $method.'/'.$id;

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function video_details($id) {

        $method = 'video_details';
        $method = $method.'/'.$id;

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
     public function download_video_get($id) {

        $method = 'download_video';
        $method = $method.'/'.$id;

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
   
    
     public function related_operator_get() {

        $method = 'related_operator';

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
   
    public function download_brochure_get($id) {

        $method = 'download_brochure';
        $method = $method.'/'.$id;

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
	
    public function download_image_get($id) {

        $method = 'download_image';
        $method = $method.'/'.$id;

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
    public function brochure_details($id) {

        $method = 'brochure_details';
        $method = $method.'/'.$id;

        $this->setUrl($this->operator_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
	
    public function uploadImage($file_path) {

        $method = 'upload_image';
        
        $extension = pathinfo($file_path,PATHINFO_EXTENSION);
        $file_size = filesize($file_path);
        array_push($this->authen,'File-Type: '. $extension);
        array_push($this->authen,'File-Size: '. $file_size);
        $postData = array(
                'image_contents' => '@'.$file_path,
        );
        $this->setUrl($this->operator_url . $method);
        $this->setPost($postData);
        try {
            return json_decode( $this->getResponse($this->authen) );
       } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
        
    }

    public function upload_brochure_post($file_path) {

        $method = 'upload_brochure';
        
        $extension = pathinfo($file_path,PATHINFO_EXTENSION);
        $file_size = filesize($file_path);
        array_push($this->authen,'File-Type: '. $extension);
        array_push($this->authen,'File-Size: '. $file_size);
        $postData = array(
                'brochure_contents' => '@'.$file_path,
        );
        $this->setUrl($this->operator_url . $method);
        $this->setPost($postData);
        try {
            return json_decode( $this->getResponse($this->authen) );
       } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
        
    }

    public function album_create($name) {

        $method = 'album_create';
        

        $this->setUrl($this->operator_url . $method);
        $this->setPost( "name=".$name);
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    

    public function album_add_image($albumid,$imageId) {

        $method = 'album_add_image';
        

        $this->setUrl($this->operator_url . $method);
        $this->setPost( "album_id=".$albumid."&image_id=".$imageId);
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    

    public function album_remove_image($albumid,$imageId) {

        $method = 'album_remove_image_post';
        

        $this->setUrl($this->operator_url . $method);
        $this->setPost( "album_id=".$albumid."&image_id=".$imageId);
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    

    public function album_destroy($albumid) {

        $method = 'album_destroy';
        

        $this->setUrl($this->operator_url . $method);
        $this->setPost( "album_id=".$albumid);
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    

    public function edit_image_caption_post($imageid,$caption) {

        $method = 'edit_image_caption';
        

        $this->setUrl($this->operator_url . $method);
        $this->setPost( "image_id=".$imageid."&caption=".$caption);
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }


    public function edit_video_caption_post($videoId,$caption) {

        $method = 'edit_video_caption';
        

        $this->setUrl($this->operator_url . $method);
        $this->setPost( "video_id=".$videoId."&caption=".$caption);
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
	
    public function edit_video_privilege_post($videoId,$access) {

        $method = 'edit_video_privilege';
        

        $this->setUrl($this->operator_url . $method);
        $this->setPost( "video_id=".$videoId."&access=".$access);
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
	
    public function edit_brochure_caption_post($brochure_id,$caption) {

        $method = 'edit_brochure_caption';
        

        $this->setUrl($this->operator_url . $method);
        $this->setPost( "brochure_id=".$brochure_id."&caption=".$caption);
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
	
    public function edit_brochure_privilege_post($brochure_id,$access) {

        $method = 'edit_brochure_privilege';
        

        $this->setUrl($this->operator_url . $method);
        $this->setPost( "brochure_id=".$brochure_id."&access=".$access);
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
	


}

?>
