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
	
    public function geofeaturesearch($location,$distance) {

        $method = 'geo_feature_search';
        

        $this->setUrl($this->url . $method .'?location='. urlencode($location). '&distance='. $distance);
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
    
    public function getSocial($id) {

        $method = 'social';

        $this->setUrl($this->url.$method.'/'.$id);
        $this->setGet();
        try {
            $response = json_decode( $this->getResponse($this->authen),TRUE);
            return $response;
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
        $this->setPost( "operator_id=".$op_id."&album_id=".$album_id."&image_id=".$image_id );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function albumCreate($op_id,$album_name) {

        $method = 'album_create';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "operator_id=".$op_id."&name=".trim($album_name) );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function albumDelete($op_id,$album_id) {

        $method = 'album_destroy';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "operator_id=".$op_id."&album_id=".$album_id );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function albumRemoveImage($op_id,$album_id,$image_id) {

        $method = 'album_remove_image';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "operator_id=".$op_id."&album_id=".$album_id."&image_id=".$image_id );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function editBrochureCaption($op_id,$bro_id,$caption) {

        $method = 'edit_brochure_caption';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "operator_id=".$op_id."&brochure_id=".$bro_id."&caption=".$caption );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
       
    public function editVideoCaption($op_id,$video_id,$caption) {

        $method = 'edit_video_caption';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "operator_id=".$op_id."&video_id=".$video_id."&caption=".$caption );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function editImageCaption($op_id,$image_id,$caption) {

        $method = 'edit_image_caption';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "operator_id=".$op_id."&image_id=".$image_id."&caption=".$caption );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    
    
    public function deleteImage($op_id,$image_id) {

        $method = 'delete_image';

        $this->setUrl($this->url.$method);
        $this->setPost( "operator_id=".$op_id."&image_id=".$image_id );
        try {
            $response = json_decode( $this->getResponse($this->authen),TRUE);
            return $response;
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function deleteLogo($op_id,$logoId) {

        $method = 'delete_logo';

        $this->setUrl($this->url.$method);
        $this->setPost( "operator_id=".$op_id."&logo_id=".$logoId );
        try {
            $response = json_decode( $this->getResponse($this->authen),TRUE);
            return $response;
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function deleteDescription($op_id,$description_id) {

        $method = 'delete_description';

        $this->setUrl($this->url.$method);
        $this->setPost( "operator_id=".$op_id."&description_id=".$description_id );
        try {
            $response = json_decode( $this->getResponse($this->authen),TRUE);
            return $response;
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function deleteBrochure($op_id,$brochure_id) {

        $method = 'delete_brochure';

        $this->setUrl($this->url.$method);
        $this->setPost( "operator_id=".$op_id."&brochure_id=".$image_id );
        try {
            $response = json_decode( $this->getResponse($this->authen),TRUE);
            return $response;
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    public function deleteVideo($op_id,$video_id) {

        $method = 'delete_video ';

        $this->setUrl($this->url.$method);
        $this->setPost( "operator_id=".$op_id."&video_id=".$video_id );
        try {
            $response = json_decode( $this->getResponse($this->authen),TRUE);
            return $response;
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
     public function descriptionCreate($op_id,$description_name) {

        $method = 'description_create';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "operator_id=".$op_id."&name=".trim($description_name) );
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function removeOperator($op_id) {

        $method = 'operator_remove';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "operator_id=".$op_id);
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function addOperator($op_id) {

        $method = 'operator_add';
        

        $this->setUrl($this->url . $method);
        $this->setPost( "operator_id=".$op_id);
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getOperators() {

        $method = 'list_operators';
        

        $this->setUrl($this->url . $method);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function uploadImage($op_id=NULL,$file_path) {

        $method = 'upload_image';
        
        $extension = pathinfo($file_path,PATHINFO_EXTENSION);
        $file_size = filesize($file_path);
        array_push($this->authen,'File-Type: '. $extension);
        array_push($this->authen,'File-Size: '. $file_size);
        $postData = array(
                'operator_id' => $op_id,
                'image_contents' => '@'.$file_path
        );
        $this->setUrl($this->url . $method);
        $this->setPost($postData);
        try {
            return json_decode( $this->getResponse($this->authen) );
       } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
       }
       
    }
	
    public function descriptionAddWord($op_id,$description_id,$words,$text) {

        $method = 'description_add_word';

        $this->setUrl($this->url.$method);//die( "operator_id=".$op_id."&description_id=".$description_id."&words=".$words."&text=".$text );
        $this->setPost( "operator_id=".$op_id."&description_id=".$description_id."&words=".$words."&text=".$text );
        try {
            $response = json_decode( $this->getResponse($this->authen),TRUE);
            return $response;
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function downloadLogo($op_id,$logoId) {

        $method = 'download_logo';
        

        $this->setUrl($this->url . $method .'/'. $op_id . '/' .$logoId);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
  
    public function geoSearch($lat,$long,$distance) {

        $method = 'geo_search';
        $this->setUrl($this->url . $method);
        $this->setPost('latitude='. $lat . '&longitude=' .$long . '&distance='. $distance);
 		
         try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
    public function uploadBrochure($op_id=NULL,$file_path) {

        $method = 'upload_brochure';
        
        $extension = pathinfo($file_path,PATHINFO_EXTENSION);
        $file_size = filesize($file_path);
        array_push($this->authen,'File-Type: '. $extension);
        array_push($this->authen,'File-Size: '. $file_size);
        $postData = array(
                'operator_id' => $op_id,
                'file' => '@'.$file_path
        );
        $this->setUrl($this->url . $method);
        $this->setPost($postData);
        try {
            return json_decode( $this->getResponse($this->authen) );
       } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
       }
       
    }
	
      public function uploadVideo($op_id=NULL,$file_path) {

        $method = 'upload_video';
        
        $extension = pathinfo($file_path,PATHINFO_EXTENSION);
        $file_size = filesize($file_path);
        array_push($this->authen,'File-Type: '. $extension);
        array_push($this->authen,'File-Size: '. $file_size);
        $postData = array(
                'operator_id' => $op_id,
                'file' => '@'.$file_path
        );
        $this->setUrl($this->url . $method);
        $this->setPost($postData);
        try {
            return json_decode( $this->getResponse($this->authen) );
       } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
       }
       
    }	
	
    public function related_operator_get($id) {
        $method = 'related_operator';
        echo $this->url . $method .'/'. $id;
	$this->setUrl($this->url . $method .'/'. $id);
        $this->setGet();
        try {
            return json_decode( $this->getResponse($this->authen) );
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
	
    
}

?>
