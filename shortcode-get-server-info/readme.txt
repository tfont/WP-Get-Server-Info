=== WP Get Server Info Shortcode ===
Tags:              php, server, post, get, shortcode
Requires at least: 1.0
Tested up to:      1.0
Stable tag:        1.0
License:           GPLv3

Retrieves $_SEVER, $_POST, or $_GET. Rquires PHP 5.6+.

== Description ==
Retrieves $_SEVER, $_POST, or $_GET. Rquires PHP 5.6+.


Will display GET values with "print_r"
[get-server-info=get type=print_r]

Will display POST values with "<pre>" HTML element wrapped around "print_r"
[get-server-info=post type=pre_print_r]

Will display SERVER values with "var_dump"
[get-server-info=server type=var_dump]

Will use the default value which is "print_r" and display GET values
[get-server-info=get]


== Installation ==
Activate and use shortcode: [get-server-info=post] or get-server-info="post"]