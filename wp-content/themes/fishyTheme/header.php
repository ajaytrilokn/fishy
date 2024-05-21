<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script type="text/javascript">
	    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	</script>
	<?php wp_head(); ?>
</head>

<body id="home" <?php body_class('homePage'); ?>>
<?php wp_body_open(); ?>

<?php

$appStoreUrl=get_field('app_store','option');
$googlePlay=get_field('google_play','option');

?>

 <div class="page-wrapper ">
  	<!-- header start -->
  	<header class="site-header">
	    <div class="header-main nav-area">
	      	<div class="header-inner-main">
	      		<div class="container">
		          	<div class="navbar-container">

			            <nav class="navbar navbar-dark navbar-expand-lg">
			                <div class="header-logo">
			                	<a href="http://localhost/wp/fishy/">
									<img src="<?php
										echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );
									?>" alt="">
								</a>
			              	</div>
			              	<div class="header-inner d-flex">
				                <div class="header-right">
				                	<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					                    <span class="icon-bar"></span>
					                    <span class="icon-bar"></span>
					                    <span class="icon-bar"></span>
					                </button>

				                    <div class="collapse header-menu navbar-collapse " id="navbarNavDropdown">
				                      <div class="header-menu-inner">
				                        <ul class="navbar-nav" id="menu-center">
				                           <li class="nav-item">
				                            <a href="#features" class="scrollTosection">Features</a>
				                          </li>
				                          
				                           <li class="nav-item ">
				                            <a href="#contact_us" class="scrollTosection">Contact Us</a>
				                          </li>
				                          
				                          <li class="nav-item">
				                            <a  href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#join_our_team-pp">Join The Team</a>
				                          </li>
				                          <li class="nav-item">
				                            <a  href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#partner-pp">Become a Partner</a>
				                          </li>
				                        </ul>

				                        <div class="header-btn">
				                        	<div class="app-link-main">
												<a href="<?=$appStoreUrl?>" class="app-img-wp">
												<?php $appStore = get_field('apple_store_image','option');?>
												<img src="<?php echo $appStore['url'];?>" alt="<?php echo $appStore['alt'];?>"></a>
												<a href="<?=$googlePlay?>" class="app-img-wp">
												<?php $playStore = get_field('playstore_image','option');?>
												<img src="<?php echo $playStore['url'];?>" alt="<?php echo $playStore['alt'];?>"></a>
											</div>
				                        </div>

				                      </div>
				                    </div>
				                </div>
				            </div>
			            </nav>
		            </div>
	            </div>
	        </div>
	    </div>
  	</header> 
	<!-- header End -->
