<?php


// echo data from theme options

$about_heading_visible = cs_get_option('about_heading_visible');
$about_heading_title = cs_get_option('about_heading_title');
$about_heading_content = cs_get_option('about_heading_content');
if( $about_heading_visible == 1 ):

// echo data from metabox

