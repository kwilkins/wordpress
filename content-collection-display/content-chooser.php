<?php
/*
Plugin Name: Content Collection Display
Plugin URI: http://kwilkins.com/
Description: Displays content randomly from a numbered set of html pages located from a base url
Author: Kevin Wilkinson
Version: 0.5
Author URI: http://kwilkins.com/
*/

class ContentChooser extends WP_Widget {
  
	function ContentChooser() {
    	$widget_ops = array(
    		'classname' => 'ContentChooser',
    		'description' => __('Displays content randomly from a numbered set of html pages located from a base url')
    	);
    	$control_options = array(
    		'height' => 350,
    		'width' => 300
    	);
    	$this->WP_Widget('ContentChooser',
    		'Displays content randomly from a numbered set of html pages located from a base url',
    		$widget_ops, $control_options);
	}
	
	function form($config) {
		?>
		
    	<label for="<?php echo $this->get_field_id("title");  ?>">
    		<p>Title: <input type="text"  value="<?php echo $config['title']; ?>" name="<?php  echo $this->get_field_name("title"); ?>" id="<?php  echo $this->get_field_id("title") ?>"></p>
    	</label>
    	
    	<label for="<?php echo $this->get_field_id("baseUrl");  ?>">
    		<p>Base Url: <input  type="text" value="<?php echo $config['baseUrl'];  ?>" name="<?php echo  $this->get_field_name("baseUrl"); ?>" id="<?php  echo $this->get_field_id("baseUrl") ?>"></p>
    	</label>
    	
    	<label for="<?php echo $this->get_field_id("totalPages");  ?>">
    		<p>Number of Total Pages: <input  type="text" value="<?php echo $config['totalPages'];  ?>" name="<?php echo  $this->get_field_name("totalPages"); ?>" id="<?php  echo $this->get_field_id("totalPages") ?>"></p>
    	</label>
    	
    	<label for="<?php echo $this->get_field_id("displayCount");  ?>">
    		<p>Number of Pages to Display: <input  type="text" value="<?php echo $config['displayCount'];  ?>" name="<?php echo  $this->get_field_name("displayCount"); ?>" id="<?php  echo $this->get_field_id("displayPages") ?>"></p>
    	</label>
    	
		<?php        
	}
 
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = $new_instance['title'];
		$instance['baseUrl'] = $new_instance['baseUrl'];
		$instance['totalPages'] = $new_instance['totalPages'];
		$instance['displayCount'] = $new_instance['displayCount'];
		return $instance;
	}
	
	function widget($args, $instance) {
		extract($args, EXTR_SKIP);
	
		echo $before_widget;
		$title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
	
		if(!empty($title)) {
	  		echo $before_title . $title . $after_title;
	  	}
	
		// widget output code starts here
		$baseUrl = $instance['baseUrl'];
		$displayCount = $instance['displayCount'];
		
		$totalPages = $instance['totalPages'];
		$pageIndiceStack = range(1, $totalPages);
		shuffle($pageIndiceStack);
		
		foreach(range(1, $displayCount) as $i) {
			$index = array_shift($pageIndiceStack);
			$url = $baseUrl.$index.".html";
			$xml = new DOMDocument();
			$xml->loadHTMLFile($url);
			echo $xml->saveXML();
		}
	
		echo $after_widget;
	}
 
}

add_action( 'widgets_init', create_function('', 'return register_widget("ContentChooser");') );
?>
