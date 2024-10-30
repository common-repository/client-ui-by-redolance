<?php
/*
Plugin Name: Client ui admin by redolance
Plugin URI: 
Description: Client ui admin by redolance - you can name it "clean and modern dashboard for developers and clients.
Author: Redolance Team
Version: 1.0.1
Author URI: http://redolance.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
//

/**
 * Client ui admin by redolance
 * Copyright (C) 2016, Redolance Team
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

// Enqueue CSS files.
function cubr_admin_style() {
    wp_enqueue_style('cubr_admin_general_styles', plugins_url('/assets/redolance-admin-general.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'cubr_admin_style');

// add background to body  if you want clear this comment. to change the background image ,upload your own in the plugin assets solder and change the name here . 
function cubr_main_background() {?>
<style> #wpwrap {background-image:url('<?php echo plugins_url( '/assets/bg1.png', __FILE__ ); ?>')}</style>
<?php
}
add_action('in_admin_header', 'cubr_main_background');
?> 