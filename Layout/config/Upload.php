<?php
class Upload{
	private $uploaddir, $uploadfile;	
	
	 function __construct( $site, $name, $type ){
		$this->uploaddir = 'img/'.$site.'/';		
		
		$date = date_create();
		
		$name = $name . date_format($date,"Ymd-hmsms");
		
		$name = md5( $name );
		
		if( $type == "image/jpeg" )
			$type = ".jpg";
		else if ( $type == "image/png" )
			$type = ".png";
		else if ( $type == "image/gif" )
			$type = ".gif";	
		else 
			$type = ".jpg";
		
		$this->uploaddir .= $name . $type;
		
		$this->uploadfile = '../' . $this->uploaddir;
	 }
	 
	 function upload( $tmp ){
		if ( move_uploaded_file( $tmp, $this->uploadfile )) {
			return $this->uploaddir;
		} else {
			return NULL;
		}
	 }
}
?>