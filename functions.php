<?php
    function enqueue_cyber_style() {
            wp_enqueue_style("cyber",get_stylesheet_uri());

    }
    
    add_action( 'wp_enqueue_scripts', 'enqueue_cyber_style' );
?>