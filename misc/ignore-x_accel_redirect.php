<?php
/**
 * Plugin Name: EDD Ignore X-Accel-Redirect Header
 * Plugin URI: https://github.com/easydigitaldownloads/library
 * Description: Fixes downloading issues on NGINX hosts that do not need the X-Accel-Redirect header
 * Version: 0.0.1
 * Author: Phil Johnston
 * Author URI: https://github.com/NateWr
 * License:     GNU General Public License v2.0 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
defined( 'ABSPATH' ) || exit;

/**
 * Ignore the X-Accel-Redirect header. Specifically, this fixes issues with files downloading on Pantheon setups.
 *
 */
 function pantheon_ignore_edd_ignore_x_accel_redirect(){
 	return true;
 }
 add_filter( 'edd_ignore_x_accel_redirect', 'pantheon_ignore_edd_ignore_x_accel_redirect' );
