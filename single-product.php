<?php
global $posts, $post;
$slug_arr = array(
    'sign-up-for-a-free-30-day-pager-trial',
    'swissphone-summer-promotion-2014',
    'swissphone-summer-promotion-2014-2',
    'swissphone-summer-promotion-2014-3',
    'swissphone-summer-promotion-2014-4',
    'res-q-hybrid',
    'res-q-hybrid-de',
    'res-q-hybrid-fr'
);
if ( in_array($posts[0]->post_name, $slug_arr ) /*$posts[0]->post_name == 'sign-up-for-a-free-30-day-pager-trial'*/ ) {    
	include "single-product-signup-for-free-pager-trial.php";
} else {
	include "single-solution.php";
}
?>