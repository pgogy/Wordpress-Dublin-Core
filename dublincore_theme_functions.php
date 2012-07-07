<?PHP

	function return_dublin_core_value($element,$post_id){
	
		switch($element){
		
			case 'dublin_core_author': return get_post_meta($post_id,'dublin_core_author',true); break;
			case 'dublin_core_subject': return get_post_meta($post_id,'dublin_core_subject',true); break;
			case 'dublin_core_title':  return get_post_meta($post_id,'dublin_core_title',true); break;
			case 'dublin_core_description':  return get_post_meta($post_id,'dublin_core_description',true); break;
			case 'dublin_core_type':  return get_post_meta($post_id,'dublin_core_type',true); break;
			case 'dublin_core_source':  return get_post_meta($post_id,'dublin_core_source',true); break;
			case 'dublin_core_coverage':  return get_post_meta($post_id,'dublin_core_coverage',true); break;
			case 'dublin_core_relation':  return get_post_meta($post_id,'dublin_core_relation',true); break;
			case 'dublin_core_publisher':  return get_post_meta($post_id,'dublin_core_publisher',true); break;
			case 'dublin_core_contributor':  return get_post_meta($post_id,'dublin_core_contributor',true); break;
			case 'dublin_core_rights':  return get_post_meta($post_id,'dublin_core_rights',true); break;
			case 'dublin_core_format':  return get_post_meta($post_id,'dublin_core_format',true); break;
			case 'dublin_core_language':  return get_post_meta($post_id,'dublin_core_language',true); break;
			case 'dublin_core_instructionalmethod':  return get_post_meta($post_id,'dublin_core_instructionalmethod',true); break;
			default : break;
			
		}			
	
	}

?>