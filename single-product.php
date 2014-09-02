<?php
global $posts, $post;
if ($posts[0]->post_name == 'sign-up-for-a-free-30-day-pager-trial') {
	include "single-product-signup-for-free-pager-trial.php";
} else {
	include "single-solution.php";
}
?>