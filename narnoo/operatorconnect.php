<?php

class Operatorconnect extends WebClient {

    public $url = 'http://connect.narnoo.com/connect/';
    public $authen;

    public function __construct($authenticate) {

        $this->authen = $authenticate;
    }
    
    public function getImages($id) {

        $method = 'images';
        

        $this->setUrl($this->url . $method .'/'. $id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getVideos($id) {

        $method = 'videos';

        $this->setUrl($this->url . $method .'/'. $id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getBrochures($id) {

        $method = 'brochures';

        $this->setUrl($this->url . $method .'/'. $id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getDescriptions($id) {

        $method = 'descriptions';

        $this->setUrl($this->url . $method .'/'. $id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getDescriptionText($userId,$id) {

        $method = 'words';
        $method = $method.'/'.$userId.'/'.$id;

        $this->setUrl($this->url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getAccount($id) {

        $method = 'account';
        

        $this->setUrl($this->url . $method .'/'. $id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getAlbumImages($op_id,$album_id) {

        $method = 'album_images';
        

        $this->setUrl($this->url . $method .'/'. $op_id . '/' .$album_id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getAlbums($op_id) {

        $method = 'albums';
        

        $this->setUrl($this->url . $method .'/'. $op_id );
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getBrochureDetails($op_id,$bro_id) {

        $method = 'brochure_details';
        

        $this->setUrl($this->url . $method .'/'. $op_id . '/' .$bro_id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function downloadBrochure($op_id,$bro_id) {

        $method = 'download_brochure';
        

        $this->setUrl($this->url . $method .'/'. $op_id . '/' .$bro_id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function downloadImage($op_id,$img_id) {

        $method = 'download_image';
        

        $this->setUrl($this->url . $method .'/'. $op_id . '/' .$img_id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function downloadVideo($op_id,$video_id) {

        $method = 'download_video';
        

        $this->setUrl($this->url . $method .'/'. $op_id . '/' .$video_id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function geolocation($lat,$long,$distance) {

        $method = 'geo';
        

        $this->setUrl($this->url . $method .'?latitude='. $lat . '&longitude=' .$long . '&distance='. $distance);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getLogos($op_id) {

        $method = 'logos';
        

        $this->setUrl($this->url . $method .'/'. $op_id );
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getSingleImage($op_id,$img_id) {

        $method = 'single_image';
        

        $this->setUrl($this->url . $method .'/'. $op_id .'/'. $img_id );
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getVideoDetails($op_id,$video_id) {

        $method = 'video_details';
        

        $this->setUrl($this->url . $method .'/'. $op_id .'/'. $video_id );
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
   /****************
    * 
    * POST REQUESTS
    * 
    ***************/

    public function albumAddImage($op_id,$album_id,$image_id) {

        $method = 'album_add_image';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "id=".$op_id."&album_id=".$album_id."&image_id=".$image_id );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function albumCreate($op_id,$album_name) {

        $method = 'album_create';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "id=".$op_id."&name=".trim($album_name) );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function albumDelete($op_id,$album_id) {

        $method = 'album_destroy';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "id=".$op_id."&album_id=".$album_id );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function albumRemoveImage($op_id,$album_id,$image_id) {

        $method = 'album_remove_image';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "id=".$op_id."&album_id=".$album_id."&image_id=".$image_id );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function editBrochureCaption($op_id,$bro_id,$caption) {

        $method = 'edit_brochure_caption';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "id=".$op_id."&brochure_id=".$bro_id."&caption=".$caption );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
       
    public function editVideoCaption($op_id,$video_id,$caption) {

        $method = 'edit_video_caption';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "id=".$op_id."&video_id=".$video_id."&caption=".$caption );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function editImageCaption($op_id,$image_id,$caption) {

        $method = 'edit_image_caption';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "id=".$op_id."&image_id=".$image_id."&caption=".$caption );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
}

?>
