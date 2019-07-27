<?php
/**
 * Template Name: Fotos
 *
 * @package WordPress
 * @subpackage hosteriaarture
 * @since Hostería Arture 1.0
 */

get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>
	<section>
		<article class="galeria">
			<div class="contenido perspectiva">
				<h1 class="titular_estilo_mesa gradient"><i class="icon-images"> </i><?php the_title();?></h1>
			</div>

<?php // Desktops and Tablets
	if(wpmd_is_notphone())
	{
		$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible', true));
		if ($attachID !== '')
		{
			foreach ($attachID as $item)
			{
				$imagen = wp_get_attachment_image_src($item,'custom-thumb-250-190');
				$imagen_big = wp_get_attachment_image_src($item,'custom-thumb-960-x');
				$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
				$descripcion = get_post_field('post_content', $item);
				echo '
					<figure class="imagen_item">
						<a title="'.$alt.'" href="'.$imagen_big[0].'" class="fancybox" data-fancybox-group="button">
							<img class="item" src="' . $imagen[0] . '"';
//				if (count($alt))
//				{
					echo ' alt="' . $alt . '"';
//				}
				echo ' />
						</a>
						<figcaption class="caption center">'.$alt.'</figcaption>
					</figure>';
			};
		};
	};
?>


<?php // Solo teléfonos
	if(wpmd_is_phone())
	{
		$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible', true));
		if ($attachID !== '')
		{
			foreach ($attachID as $item)
			{
				$imagen = wp_get_attachment_image_src($item,'custom-thumb-400-x');
				$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
				$descripcion = get_post_field('post_content', $item);
				echo '
					<figure class="imagen_item">
						<img class="item" src="' . $imagen[0] . '"';
				//if (count($alt))
				//{
					echo ' alt="' . $alt . '"';
				//}
				echo ' />
						<figcaption class="caption center">'.$alt.'</figcaption>
					</figure>';
			};
		};
	};
?>

		</article>
	</section>
<?php endwhile; endif;?>
<?php get_footer();?>