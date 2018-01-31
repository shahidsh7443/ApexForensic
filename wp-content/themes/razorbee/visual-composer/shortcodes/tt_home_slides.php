<?php
    if ( ! defined( 'ABSPATH' ) ) :
        exit; // Exit if accessed directly
    endif;

    $tt_atts = vc_map_get_attributes( $this->getShortcode(), $atts );

    ob_start();
    ?>

    <div id="slides" class="tt-slider <?php echo esc_attr($tt_atts['el_class']);?>">
        <ul class="slides-container">
            <?php echo wpb_js_remove_wpautop( $content ); ?>
        </ul>
        <nav class="slides-navigation">
     <a href="#" class="next">
       <span class="glyphicon glyphicon-chevron-right cr"></span>
     </a>
     <a href="#" class="prev">
       <span class="glyphicon glyphicon-chevron-left cl"></span>
     </a>
   </nav>
    </div>

    <?php

    echo ob_get_clean();
