<?php
/**
 * Template part for displaying page breadcrumb
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jhon.me
 */

?>
<section class="page-breadcrumb" data-aos="fade-up">
    <nav aria-label="breadcrumb">
            <?php
             if(function_exists('mj_wp_breadcrumb'))
                mj_wp_breadcrumb();
            ?>
    </nav>
</section>