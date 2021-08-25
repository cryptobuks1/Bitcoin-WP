<?php
    global $r_opt;
    $args = array();

    $args['faq-title'] = $r_opt['faq-title'];
    $args['FAQ'] = $r_opt['FAQ'];
    get_block('faq',$args);
    
