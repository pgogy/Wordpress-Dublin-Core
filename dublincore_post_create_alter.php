<?PHP

	function draw_dublincore_menu(){
		
		$string = get_option('metadata_nodes');
		
		$dc_nonce = false;
		
		if(get_option("dc_creator")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_author')){
			
				$author = get_post_meta($_GET['post'],'dublin_core_author');
	
				echo '<p>DC:Creator - <input type="text" name="dublin_core_author" value="' . $author[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Creator - <input type="text" name="dublin_core_author" value="Enter author here" size="90" /></p>';
			
			}
			
			$dc_nonce = true;
		
		}
		
		if(get_option("dc_subject")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_subject')){
			
				$subject = get_post_meta($_GET['post'],'dublin_core_subject');
	
				echo '<p>DC:Subject - <input type="text" name="dublin_core_subject" value="' . $subject[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Subject - <input type="text" name="dublin_core_subject" value="Enter comma separated keywords here" size="90" /></p>';
			
			}
			
			$dc_nonce = true;
		
		}
		
		if(get_option("dc_title")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_title')){
			
				$title = get_post_meta($_GET['post'],'dublin_core_title');
	
				echo '<p>DC:Title - <input type="text" name="dublin_core_title" value="' . $title[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Title - <input type="text" name="dublin_core_title" value="Enter title here" size="90" /></p>';
			
			}
			
			$dc_nonce = true;
		
		}
		
		if(get_option("dc_description")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_description')){
			
				$description = get_post_meta($_GET['post'],'dublin_core_description');
	
				echo '<p>DC:description - <input type="text" name="dublin_core_description" value="' . $description[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Description - <input type="text" name="dublin_core_description" value="Enter description here" size="90" /></p>';
			
			}
			
			$dc_nonce = true;
		
		}
		
		if(get_option("dc_type")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_type')){
			
				$type = get_post_meta($_GET['post'],'dublin_core_type');
	
				echo '<p>DC:Type - <input type="text" name="dublin_core_type" value="' . $type[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Type - <input type="text" name="dublin_core_type" value="Enter type here" size="90" /></p>';
			
			}
			
			$dc_nonce = true;
		
		}
		
		if(get_option("dc_source")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_source')){
			
				$source = get_post_meta($_GET['post'],'dublin_core_source');
	
				echo '<p>DC:Source - <input type="text" name="dublin_core_source" value="' . $source[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Source - <input type="text" name="dublin_core_source" value="Enter source here" size="90" /></p>';
			
			}
			
			$dc_nonce = true;
		
		}
		
		if(get_option("dc_coverage")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_coverage')){
			
				$coverage = get_post_meta($_GET['post'],'dublin_core_coverage');
	
				echo '<p>DC:Coverage - <input type="text" name="dublin_core_coverage" value="' . $coverage[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Coverage - <input type="text" name="dublin_core_coverage" value="Enter coverage here" size="90" /></p>';
			
			}
			
			$dc_nonce = true;
		
		}
		
		if(get_option("dc_relation")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_relation')){
			
				$relation = get_post_meta($_GET['post'],'dublin_core_relation');
	
				echo '<p>DC:Relation - <input type="text" name="dublin_core_relation" value="' . $relation[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Relation - <input type="text" name="dublin_core_relation" value="Enter relation here" size="90" /></p>';
			
			}
			
			$dc_nonce = true;
		
		}
			
		if(get_option("dc_publisher")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_publisher')){
			
				$publisher = get_post_meta($_GET['post'],'dublin_core_publisher');
	
				echo '<p>DC:Publisher - <input type="text" name="dublin_core_publisher" value="' . $publisher[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Publisher - <input type="text" name="dublin_core_publisher" value="Enter publisher here" size="90" /></p>';
			
			}
		
			$dc_nonce = true;
		
		}
		
		if(get_option("dc_contributor")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_contributor')){
			
				$contributor = get_post_meta($_GET['post'],'dublin_core_contributor');
	
				echo '<p>DC:Contributor - <input type="text" name="dublin_core_contributor" value="' . $contributor[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Contributor - <input type="text" name="dublin_core_contributor" value="Enter contributor here" size="90" /></p>';
			
			}
			
			$dc_nonce = true;
		
		}
		
		if(get_option("dc_rights")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_rights')){
			
				$rights = get_post_meta($_GET['post'],'dublin_core_rights');
	
				echo '<p>DC:Rights - <input type="text" name="dublin_core_rights" value="' . $rights[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Rights - <input type="text" name="dublin_core_rights" value="Enter rights here" size="90" /></p>';
			
			}
			
			$dc_nonce = true;
		
		}
		
		if(get_option("dc_format")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_format')){
			
				$format = get_post_meta($_GET['post'],'dublin_core_format');
	
				echo '<p>DC:Format - <input type="text" name="dublin_core_format" value="' . $format[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Format - <input type="text" name="dublin_core_format" value="Enter format here" size="90" /></p>';
			
			}
			
			$dc_nonce = true;
		
		}
		
		if(get_option("dc_language")=="true"){
		
			?>
				
				<script type="text/javascript" language="javascript">
				
				var dublin_core_language = "";
				
				function check_language(){
				
					new_language = document.getElementById("dublin_core_language_enter").value;
			
					if(new_language.length!=1&&new_language!=dublin_core_language){
					
						get_language_code(new_language);
					
					}else{
					
						document.getElementById("languages_dublin_code").innerHTML = "";
					
					}
					
					dublin_core_language = new_language;
				
				}				
		
				function get_language_code(l_c){	
		
					jQuery(document).ready(function($) {
									
						var data = {
							action: 'get_language_code',
							language_code:l_c
						};		
							
						document.getElementById("languages_dublin_code").innerHTML = "";	
							
						jQuery.post(ajaxurl, data, 
								
						function(response){
																			
							document.getElementById("languages_dublin_code").innerHTML = response;	
								
						});
								
					});
			
				}
				
				</script>				
				<?PHP
		
			if (get_post_meta($_GET['post'],'dublin_core_language')){
			
				$language = get_post_meta($_GET['post'],'dublin_core_language');
	
				echo '<p>DC:Language - <input type="text" name="dublin_core_language" id="dublin_core_language" value="' . $language[0] . '" size="90" /></p>';
				
			}else{
												
				echo '<p>DC:Language - <input type="text" name="dublin_core_language" id="dublin_core_language" value="Language will appear here" size="90" /></p>';
				
			}
			
			echo "<p>Please type in a language / language code below</p>";
			echo '<p><input type="text" name="dublin_core_language_enter" id="dublin_core_language_enter" value="Enter language / language code here" size="90" onKeyUp="check_language()" /></p>';
			echo "<div id='languages_dublin_code'>Languages will appear below</div>";
						
			$dc_nonce = true;
		
		}
		
		if(get_option("dc_imethod")=="true"){

			if (get_post_meta($_GET['post'],'dublin_core_instructionalmethod')){
			
				$instructionalmethod = get_post_meta($_GET['post'],'dublin_core_instructionalmethod');
	
				echo '<p>DC:Instructional Method - <input type="text" name="dublin_core_instructionalmethod" value="' . $instructionalmethod[0] . '" size="90" /></p>';
				
			}else{
			
				echo '<p>DC:Instructional Method - <input type="text" name="dublin_core_instructionalmethod" value="Enter instructional method here" size="90" /></p>';
			
			}
						
			$dc_nonce = true;
		
		}
		
		if($dc_nonce){
				
			wp_nonce_field('dublincore_savepost','dublincore_savepost');
		
			echo "<p>Go to <a href='" . get_site_url() . "/wp-admin/options-general.php?page=dublincore'>the Dublin Core Setup Page</a> to set up the DC elements you wish to catalogue.</p>";
		
		}else{
		
			echo "<p>Please visit <a href='" . get_site_url() . "/wp-admin/options-general.php?page=dublincore'>the Dublin Core Setup Page</a> to set up the DC elements you wish to catalogue.</p>";
		
		}

	}
	
	function save_dublincore($post_id){
		
		if(isset($_POST['dublincore_savepost'])){
		
			if ( !wp_verify_nonce( $_POST['dublincore_savepost'], 'dublincore_savepost' )) {				
				return $post_id;
			}
			  
			if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
				return $post_id;

			if('page'==$_POST['post_type']){
				if(!current_user_can('edit_page',$post_id))
					return $post_id;
			}else{
				if ( !current_user_can('edit_post',$post_id))
					return $post_id;
			}	
			  
			if(isset($_POST['dublin_core_author'])){	
		
				if (get_post_meta($post_id,'dublin_core_author')){
				  
					update_post_meta($post_id, 'dublin_core_author', $_POST['dublin_core_author']);
				  
				}else{
				  
					add_post_meta($post_id, 'dublin_core_author', $_POST['dublin_core_author'],1);		  
				  
				}
			  
			}
			  
			if(isset($_POST['dublin_core_subject'])){	
			  
				if (get_post_meta($post_id,'dublin_core_subject')){
				  
					update_post_meta($post_id, 'dublin_core_subject', $_POST['dublin_core_subject']);
				  
				}else{
				  
					add_post_meta($post_id, 'dublin_core_subject', $_POST['dublin_core_subject'],1);		  
				  
				}
			  
			}
			  
			if(isset($_POST['dublin_core_title'])){	
			  
				if (get_post_meta($post_id,'dublin_core_title')){
				  
					update_post_meta($post_id, 'dublin_core_title', $_POST['dublin_core_title']);
				  
				}else{
				  
					add_post_meta($post_id, 'dublin_core_title', $_POST['dublin_core_title'],1);		  
				  
				} 
			  
			}
			  
			if(isset($_POST['dublin_core_description'])){	
			  
				if (get_post_meta($post_id,'dublin_core_description')){
				  
					update_post_meta($post_id, 'dublin_core_description', $_POST['dublin_core_description']);
				  
				}else{
				  
					add_post_meta($post_id, 'dublin_core_description', $_POST['dublin_core_description'],1);		  
				  
				} 
			  
			}
			  
			if(isset($_POST['dublin_core_type'])){	
			  
				if (get_post_meta($post_id,'dublin_core_type')){
				  
					update_post_meta($post_id, 'dublin_core_type', $_POST['dublin_core_type']);
				  
				}else{
				  
					add_post_meta($post_id, 'dublin_core_type', $_POST['dublin_core_type'],1);		  
				  
				} 
			  
			}
			  
			if(isset($_POST['dublin_core_source'])){	
			  
				if (get_post_meta($post_id,'dublin_core_source')){
				  
					update_post_meta($post_id, 'dublin_core_source', $_POST['dublin_core_source']);
				  
				}else{
				  
					add_post_meta($post_id, 'dublin_core_source', $_POST['dublin_core_source'],1);		  
				  
				} 
			  
			}
			  
			if(isset($_POST['dublin_core_coverage'])){	
			  
				if (get_post_meta($post_id,'dublin_core_coverage')){
				  
					update_post_meta($post_id, 'dublin_core_coverage', $_POST['dublin_core_coverage']);
				  
				}else{
				  
					add_post_meta($post_id, 'dublin_core_coverage', $_POST['dublin_core_coverage'],1);		  
				  
				} 
			  
			}
			  
			if(isset($_POST['dublin_core_relation'])){	
			  
				  if (get_post_meta($post_id,'dublin_core_relation')){
				  
						 update_post_meta($post_id, 'dublin_core_relation', $_POST['dublin_core_relation']);
				  
				  }else{
				  
						 add_post_meta($post_id, 'dublin_core_relation', $_POST['dublin_core_relation'],1);		  
				  
				  } 
			  
			}
			  
			if(isset($_POST['dublin_core_publisher'])){	

			  if (get_post_meta($post_id,'dublin_core_publisher')){
			  
				update_post_meta($post_id, 'dublin_core_publisher', $_POST['dublin_core_publisher']);
			  
			  }else{
			  
				add_post_meta($post_id, 'dublin_core_publisher', $_POST['dublin_core_publisher'],1);		  
			  
			  } 

			}

			if(isset($_POST['dublin_core_contributor'])){	

			  if (get_post_meta($post_id,'dublin_core_contributor')){
			  
				update_post_meta($post_id, 'dublin_core_contributor', $_POST['dublin_core_contributor']);
			  
			  }else{
			  
				add_post_meta($post_id, 'dublin_core_contributor', $_POST['dublin_core_contributor'],1);		  
			  
			  } 

			}  

			if(isset($_POST['dublin_core_rights'])){	

			  if (get_post_meta($post_id,'dublin_core_rights')){
			  
				update_post_meta($post_id, 'dublin_core_rights', $_POST['dublin_core_rights']);
			  
			  }else{
			  
				add_post_meta($post_id, 'dublin_core_rights', $_POST['dublin_core_rights'],1);		  
			  
			  } 

			}

			if(isset($_POST['dublin_core_format'])){	

			  if (get_post_meta($post_id,'dublin_core_format')){
			  
				update_post_meta($post_id, 'dublin_core_format', $_POST['dublin_core_format']);
			  
			  }else{
			  
				add_post_meta($post_id, 'dublin_core_format', $_POST['dublin_core_format'],1);		  
			  
			  } 

			}

			if(isset($_POST['dublin_core_language'])){	

			  if (get_post_meta($post_id,'dublin_core_language')){
			  
				update_post_meta($post_id, 'dublin_core_language', $_POST['dublin_core_language']);
			  
			  }else{
			  
				add_post_meta($post_id, 'dublin_core_language', $_POST['dublin_core_language'],1);		  
			  
			  } 

			}
			  
			if(isset($_POST['dublin_core_instructionalmethod'])){	
			  
				if (get_post_meta($post_id,'dublin_core_instructionalmethod')){
				  
					update_post_meta($post_id, 'dublin_core_instructionalmethod', $_POST['dublin_core_instructionalmethod']);
				  
				}else{
				  
					add_post_meta($post_id, 'dublin_core_instructionalmethod', $_POST['dublin_core_instructionalmethod'],1);		  
				  
				} 
			  
			}
			
		}
		
	}

	function dublincore_add_menu($output){
		
		add_meta_box( 'dublincore_id', 'Add Dublin Core',"draw_dublincore_menu","post","normal","high");
		add_meta_box( 'dublincore_id', 'Add Dublin Core',"draw_dublincore_menu","page","normal","high");
		add_meta_box( 'dublincore_id', 'Add Dublin Core',"draw_dublincore_menu","custom_post_type","normal","high");
	
	}
	
	function create_dublin_core_text($variable){
	
		global $post;
			
		$append = get_option($variable);
		
		if (get_post_meta($post->ID,'dublin_core_author')){
			
			$author = get_post_meta($post->ID,'dublin_core_author');
				
			$append = str_replace("%creator%",$author[0],$append);	
				
		}
		
		if (get_post_meta($post->ID,'dublin_core_subject')){
			
			$subject = get_post_meta($post->ID,'dublin_core_subject');
				
			$append = str_replace("%subject%",$subject[0],$append);
		
		}
		
		if (get_post_meta($post->ID,'dublin_core_title')){
			
			$title = get_post_meta($post->ID,'dublin_core_title');
	
			$append = str_replace("%title%",$title[0],$append);
		
		}
		
		if (get_post_meta($post->ID,'dublin_core_description')){
			
			$description = get_post_meta($post->ID,'dublin_core_description');
	
			$append = str_replace("%description%",$description[0],$append);
				
		}
		
		if (get_post_meta($post->ID,'dublin_core_type')){
			
			$type = get_post_meta($post->ID,'dublin_core_type');
	
			$append = str_replace("%type%",$type[0],$append);
				
		}
		
		if (get_post_meta($post->ID,'dublin_core_source')){
			
			$source = get_post_meta($post->ID,'dublin_core_source');
	
			$append = str_replace("%source%",$source[0],$append);
			
		}
		
		if (get_post_meta($post->ID,'dublin_core_coverage')){
			
			$coverage = get_post_meta($post->ID,'dublin_core_coverage');
	
			$append = str_replace("%coverage%",$coverage[0],$append);
			
		}
		
		if (get_post_meta($post->ID,'dublin_core_relation')){
			
			$relation = get_post_meta($post->ID,'dublin_core_relation');
				
			$append = str_replace("%relation%",$relation[0],$append);
				
		}
		
		if (get_post_meta($post->ID,'dublin_core_publisher')){
			
			$publisher = get_post_meta($post->ID,'dublin_core_publisher');
				
			$append = str_replace("%publisher%",$publisher[0],$append);
				
		}
		
		if (get_post_meta($post->ID,'dublin_core_contributor')){
			
			$contributor = get_post_meta($post->ID,'dublin_core_contributor');
	
			$append = str_replace("%contributor%",$contributor[0],$append);
				
		}
		
		if (get_post_meta($post->ID,'dublin_core_rights')){
			
			$rights = get_post_meta($post->ID,'dublin_core_rights');
	
			$append = str_replace("%rights%",$rights[0],$append);
				
		}
		
		if (get_post_meta($post->ID,'dublin_core_format')){
			
			$format = get_post_meta($post->ID,'dublin_core_format');
				
			$append = str_replace("%format%",$format[0],$append);

		}
		
		if (get_post_meta($post->ID,'dublin_core_language')){
			
			$language = get_post_meta($post->ID,'dublin_core_language');
	
			$append = str_replace("%language%",$language[0],$append);
		
		}
		
		if (get_post_meta($post->ID,'dublin_core_instructionalmethod')){
			
			$instructionalmethod = get_post_meta($post->ID,'dublin_core_instructionalmethod');
	
			$append = str_replace("%instructionalmethod%",$instructionalmethod[0],$append);
				
		}
					
		return str_replace("\\","",$append);
	
	}
	
	function dublin_core_shortcode( $atts ) {		

		return create_dublin_core_text("content_for_shortcode");
		
	}
	
	add_shortcode('dublin-core-metadata', 'dublin_core_shortcode' );
	
	function append_dublincore($output){
	
		global $post;		
	
		if(get_option('metadata_page_modify')=="true"){
		
			return create_dublin_core_text("content_to_add_before") . $output . create_dublin_core_text("content_to_add");
		
		}else{
		
			return $output;
		
		}
	
	}

?>