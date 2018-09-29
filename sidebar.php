<?php
if (function_exists('wpp_get_mostpopular'))
{
    wpp_get_mostpopular([
    'range'        => 'all',
    'order_by'     => 'views',
    'limit'        => 5,
    'post_html'    => '<li>{thumb} {title}</li>',
    'header'       => 'TOP 5 STORIES',
    'header_start' => '<h3 class="title">',
    'header_end'   => '</h3>',
    'wpp_start'    => '<ol class="my_wpp_list">',
    'wpp_end'      => '</ol>'
    
    
    ]);
}
?>