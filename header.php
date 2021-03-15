<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jhon.me
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!---------------CSS-FILES-------------->
    <?php 
 wp_head();
?>

    <title>bootstrap starter pack </title>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!--===========HEADER-START===========-->
    <header>
        <div class="container">
            <!--logo---->
            <div class="site-branding">
                <?php
			if ( has_custom_logo() ) :
				?>
                <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                    rel="home"><?php the_custom_logo(); ?></a>
                <?php
			else :
				?>
                <a class="logo text" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                    rel="home"><?php bloginfo( 'name' ); ?></a>
                <?php
			endif;
			$jhon_me_description = get_bloginfo( 'description', 'display' );
			if ( $jhon_me_description || is_customize_preview() ) :
				?>
                <p class="site-description">
                    <?php echo $jhon_me_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                </p>
                <?php endif; ?>
            </div><!-- .site-branding -->

            <div class="hamburger-menu">
                <a class="menu__icon mobile"><span></span></a>
            </div><!--Hamburger-menu---->
        </div>
        <nav>
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
