<?php
global $posts, $post;
//if ($posts[0]->post_name == 'sign-up-for-a-free-30-day-pager-trial') {
if (get_post_meta($post->ID, 'one_column_page', true)) {
	include "single-product-signup-for-free-pager-trial.php";
} else {
	include "single-solution.php";
}
?>