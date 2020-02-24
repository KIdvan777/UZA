<?php
add_action('rest_api_init', 'uza_portfolio_rest_api');

function uza_portfolio_rest_api()
{
    register_rest_field('portfolio', 'image_url', array(
        'get_callback' => function(){ return get_the_post_thumbnail_url(get_the_ID(),'full'); }
    ));
}
