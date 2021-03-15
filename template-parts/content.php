<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jhon.me
 */
?>
<div class="col-md-6" data-aos="fade-up">
 <?php 
	get_template_part( 'template-parts/post-formats/post',get_post_format() );
 ?>
</div><!---col-md-6-->

