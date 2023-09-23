<?php

/*
    Plugin Name: Our Word Filter Plugin 
    Description: Replaces a list of words
    Version 1.0
    Author: Halyna
    Author URL: 
*/  

if( ! defined ( 'ABSPATH' ) ) exit; // Exit if accessed directly 

class OurWordFilterPlugin {
    function __construct() {
        add_action('admin_menu');
    }
}

$ourWordFilterPlugin = new OurWordFilterPlugin();

?>