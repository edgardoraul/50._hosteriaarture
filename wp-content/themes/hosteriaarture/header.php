<?php
/**
 *
 * @package WordPress
 * @subpackage hosteriaarture
 * @since Hostería Arture 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta name="google-site-verification" content="UsbDew7-1xZ1ImW_TyAorS47rmGu018U1G9xV5bxpSE" />
	<meta charset="<?php bloginfo('charset');?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<meta name="author" content="<?php _e('...:: WebModerna | el futuro de la web ::...', 'losalstosdelvalle');?>" />
<?php
	$descripcion_web = of_get_option('descripcion_web', '');
	$meta_keywords2 = of_get_option('meta_keywords2', '');

	if (is_home() || is_search()) { ?>
	<title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>
<?php if($descripcion_web != null) { ?>
	<meta name="description" content="<?php echo $descripcion_web;?>" />
<?php } } elseif (is_404()) { ?>
	<title><?php echo _e('Error 404');?> | <?php bloginfo('name');?> - <?php bloginfo('description');?></title>
<?php if($descripcion_web != null) { ?>
	<meta name="description" content="<?php echo $descripcion_web;?>" />
<?php } } else { ?>
	<title><?php the_title();?> | <?php bloginfo('name');?> - <?php bloginfo('description');?></title>
<?php  $my_data = get_post_meta( $post->ID, '_my_meta_value_key', true ); if($my_data != null) { ?>
	<meta name="description" content="<?php  echo $my_data;?>" />
<?php } };
if($meta_keywords2 != null) { ?>
	<meta name="keywords" content="<?php echo $meta_keywords2;?>" />
<?php };?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/style.min.css">
<?php if(wpmd_is_ios()) { //Los Favicones ?>
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('stylesheet_directory');?>/img/apple-touch-icon-152x152.png" />
<?php };?>
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory');?>/img/favicon-128.png" sizes="128x128" />
	<!-- <link rel="shortcut icon" type="image/x-icon" href="<?php //bloginfo('url');?>/favicon.ico" /> -->
<?php if(wpmd_is_notdevice()) { ?>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/style-ie9.css">
	<![endif]-->
	<!--[if gte IE 9]><style type="text/css">.gradient{filter:none !important;}</style><![endif]-->
	<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/style-ie8.css">
	<![endif]-->
<?php };
wp_head();
$telfijo_web =  of_get_option('telfijo_web', '');
$celular_web = of_get_option('celular_web', '');
?>
</head>
<body>
	<div class="header_tittle">
		<h1>
			<?php bloginfo('name');?>
			<span><?php bloginfo('description');?></span>
			<?php if( $telfijo_web != null ) { ?>
			<span><i class="icon-phone"> </i><?php echo $telfijo_web;?></span>
			<?php }; if ( $celular_web != null ) { ?>
			<span><i class="icon-mobile2"> </i><?php echo $celular_web;?></span>
			<?php } ?>
		</h1>
	</div>
	<header class="gradient">
		<div id="logo">
			<figure>
				<a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>">
					<img src="<?php bloginfo('stylesheet_directory');?>/img/logo5.png" alt="Logo" />
				</a>
			</figure>
		</div>

<?php // El activador y el modal de la promoción
$args = array (	'pagename' => 'promocion', );
$query = new WP_Query( $args );
if ( $query->have_posts() )
{
	while ( $query->have_posts() )
	{
		$query->the_post();
?>

		<div class="activador header">
			<a class="fancybox" href="#promo" title="<?php the_title();?>">
				<h3><i class="icon-gift"> </i><?php the_title();?></h3>
			</a>
		</div>
<?php }
}
wp_reset_query();
wp_reset_postdata();?>



		<button id="menu" class="gradient">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<nav>
			<?php $default = array(
				'container'			=>			false,
				'depth'				=>				1,
				'menu'				=>	 'header_nav',
				'theme_location'	=>	 'header_nav',
				'items_wrap'		=>	 '<ul class="main_nav" id="header_nav">%3$s</ul>'
			);
			wp_nav_menu($default);?>
		</nav>

		<div class="header_title_inside">
			<h2>
				<?php bloginfo('name');?>
				<span><?php bloginfo('description');?></span>
				<?php if ( $telfijo_web != null ) { ?>
				<span><i class="icon-phone"> </i><?php echo $telfijo_web;?></span>
				<?php } ?>
			</h2>
		</div>


<?php // El activador y el modal de la promoción
$args = array (	'pagename' => 'promocion', );
$query = new WP_Query( $args );
if ( $query->have_posts() )
{
	while ( $query->have_posts() )
	{
		$query->the_post();
?>
		<div class="activador">
			<a class="fancybox" href="#promo">
				<h3><i class="icon-gift"> </i><?php the_title();?></h3>
			</a>
		</div>

		<div id="promo">
			<div class="activador">
				<span>
					<h3><i class="icon-gift"> </i></h3>
				</span>
			</div>
			<h3><?php the_title();?></h3>
			<div class="clearfix"></div>
			<figure>
				<?php
					if( has_post_thumbnail() )
					{
						the_post_thumbnail('custom-thumb-380-185');
					} else {
						echo '<img alt="sin imagen" src="'.get_stylesheet_directory_uri().'/img/4.jpg" />';
					};
				?>
				<figcaption>
					<?php the_content(); ?>
				</figcaption>
			</figure>
		</div>
<?php }
}
wp_reset_query();
wp_reset_postdata();?>

<?php // Acá se coloca la dirección
$args = array (	'pagename' => 'direccion', );
$query = new WP_Query( $args );
if ( $query->have_posts() )
{
	while ( $query->have_posts() )
	{
		$query->the_post();
?>
		<div class="header_address">
			<?php the_content(); ?>
			<figure>
				<?php
					if( has_post_thumbnail() )
					{
						the_post_thumbnail('custom-thumb-180-135');
					};
				?>
			</figure>
		</div>
<?php }
}
wp_reset_query();
wp_reset_postdata();?>
		<div class="clearfix"></div>
	</header>