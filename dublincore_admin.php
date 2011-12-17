<?PHP

	function dublincore_options_page() {

	  ?>
		<div class="wrap">
		<h2>Dublin Core Metadata</h2>
		<p>Below is a list of the Dublin Core Metadata nodes you wish to augment your posts with (tick those that apply)</p>
		<form method="post" action="">
		<?php 
		
			wp_nonce_field('dublincore','dublincore');
			settings_fields( 'dublincore' );
		?>
		<h2>DC Nodes</h2>
		<input type="checkbox" name="creator" <?PHP if(trim(get_option("dc_creator"))=="true"){ echo "checked"; } ?> /> DC:Creator <br />
		<input type="checkbox" name="subject" <?PHP if(trim(get_option("dc_subject"))=="true"){ echo "checked"; } ?> /> DC:Subject <br />
		<input type="checkbox" name="title" <?PHP if(trim(get_option("dc_title"))=="true"){ echo "checked"; } ?> /> DC:Title <br />
		<input type="checkbox" name="description" <?PHP if(trim(get_option("dc_description"))=="true"){ echo "checked"; } ?> /> DC:Description <br />
		<input type="checkbox" name="source" <?PHP if(trim(get_option("dc_source"))=="true"){ echo "checked"; } ?> /> DC:Type  <br />
		<input type="checkbox" name="coverage" <?PHP if(trim(get_option("dc_coverage"))=="true"){ echo "checked"; } ?> /> DC:Coverage <br />
		<input type="checkbox" name="relation" <?PHP if(trim(get_option("dc_relation"))=="true"){ echo "checked"; } ?> /> DC:Relation <br />
		<input type="checkbox" name="publisher" <?PHP if(trim(get_option("dc_publisher"))=="true"){ echo "checked"; } ?> /> DC:Publisher <br />
		<input type="checkbox" name="contributor" <?PHP if(trim(get_option("dc_contributor"))=="true"){ echo "checked"; } ?> /> DC:Contributor <br />
		<input type="checkbox" name="rights" <?PHP if(trim(get_option("dc_rights"))=="true"){ echo "checked"; } ?> /> DC:Rights <br />
		<input type="checkbox" name="format" <?PHP if(trim(get_option("dc_format"))=="true"){ echo "checked"; } ?> /> DC:Format <br />
		<input type="checkbox" name="language" <?PHP if(trim(get_option("dc_language"))=="true"){ echo "checked"; } ?> /> DC:Language <br />
		<h2>Modify the RSS Feed - <input type="checkbox" name="metadata_feed_modify" <?PHP if(trim(get_option("metadata_feed_modify"))=="true"){ echo "checked"; } ?> /></h2>
		<h2>Modify the Page / Post / Custom Post Type - <input type="checkbox" name="metadata_page_modify" <?PHP if(trim(get_option("metadata_page_modify"))=="true"){ echo "checked"; } ?> /></h2>
		<h2>Content to modify page / post with</h2>
		<textarea name="content_to_add" cols=130 rows=10><?PHP echo stripslashes(get_option("content_to_add")); ?></textarea>
		<div>
			<p>The following shortcuts can be used</p>
			<p>%creator% - displays the DC:Creator </p>
			<p>%subject% - displays the DC:Subject </p>
			<p>%title% - displays the DC:Title </p>
			<p>%description% - displays the DC:Description </p>
			<p>%source% - displays the DC:Type  </p>
			<p>%coverage% - displays the DC:Coverage </p>
			<p>%relation% - displays the DC:Relation </p>
			<p>%publisher% - displays the DC:Publisher </p>
			<p>%contributor% - displays the DC:Contributor </p>
			<p>%rights% - displays the DC:Rights </p>
			<p>%format% - displays the DC:Format </p>
			<p>%language% - displays the	DC:Language </p>
		</div>
		<p class="submit">
		<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		</p>
		</form>
	</div>
	  
	  <?php
	}


	function register_dublincore() {
		//register our settings
		register_setting( 'dublincore', 'dc_creator');
    	register_setting( 'dublincore', 'dc_subject');
    	register_setting( 'dublincore', 'dc_title');
    	register_setting( 'dublincore', 'dc_description');
		register_setting( 'dublincore', 'dc_source');
		register_setting( 'dublincore', 'dc_coverage');
		register_setting( 'dublincore', 'dc_relation');
		register_setting( 'dublincore', 'dc_publisher');
		register_setting( 'dublincore', 'dc_contributor');
		register_setting( 'dublincore', 'dc_rights');
		register_setting( 'dublincore', 'dc_format');
		register_setting( 'dublincore', 'dc_language');
		register_setting( 'dublincore', 'dc_imethod');
		register_setting( 'dublincore', 'content_to_add');
		register_setting( 'dublincore', 'metadata_feed_modify' );
		register_setting( 'dublincore', 'metadata_page_modify' );
	}
	
	function dublincore_postform(){
	
		if (!empty($_POST['dublincore'])){

			if(!wp_verify_nonce($_POST['dublincore'],'dublincore') ){
			
				print 'Sorry, your nonce did not verify.';
				exit;
				
			}else{			
			
				if($_POST['option_page']=="dublincore"){
				
					if($_POST['creator']=="on"){
					
						update_option("dc_creator","true");
					
					}else{
					
						update_option("dc_creator","false");
					
					}
					if($_POST['subject']=="on"){
					
						update_option("dc_subject","true");
					
					}else{
					
						update_option("dc_subject","false");
					
					}
					if($_POST['title']=="on"){
					
						update_option("dc_title","true");
					
					}else{
					
						update_option("dc_title","false");
					
					}
					if($_POST['description']=="on"){
					
						update_option("dc_description","true");
					
					}else{
					
						update_option("dc_description","false");
					
					}
					if($_POST['source']=="on"){
					
						update_option("dc_source","true");
					
					}else{
					
						update_option("dc_source","false");
					
					}
					if($_POST['coverage']=="on"){
					
						update_option("dc_coverage","true");
					
					}else{
					
						update_option("dc_coverage","false");
					
					}
					if($_POST['relation']=="on"){
					
						update_option("dc_relation","true");
					
					}else{
					
						update_option("dc_relation","false");
					
					}
					if($_POST['publisher']=="on"){
					
						update_option("dc_publisher","true");
					
					}else{
					
						update_option("dc_publisher","false");
					
					}
					if($_POST['contributor']=="on"){
					
						update_option("dc_contributor","true");
					
					}else{
					
						update_option("dc_contributor","false");
					
					}
					if($_POST['rights']=="on"){
					
						update_option("dc_rights","true");
					
					}else{
					
						update_option("dc_rights","false");
					
					}
					if($_POST['format']=="on"){
					
						update_option("dc_format","true");
					
					}else{
					
						update_option("dc_format","false");
					
					}
					if($_POST['language']=="on"){
					
						update_option("dc_language","true");
					
					}else{
					
						update_option("dc_language","false");
					
					}
					if($_POST['imethod']=="on"){
					
						update_option("dc_imethod","true");
					
					}else{
					
						update_option("dc_imethod","false");
					
					} 
					if($_POST['metadata_feed_modify']=="on"){
					
						update_option("metadata_feed_modify","true");
					
					}else{
					
						update_option("metadata_feed_modify","false");
					
					} 
					if($_POST['metadata_page_modify']=="on"){
					
						update_option("metadata_page_modify","true");
					
					}else{
					
						update_option("metadata_page_modify","false");
					
					} 
					
					update_option("content_to_add",$_POST['content_to_add']);
					
				}
			
			}
		
		}
	
	}
	
	function dublincore_menu_option() {
	
		add_options_page('Dublin Core Options', 'Dublin Core Options', 'manage_options', 'dublincore', 'dublincore_options_page');
		
	}

?>