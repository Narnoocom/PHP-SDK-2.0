<?php

class Distributor extends WebClient {

    public $distributor_url = 'http://connect.narnoo.com/distributor/';
    public $authen;

    public function __construct($authenticate) {

        $this->authen = $authenticate;
    }
    
    public function getAccount() {

        $method = 'account';

        $this->setUrl($this->distributor_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    public function getImages() {

        $method = 'images';

        $this->setUrl($this->distributor_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getVideos() {

        $method = 'videos';

        $this->setUrl($this->distributor_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getBrochures() {

        $method = 'brochures';

        $this->setUrl($this->distributor_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getAlbums() {

        $method = 'albums';

        $this->setUrl($this->distributor_url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    public function getAlbumImages($dst_id,$album_id) {

        $method = 'album_images';
        

        $this->setUrl($this->distributor_url . $method .'/'. $dst_id . '/' .$album_id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
     public function getLogos($dst_id) {

        $method = 'logos';
        

        $this->setUrl($this->distributor_url . $method .'/'. $dst_id );
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

    
    public function albumCreate($dst_id,$album_name) {

        $method = 'album_create';
        

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "id=".$dst_id."&name=".trim($album_name) );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function albumDelete($dst_id,$album_id) {

        $method = 'album_destroy';
        

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "id=".$dst_id."&album_id=".$album_id );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function albumRemoveImage($dst_id,$album_id,$image_id) {

        $method = 'album_remove_image';
        

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "id=".$dst_id."&album_id=".$album_id."&image_id=".$image_id );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function editBrochureCaption($dst_id,$bro_id,$caption) {

        $method = 'edit_brochure_caption';
        

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "id=".$dst_id."&brochure_id=".$bro_id."&caption=".$caption );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
       
    public function editVideoCaption($dst_id,$video_id,$caption) {

        $method = 'edit_video_caption';
        

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "id=".$dst_id."&video_id=".$video_id."&caption=".$caption );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function editImageCaption($dst_id,$image_id,$caption) {

        $method = 'edit_image_caption';
        

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "id=".$dst_id."&image_id=".$image_id."&caption=".$caption );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    
    
    public function deleteImage($dst_id,$image_id) {

        $method = 'delete_image';

        $this->setUrl($this->distributor_url.$method);
        $this->setPost( "id=".$dst_id."&image_id=".$image_id );
        try {
            $response = json_decode( $this->getResponse($this->authen),TRUE);
            return $response;
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getVideoDetails($video_id) {

        $method = 'video_details';
        

        $this->setUrl($this->distributor_url . $method .'/'. $video_id );
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

    public function albumAddImage($dst_id,$album_id,$image_id) {

        $method = 'album_add_image';
        

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "id=".$dst_id."&album_id=".$album_id."&image_id=".$image_id );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    
}

?>
