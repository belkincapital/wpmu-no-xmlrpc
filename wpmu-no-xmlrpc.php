<?php
/**
 * Plugin Name: WPMU No XMLRPC
 * Description: This plugin disables XML-RPC API in WordPress 3.5+, which is enabled by default.
 * Author: Jason Jersey
 * Version: 1.0
 */
 
add_filter( 'xmlrpc_enabled', '__return_false' );
