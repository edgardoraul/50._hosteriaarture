<?php
/**
 *
 * @package WordPress
 * @subpackage hosteriaarture
 * @since Hostería Arture 1.0
 */
get_header();?>
	<section>
		<article id="highlight">
			<h1>Error 404. No entiendo qué estás haciendo.</h1>
	<?php 
		
	// Tablet Teléfonos
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
				echo '<img src="' . $imagen[0] . '"';
				echo ' alt="' . $alt . '"';
				echo ' />';
			};
		};
	} else  {

	// Desktop

		$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible',true));
		if ($attachID !== '')
		{
			foreach ($attachID as $item)
			{
				$imagen = wp_get_attachment_image_src($item,'custom-thumb-1300-500');
				$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
				$descripcion = get_post_field('post_content', $item);
				echo '<img src="' . $imagen[0] . '"';
				echo ' alt="' . $alt . '"';
				echo ' />';
			};
		};
	};
?>
			
			<div id="navegation">

<?php // Teléfonos
			
	// Tablet
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
	} else  {

	// Desktop
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
		</article>
	</section>
<?php get_footer();?>