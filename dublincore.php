<?

/*

Plugin Name: Dublin Core Metadata

Plugin URI: http://openattribute.com

Add Dublin Core to an item within a blog post

Version: 0.2

Author: Pat Lockley

Author URI: http://www.pgogy.com

*/

function dublincore_options_page() {
  ?>
  	<div class="wrap">
	<h2>Dublin Core Metadata</h2>
	<p>Below is a list of the Dublin Core Metadata nodes you wish to augment your posts with</p>
	<form method="post" action="options.php">
    <?php settings_fields( 'dublincore' ); ?>
    <textarea rows="15" cols="100" name="metadata_nodes" ><?php 
    
    														$string = get_option('metadata_nodes');
    														
    														if($string==""){
    														
    															echo "DC:Creator\n";
    															echo "DC:Subject\n";
    														
    														}else{
    														
    															echo $string;
    														
    														}
    														 
    														
    												?></textarea><p> 
    <?php 
    
    		$value = get_option('metadata_feed_modify');
    		
    ?>Modify the RSS Feed<input type="text" name="metadata_feed_modify" value="<?PHP echo $value; ?>"/>	</p><?PHP
    
    		$value = get_option('metadata_page_modify');
    		
    ?>Modify the page<input type="text" name="metadata_page_modify" value="<?PHP echo $value; ?>"/>	</p>											
    												   
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
	</form>
</div>
  
  <?php
}

	function register_dublincore() {
		//register our settings
		register_setting( 'dublincore', 'metadata_nodes' );
		register_setting( 'dublincore', 'metadata_feed_modify' );
		register_setting( 'dublincore', 'metadata_page_modify' );
	}

	function draw_dublincore_menu(){
	
		wp_nonce_field( plugin_basename(__FILE__), 'dublincore_noncename' );
		
		$string = get_option('metadata_nodes');
		
		if(count(explode("DC:Creator",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_author')){
			
				$author = get_post_meta($_GET['post'],'dublin_core_author');
	
				echo 'DC:Creator - <input type="text" name="dublin_core_author" value="' . $author[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Creator - <input type="text" name="dublin_core_author" value="Enter author here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:Subject",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_subject')){
			
				$subject = get_post_meta($_GET['post'],'dublin_core_subject');
	
				echo 'DC:Subject - <input type="text" name="dublin_core_subject" value="' . $subject[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Subject - <input type="text" name="dublin_core_subject" value="Enter comma separated keywords here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:Title",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_title')){
			
				$title = get_post_meta($_GET['post'],'dublin_core_title');
	
				echo 'DC:Title - <input type="text" name="dublin_core_title" value="' . $title[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Title - <input type="text" name="dublin_core_title" value="Enter title here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:Description",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_description')){
			
				$description = get_post_meta($_GET['post'],'dublin_core_description');
	
				echo 'DC:description - <input type="text" name="dublin_core_description" value="' . $description[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Description - <input type="text" name="dublin_core_description" value="Enter description here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:Type",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_type')){
			
				$type = get_post_meta($_GET['post'],'dublin_core_type');
	
				echo 'DC:Type - <input type="text" name="dublin_core_type" value="' . $type[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Type - <input type="text" name="dublin_core_type" value="Enter type here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:Source",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_source')){
			
				$source = get_post_meta($_GET['post'],'dublin_core_source');
	
				echo 'DC:Source - <input type="text" name="dublin_core_source" value="' . $source[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Source - <input type="text" name="dublin_core_source" value="Enter source here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:Coverage",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_coverage')){
			
				$coverage = get_post_meta($_GET['post'],'dublin_core_coverage');
	
				echo 'DC:Coverage - <input type="text" name="dublin_core_coverage" value="' . $coverage[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Coverage - <input type="text" name="dublin_core_coverage" value="Enter coverage here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:Relation",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_relation')){
			
				$relation = get_post_meta($_GET['post'],'dublin_core_relation');
	
				echo 'DC:Relation - <input type="text" name="dublin_core_relation" value="' . $relation[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Relation - <input type="text" name="dublin_core_relation" value="Enter relation here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:Publisher",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_publisher')){
			
				$publisher = get_post_meta($_GET['post'],'dublin_core_publisher');
	
				echo 'DC:Publisher - <input type="text" name="dublin_core_publisher" value="' . $publisher[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Publisher - <input type="text" name="dublin_core_publisher" value="Enter publisher here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:Contributor",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_contributor')){
			
				$contributor = get_post_meta($_GET['post'],'dublin_core_contributor');
	
				echo 'DC:Contributor - <input type="text" name="dublin_core_contributor" value="' . $contributor[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Contributor - <input type="text" name="dublin_core_contributor" value="Enter contributor here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:Rights",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_rights')){
			
				$rights = get_post_meta($_GET['post'],'dublin_core_rights');
	
				echo 'DC:Rights - <input type="text" name="dublin_core_rights" value="' . $rights[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Rights - <input type="text" name="dublin_core_rights" value="Enter rights here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:Format",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_format')){
			
				$format = get_post_meta($_GET['post'],'dublin_core_format');
	
				echo 'DC:Format - <input type="text" name="dublin_core_format" value="' . $format[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Format - <input type="text" name="dublin_core_format" value="Enter format here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:Language",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_language')){
			
				$language = get_post_meta($_GET['post'],'dublin_core_language');
	
				echo 'DC:Language - <input type="text" name="dublin_core_language" value="' . $language[0] . '" size="130" />';
				
			}else{
			
				echo 'DC:Language - <input type="text" name="dublin_core_language" value="Enter language here" size="130" />';
			
			}
		
		}
		
		if(count(explode("DC:InstructionalMethod",$string))!=1){

			if (get_post_meta($_GET['post'],'dublin_core_instructionalmethod')){
			
				$instructionalmethod = get_post_meta($_GET['post'],'dublin_core_instructionalmethod');
	
				echo 'DC:Instructional Method - <input type="text" name="dublin_core_instructionalmethod" value="' . $instructionalmethod[0] . '" size="90" />';
				
			}else{
			
				echo 'DC:Instructional Method - <input type="text" name="dublin_core_instructionalmethod" value="Enter instructional method here" size="90" />';
			
			}
		
		}

	}
	
	function save_dublincore($post_id){
	
		  if ( !wp_verify_nonce( $_POST['dublincore_noncename'], plugin_basename(__FILE__) )) {
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
		  
			  if (get_post_meta($post_id,'dublin_core_type')){
			  
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

	function dublincore_add_menu($output){
	
		add_meta_box( 'dublincore_id', 'Add Dublin Core',"draw_dublincore_menu","post","normal","high");
	
	}

	function dublincore_menu_option() {
	  add_options_page('Dublin Core Options', 'Dublin Core Options', 'manage_options', 'dublincore', 'dublincore_options_page');
	}
	
	function append_dublincore($output){
	
		if(get_option('metadata_page_modify')=="true"){
		
			$string = get_option('metadata_nodes');
		
			if(count(explode("DC:Creator",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_author')){
				
					$author = get_post_meta($_GET['p'],'dublin_core_author');
		
					$output .= '<p>DC:Creator - ' . $author[0] . '</p>';
					
				}
			
			}
			
			if(count(explode("DC:Subject",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_subject')){
				
					$subject = get_post_meta($_GET['p'],'dublin_core_subject');
					
					$output .= '<p>DC:Subject - ' . $subject[0] . '</p>';
					
				}
			
			}
			
			if(count(explode("DC:Title",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_title')){
				
					$title = get_post_meta($_GET['p'],'dublin_core_title');
		
					$output .= '<p>DC:Title - ' . $title[0] . '</p>';
					
				}
			
			}
			
			if(count(explode("DC:Description",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_description')){
				
					$description = get_post_meta($_GET['p'],'dublin_core_description');
		
					$output .= '<p>DC:Description - ' . $description[0] . '</p>';
					
				}
			
			}
			
			if(count(explode("DC:Type",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_type')){
				
					$type = get_post_meta($_GET['p'],'dublin_core_type');
		
					$output .= '<p>DC:Type - ' . $type[0] . '</p>';
					
				}
			
			}
			
			if(count(explode("DC:Source",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_source')){
				
					$source = get_post_meta($_GET['p'],'dublin_core_source');
		
					$output .= '<p>DC:Source - ' . $source[0] . '</p>';
				}
			
			}
			
			if(count(explode("DC:Coverage",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_coverage')){
				
					$coverage = get_post_meta($_GET['p'],'dublin_core_coverage');
		
					$output .= '<p>DC:Coverage - ' . $coverage[0] . '</p>';
				}
			
			}
			
			if(count(explode("DC:Relation",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_relation')){
				
					$relation = get_post_meta($_GET['p'],'dublin_core_relation');
		
					$output .= '<p>DC:Relation - ' . $relation[0] . '</p>';
				}
			
			}
			
			if(count(explode("DC:Publisher",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_publisher')){
				
					$publisher = get_post_meta($_GET['p'],'dublin_core_publisher');
		
					$output .= '<p>DC:Publisher - ' . $publisher[0] . '</p>';
					
				}
			
			}
			
			if(count(explode("DC:Contributor",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_contributor')){
				
					$contributor = get_post_meta($_GET['p'],'dublin_core_contributor');
		
					$output .= '<p>DC:Contributor - ' . $contributor[0] . '</p>';
					
				}
			
			}
			
			if(count(explode("DC:Rights",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_rights')){
				
					$rights = get_post_meta($_GET['p'],'dublin_core_rights');
		
					$output .= '<p>DC:Rights - ' . $rights[0] . '</p>';
					
				}
			
			}
			
			if(count(explode("DC:Format",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_format')){
				
					$format = get_post_meta($_GET['p'],'dublin_core_format');
		
					$output .= '<p>DC:Format - ' . $format[0] . '</p>';
				}
			
			}
			
			if(count(explode("DC:Language",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_language')){
				
					$language = get_post_meta($_GET['p'],'dublin_core_language');
		
					$output .= '<p>DC:language - ' . $language[0] . '</p>';
				}
			
			}
			
			if(count(explode("DC:InstructionalMethod",$string))!=1){
	
				if (get_post_meta($_GET['p'],'dublin_core_instructionalmethod')){
				
					$instructionalmethod = get_post_meta($_GET['p'],'dublin_core_instructionalmethod');
		
					$output .= '<p>DC:Instructional Method - ' . $instructionalmethod[0] . '</p>';
					
				}
			
			}
			
		}
		
		return $output;
	
	}
	
	function dublincore_feed_title($content) {
	
		if(get_option('metadata_feed_modify')=="true"){
	
			global $wp_query;
			$postid = $wp_query->post->ID;
			$title = get_post_meta($postid, 'dublin_core_title', true);
		
			if(strlen($title)!=0){
		
				return $title;
		
			}else{
			
				return $content;
				
			}
		
		}else{
		
			return $content;
		
		}
	
	}
	
	function dublincore_feed_description($content) {
	
		if(get_option('metadata_feed_modify')=="true"){
	
			global $wp_query;
			$postid = $wp_query->post->ID;
			$description = get_post_meta($postid, 'dublin_core_description', true);
		
			if(strlen($description)!=0){
		
				return $description;
		
			}else{
			
				return $content;
				
			}
		
		}else{
		
			return $content;
		
		}
	
	}
	
	function dublincore_augment($content) {
	
		if(get_option('metadata_feed_modify')=="true"){
	
			global $wp_query;
			$postid = $wp_query->post->ID;
			$description = get_post_meta($postid, 'dublin_core_description', true);
		
			if((strlen($description)!=0)&&($description!="Enter description here")){
		
				echo "<dc:description xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$description</dc:description>\n";
		
			}
			
			$creator = get_post_meta($postid, 'dublin_core_author', true);
		
			if((strlen($creator)!=0)&&($creator!="Enter author here")){
			
				$creators = explode(",",$creator);
				
				while($x = array_shift($creators)){
		
					echo "<dc:creator xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$x</dc:creator>\n";
					
				}	
		
			}
			
			$subject = get_post_meta($postid, 'dublin_core_subject', true);
		
			if((strlen($subject)!=0)&&($subject!="Enter comma separated keywords here")){
			
				$subjects = explode(",",$subject);
				
				while($x = array_shift($subjects)){
		
					echo "<dc:subject xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$x</dc:subject>\n";
					
				}	
		
			}			
			
			$title = get_post_meta($postid, 'dublin_core_title', true);
		
			if((strlen($title)!=0)&&($title!="Enter title here")){
			
				echo "<dc:title xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$title</dc:title>\n";	
		
			}
			
			$type = get_post_meta($postid, 'dublin_core_type', true);
		
			if((strlen($type)!=0)&&($type!="Enter type here")){
			
				$types = explode(",",$type);
				
				while($x = array_shift($types)){
		
					echo "<dc:type xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$x</dc:type>\n";
					
				}	
		
			}
			
			$source = get_post_meta($postid, 'dublin_core_source', true);
		
			if((strlen($source)!=0)&&($source!="Enter source here")){
			
				$sources = explode(",",$source);
				
				while($x = array_shift($sources)){
		
					echo "<dc:source xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$x</dc:source>\n";
					
				}	
		
			}
			
			$coverage = get_post_meta($postid, 'dublin_core_coverage', true);
		
			if((strlen($coverage)!=0)&&($coverage!="Enter coverage here")){
			
				$coverage = explode(",",$coverage);
				
				while($x = array_shift($coverage)){
		
					echo "<dc:coverage xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$x</dc:coverage>\n";
					
				}	
		
			}
			
			$relation = get_post_meta($postid, 'dublin_core_relation', true);
		
			if((strlen($relation)!=0)&&($relation!="Enter relation here")){
			
				$relations = explode(",",$relation);
				
				while($x = array_shift($relations)){
		
					echo "<dc:relation xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$x</dc:relation>\n";
					
				}	
		
			}
			
			$publisher = get_post_meta($postid, 'dublin_core_publisher', true);
		
			if((strlen($publisher)!=0)&&($publisher!="Enter publisher here")){
			
				$publishers = explode(",",$publisher);
				
				while($x = array_shift($publishers)){
		
					echo "<dc:publisher xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$x</dc:publisher>\n";
					
				}	
		
			}
			
			$contributor = get_post_meta($postid, 'dublin_core_contributor', true);
		
			if((strlen($contributor)!=0)&&($contributor!="Enter contributor here")){
			
				$contributors = explode(",",$contributor);
				
				while($x = array_shift($contributors)){
		
					echo "<dc:contributor xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$x</dc:contributor>\n";
					
				}	
		
			}
			
			$right = get_post_meta($postid, 'dublin_core_rights', true);
		
			if((strlen($right)!=0)&&($right!="Enter rights here")){
			
				$rights = explode(",",$right);
				
				while($x = array_shift($rights)){
		
					echo "<dc:rights xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$x</dc:rights>\n";
					
				}	
		
			}
			
			$format = get_post_meta($postid, 'dublin_core_format', true);
		
			if((strlen($format)!=0)&&($format!="Enter format here")){
			
				$formats = explode(",",$format);
				
				while($x = array_shift($formats)){
		
					echo "<dc:format xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$x</dc:format>\n";
					
				}	
		
			}
			
			$language = get_post_meta($postid, 'dublin_core_language', true);
		
			if((strlen($language)!=0)&&($language!="Enter language here")){
			
				$languages = explode(",",$language);
				
				while($x = array_shift($languages)){
		
					echo "<dc:language xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$x</dc:language>\n";
					
				}	
		
			}
			
			$instructionalmethod = get_post_meta($postid, 'dublin_core_instructionalmethod', true);
		
			if((strlen($instructionalmethod)!=0)&&($instructionalmethod!="Enter instructional method here")){
			
				$instructionalmethods = explode(",",$instructionalmethod);
				
				while($x = array_shift($instructionalmethods)){
		
					echo "<dc:instructionalmethod xmlns:dc=\"http://purl.org/dc/elements/1.1/\">$x</dc:instructionalmethod>\n";
					
				}	
		
			}
		
		}
	
	}


add_action('admin_init', 'register_dublincore' );
add_action('admin_menu', 'dublincore_menu_option');
add_action("add_meta_boxes", "dublincore_add_menu" );
add_action('save_post', 'save_dublincore');
add_filter("the_content", "append_dublincore" );
add_filter("the_title_rss", "dublincore_feed_title" );
add_filter("the_content_feed", "dublincore_feed_description" );
add_action("atom_entry","dublincore_augment");
add_action("rdf_item","dublincore_augment");
add_action("rss2_item","dublincore_augment");
add_action("rss_item","dublincore_augment");
 


?>
