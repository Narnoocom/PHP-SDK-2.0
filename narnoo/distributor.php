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
    public function getAlbumImages($album_id) {

        $method = 'album_images';
        

        $this->setUrl($this->distributor_url . $method .'/' .$album_id);
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
	
	
      public function getBrochureDetails($broId) {

        $method = 'brochure_details';
        

        $this->setUrl($this->distributor_url . $method .'/'. $broId );
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
    
    public function edit_image_privilages($id,$settings) {

        $method = 'edit_image_privilages';
        

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "id=".$id."&setting=".$settings );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
    public function edit_video_privilages($id,$settings) {

        $method = 'edit_video_privilages';
        

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "id=".$id."&setting=".$settings );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
	
	
    public function edit_brochure_prvilages($id,$settings) {

        $method = 'edit_brochure_prvilages';
        

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "id=".$id."&setting=".$settings );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	    public function downloadBrochure($bro_id) {

        $method = 'download_brochure';
        

        $this->setUrl($this->distributor_url. $method. '/' .$bro_id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
    public function downloadVideo($video_id) {

        $method = 'download_video';
        

        $this->setUrl($this->distributor_url. $method . '/' .$video_id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }               

    	
    public function searchMedia($type,$id,$catname,$subcatname,$location,$keywords,$prvilleges) {

        $method = 'search_media';
        

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "type=".$type."&id=".$id."&category=".$catname."&subCategory=".$subcatname."&location=".$location."&keywords=".$keywords."&privilege=".$prvilleges);
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
    public function geo_media_search($type,$latitude,$longitude,$distance,$category,$subcategory,$keywords) {

        $method = 'geo_media_search';
        

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "mediatype=".$type."&latitude=".$latitude."&longitude=".$longitude."&distance=".$distance."&category=".$category."&subcategory=".$subcategory."&keywords=".$keywords);
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
                'file' => '@'.$file_path
        );
        $this->setUrl($this->distributor_url . $method);
        $this->setPost($postData);
        try {
            return json_decode( $this->getResponse($this->authen) );
       } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
       }
       
    }
    public function deleteVideo($video_id) {

        $method = 'delete_video ';

        $this->setUrl($this->distributor_url.$method);
        $this->setPost("video_id=".$video_id );
        try {
            $response = json_decode( $this->getResponse($this->authen),TRUE);
            return $response;
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
    public function downloadLogo($logoId) {

        $method = 'download_logo';
        

        $this->setUrl($this->distributor_url. $method .'/'.$logoId);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
      public function uploadbrochure($file_path) {

        $method = 'upload_brochure';
        
        $extension = pathinfo($file_path,PATHINFO_EXTENSION);
        $file_size = filesize($file_path);
        array_push($this->authen,'File-Type: '. $extension);
        array_push($this->authen,'File-Size: '. $file_size);
        $postData = array(
                'file' => '@'.$file_path
        );
        $this->setUrl($this->distributor_url . $method);
        $this->setPost($postData);
        try {
            return json_decode( $this->getResponse($this->authen) );
       } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
       }
       
    }
	
      public function uploadVideo($file_path) {

        $method = 'upload_video';
        
        $extension = pathinfo($file_path,PATHINFO_EXTENSION);
        $file_size = filesize($file_path);
        array_push($this->authen,'File-Type: '. $extension);
        array_push($this->authen,'File-Size: '. $file_size);
        $postData = array(
                'file' => '@'.$file_path
        );
        $this->setUrl($this->distributor_url . $method);
        $this->setPost($postData);
        try {
            return json_decode( $this->getResponse($this->authen) );
       } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
       }
       
    }
	
    public function deleteBrochure($brochure_id) {

        $method = 'delete_brochure';

        $this->setUrl($this->distributor_url . $method);
        $this->setPost( "brochure_id=".$brochure_id );
        try {
            $response = json_decode( $this->getResponse($this->authen),TRUE);
            return $response;
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

   
    public function related_operator_get($id) {
        $method = 'related_operator'; 
		$this->setUrl($this->distributor_url . $method .'/?operator_d='. $id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
	
	}

?>
