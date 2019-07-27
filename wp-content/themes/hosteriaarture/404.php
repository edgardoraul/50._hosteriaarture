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
	<?php // Teléfonos
	if(wpmd_is_phone())
	{
		$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible', true));
		if ($attachID !== '')
		{
			foreach ($attachID as $item)
			{
				$imagen = wp_get_attachment_image_src($item,'custom-thumb-400-154');
				$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
				$descripcion = get_post_field('post_content', $item);
				echo '<img class="item" src="' . $imagen[0] . '"';
				if (count($alt))
				{
					echo ' alt="' . $alt . '"';
				}
				echo ' />';
			};
		};
	};
			
	// Tablet
	if(wpmd_is_tablet())
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
				if (count($alt))
				{
					echo ' alt="' . $alt . '"';
				}
				echo ' />';
			};
		};
	};

	// Desktop
	if(wpmd_is_notdevice())
	{
		$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible',true));
		if ($attachID !== '')
		{
			foreach ($attachID as $item)
			{
				$imagen = wp_get_attachment_image_src($item,'custom-thumb-1300-500');
				$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
				$descripcion = get_post_field('post_content', $item);
				echo '<img src="' . $imagen[0] . '"';
				if (count($alt))
				{
					echo ' alt="' . $alt . '"';
				}
				echo ' />';
			};
		};
	};
?>
			
			<div id="navegation">

<?php // Teléfonos
	if(wpmd_is_phone())
	{
		$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible', true));
		if ($attachID !== '')
		{
			foreach ($attachID as $item)
			{
				$imagen = wp_get_attachment_image_src($item,'custom-thumb-400-154');
				$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
				$descripcion = get_post_field('post_content', $item);
				echo '<p class="selected"><a href="javascript:;"><span>';
				if (count($alt))
				{
					echo $alt;
				}
				echo '</span></a></p>';
			};
		};
	};
			
	// Tablet
	if(wpmd_is_tablet())
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
				if (count($alt))
				{
					echo $alt;
				}
				echo '</span></a></p>';
			};
		};
	};

	// Desktop
	if(wpmd_is_notdevice())
	{
		$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible',true));
		if ($attachID !== '')
		{
			foreach ($attachID as $item)
			{
				$imagen = wp_get_attachment_image_src($item,'custom-thumb-1300-500');
				$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
				$descripcion = get_post_field('post_content', $item);
				echo '<p><a href="javascript:;"><span>';
				if (count($alt))
				{
					echo $alt;
				}
				echo '</span></a></p>';
			};
		};
	};
?>
			</div>
		</article>
	</section>
<?php get_footer();?>