<?php

class pageScripts{
    public function __construct(){
        /* Load Scripts And Styles */
        add_action('wp_enqueue_scripts',array($this,'add_scripts'),999);
    }

    public function add_scripts(){
     	wp_enqueue_style('test-style',plugin_dir_url(__FILE__).'styles/main.css');
        wp_enqueue_script('test-script', plugin_dir_url(__FILE__).'scripts/main.js', array(), '1.0.0', true);
        
    }
}