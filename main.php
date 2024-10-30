<?PHP
/*
Plugin Name: Child Page Templates
Plugin URI: http://JoeAnzalone.com/plugins/child-page-templates
Description: Allows theme authors to add page templates to their themes that will be automatically used based on the page's parent.
Version: 1.0.2
Author: Joe Anzalone
Author URI: http://JoeAnzalone.com
License: GPL2
*/
?>
<?PHP

class shmit_child_page_templates {

	function page_template_filter( $template ) {		
			global $post;
			$post_parent = get_post($post->post_parent);
			$parent_slug = $post_parent->post_name;
			$parent_id = $post->post_parent;
			
			$slug_path = get_stylesheet_directory() . "/child-page-templates/page-$parent_slug.php";
			$id_path = get_stylesheet_directory() . "/child-page-templates/page-$parent_id.php";

				if($post->ID != $parent_id){
					if(is_file($slug_path)){
						$template = $slug_path;
					} elseif (is_file($id_path)) {
						$template = $id_path;
					}
				}
				
		return $template;
	}
	
	function __construct(){
		add_filter( 'page_template', array($this, 'page_template_filter') );
	}
	
}


new shmit_child_page_templates;