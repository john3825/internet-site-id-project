<?php
	if ( @isset( $_POST["Internet_Site_ID"] ) ) {
		$Internet_Site_ID = @json_decode( @base64_decode( $_POST["Internet_Site_ID"]));
		if ( $Internet_Site_ID ) {
			if ( $Internet_Site_ID -> Request === "GetDATA" ) {
				echo Get_DATA::send();
			}
		}
	} 
	// Sample
	final class Get_DATA {
	
		private static $Internet_Site_ID = ""; // ID number
		
		public function __construct() {
		//
		}

		public function send() {
			$ID_Data = "";
			self::Get_DATA();
			$ID_Data = $Internet_Site_ID;
			return $ID_Data;
		}
		
		private static final function Get_DATA() {
			$ID_Data = "Internet_Site_ID_Number";
			self::$Internet_Site_ID = $ID_Data;
		}
	}

?>