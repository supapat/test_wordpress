<?php
class mn_widget_hello extends WP_Widget {
	function __construct() {
		parent::__construct(
			'mn_widget_hello', // Base ID
			'Hello World', // Name
			array( 'description' => "Just another WordPress Widget", ) // Args
		);
	}
 
	function widget($args, $instance){
		echo $args['before_widget'];
		echo $args['before_title'].$instance['title'].$args['after_title'];
		echo '<div class="widget-content">';
		echo '... Widget Content Goes Here ...';
		echo '</div>';
		echo $args['after_widget'];
	}
 
	function update($new_instance, $old_instance){
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
 
	function form($instance){
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'Links', 'mn_textdomain' );
		}
	 
		echo "<p>";
		echo "<label for=\"".$this->get_field_id( 'title' )."\">".__( 'Title:' )."</label>";
		echo "<input class=\"widefat\" id=\"".$this->get_field_id( 'title' )."\" name=\"".$this->get_field_name( 'title' )."\" type=\"text\" value=\"".esc_attr( $title )."\">";
		echo "</p>";
	}
}
?>