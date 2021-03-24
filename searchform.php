<?php
/**
 * The theme search box
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jhon.me
 */
?>
<!----theme-search-box---->
<div class="jhon-me-search-box" data-aos="fade-up">
    <form  role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" name="s" id="search" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>">
        <button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </form>
</div>