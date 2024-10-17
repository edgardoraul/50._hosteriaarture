<?php
/**
 * Template Name: SlideShow de Inicio
 *
 * @package WordPress
 * @subpackage hosteriaarture
 * @since Hostería Arture 1.0
 */

get_header();?>
	<section>
		<article id="highlight">

<?php
// WP_Query arguments
$args = array (	'pagename' => 'home', );

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() )
{
	while ( $query->have_posts() )
	{
		$query->the_post();
?>


<?php // Teléfonos y tabletas
if(wp_is_mobile())
	{
		$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible',true));
		if ($attachID !== '')
		{
			foreach ($attachID as $item)
			{
				$imagen = wp_get_attachment_image_src($item,'custom-thumb-960-369');
				$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
				$descripcion = get_post_field('post_content', $item);
				echo '<img class="item" src="' . $imagen[0] . '"';
				echo ' alt="' . $alt . '"';
				echo ' />';
			};
		};

	} else {
		// Desktops

		$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible',true));
		if ($attachID !== '')
		{
			foreach ($attachID as $item)
			{
				$imagen = wp_get_attachment_image_src($item,'custom-thumb-1000-400');
				$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
				$descripcion = get_post_field('post_content', $item);
				echo '<img class="item" src="' . $imagen[0] . '"';
				echo ' alt="' . $alt . '"';
				echo ' />';
			};
		};
	};
?>

			<div id="navegation">

<?php // Teléfonos y tabletas
	if(wp_is_mobile())
	{
		$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible',true));
		if ($attachID !== '')
		{
			foreach ($attachID as $item)
			{
				$imagen = wp_get_attachment_image_src($item,'custom-thumb-960-369');
				$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
				$descripcion = get_post_field('post_content', $item);
				echo '<p><a href="javascript:;"><span>';
				echo $alt;
				echo '</span></a></p>';
			};
		};
	
	} else {
		// Desktops

		$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible',true));
		if ($attachID !== '')
		{
			foreach ($attachID as $item)
			{
				$imagen = wp_get_attachment_image_src($item,'custom-thumb-1300-500');
				$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
				$descripcion = get_post_field('post_content', $item);
				echo '<p><a href="javascript:;"><span>';
				echo $alt;
				echo '</span></a></p>';
			};
		};
	};
?>
			</div>

<?php }
}
wp_reset_query();
wp_reset_postdata();?>

		</article>
	</section>
<?php get_footer();?>