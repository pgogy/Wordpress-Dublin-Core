<?PHP

	add_action('wp_ajax_get_language_code', 'dublin_core_get_language_code');

	function dublin_core_get_language_code() {
		
		$data = file_get_contents(WP_PLUGIN_DIR . "/dublin-core-metadata/" . "language_codes.tab");
		
		$list = explode("\n",$data);
		
		$return = array();
		
		$lang = strtolower($_POST['language_code']);
				
		for($x=0;$x<count($list);$x++){
		
			if(strpos(strtolower($list[$x]),$lang)!=FALSE){
			
				$data = explode(",",$list[$x]);
			
				array_push($return,"<p style='cursor:hand;cursor:pointer;' onclick='document.getElementById(\"dublin_core_language\").value=\"" . $data[0] . "\"'><span style='font-weight:bold'>" . utf8_encode(str_replace(",","</span> - ",substr($list[$x],0,strlen($list[$x])-1))) . "</p>");
			
			}
		
		}
		
		if(count($return)!=0){
		
			echo "<p>Please click on the language you would like to add</p>";
			echo implode("",$return);
		
		}else{
		
			echo "<p>No languages found</p>";
		
		}
		
		die(); // this is required to return a proper result
		
	}

?>