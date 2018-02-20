<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?><?php oceanwp_schema_markup( 'html' ); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<style>
		#taglineutama{
			position: relative;
		}
		#taglineutama::before{
			position: absolute;
			content: '';
			background-color: #00b1d8;
			top: -6px;
			left: 0;
			width: 100%;
			height: 100%;
			display: block;
			-webkit-transform: skewY(2.5deg);
			-ms-transform: skewY(2.5deg);
			transform: skewY(2.5deg);
			border-radius: 6px;
			transform-origin: right top;
		}
		/*#taglineutama::after{
			position: absolute;
			content: '';
			background-color: #00b1d8;
			width: 30px;
			height: 32px;
			display: block;
			bottom: -6px;
			left: 20%;
			border-radius: 4px;
			-webkit-transform: skewY(35deg);
			-ms-transform: skewY(35deg);
			transform: skewY(35deg);
			border-top: 0;
		}*/
		#taglineutama::after{
			position: absolute;
			content: '';
			background-color: rgba(0,0,0,0.1);
			top: -6px;
			left: 0;
			width: 100%;
			height: 100%;
			display: block;
			-webkit-transform: skewY(-1.5deg);
			-ms-transform: skewY(-1.5deg);
			transform: skewY(-1.5deg);
			border-radius: 6px;
			transform-origin: left top;
			z-index: -1;
		}
	</style>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<?php do_action( 'ocean_top_bar' ); ?>

			<?php do_action( 'ocean_header' ); ?>

			<?php do_action( 'ocean_before_main' ); ?>
			
			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?>>

				<?php do_action( 'ocean_page_header' ); ?>