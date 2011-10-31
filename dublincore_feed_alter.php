<?PHP

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

?>