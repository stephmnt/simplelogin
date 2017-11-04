<?php
/*
Plugin Name: Simpliest login Widget
Plugin URI: https://github.com/stephanemanet/simplelogin
Description: A very simple widget to login or register. Usefull for integrators.
Version: 0.1
Author: Stéphane Manet
Author URI: http://stephanemanet.com
License: GPL v3
*/

class Simpliest_login_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('simpliest_login', 'Simpliest Login', array('description' => 'A very simple widget to login or register.'));
    }
    
    public function widget($args, $instance)
    {
		$title = isset($instance['title']) ? $instance['title'] : '';
		?>
		<div class="simplelogin">
			<ul>
			<li><?php wp_loginout(); ?></li>
			<li><?php wp_register(); ?></li>
			</ul>
		</div>
		<?php
    }
}

add_action('widgets_init', function(){register_widget('Simpliest_login_Widget');});

?>
