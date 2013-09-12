<?php 
namespace Habari;

if( !defined( 'HABARI_PATH' ) ) { 
	die('No direct access');
}

class ThemeName extends Theme
{
	public function action_theme_activated() {}

	public function action_init_theme()	{
		Format::apply( 'autop', 'comment_content_out' );
		Format::apply( 'tag_and_list', 'post_tags_out' );
		Format::apply( 'autop', 'post_content_out' );
		Format::apply_with_hook_params( 'more', 'post_content_excerpt', '', 100, 1 );
	}

	public function action_add_template_vars( $theme, $handler_vars ) {}

	public function act_search( $user_filters = array() ) {
		$types = Post::list_active_post_types();
		$user_filters = array_merge($user_filters, array('content_type' => $types));
		parent::act_search($user_filters);
	}

	public function act_display_post( $user_filters = array()) {
		parent::act_display_post( $user_filters );
	}
	
	public function act_display_home( $user_filters = array() ) {		
		$this->display('home');
	}
}
?>