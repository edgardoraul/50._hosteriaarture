<?php
/**
* Template Name: Servicios
*
* @package WordPress
* @subpackage hosteriaarture
* @since Hostería Arture 1.0
*/
get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>
<section>
	<article class="contenido">
		<div class="contenido perspectiva">
			<h1 class="titular_estilo_mesa gradient">
				<i class="icon-mug"> </i><?php the_title();?>
			</h1>
		</div>
		<div class="columna-2">
			<?php the_content();?>  
		</div>
		</article>
		<article class="center">
			<div class="galeria_2">
				<div>
<?php // Desktops and Tablets
if(wpmd_is_notphone())
{
	$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible', true));
	if ($attachID !== '')
	{
		foreach ($attachID as $item)
		{
			$imagen = wp_get_attachment_image_src($item,'custom-thumb-180-135');
			$imagen_big = wp_get_attachment_image_src($item,'custom-thumb-960-x');
			$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
			$descripcion = get_post_field('post_content', $item);
			echo '
			<figure>
				<a title="'.$alt.'" href="'.$imagen_big[0].'" class="fancybox" data-fancybox-group="button">
					<img src="' . $imagen[0] . '"';
			//if (count($alt))
			//{
				echo ' alt="' . $alt . '"';
			//}
			echo ' />
				</a>
			</figure>';
			};
		};
	}
	else // Solo teléfonos
	{
		$attachID = (get_post_meta( $post->ID, 'custom_imagenrepetible', true));
		if ($attachID !== '')
		{
			foreach ($attachID as $item)
			{
				$imagen = wp_get_attachment_image_src($item,'custom-thumb-180-135');
				$alt = get_post_meta($item, '_wp_attachment_image_alt', true);
				$descripcion = get_post_field('post_content', $item);
				echo '
				<figure>
					<img src="' . $imagen[0] . '"';
			//if (count($alt))
			//{
				echo ' alt="' . $alt . '"';
			//}
			echo ' />
				</figure>';
			};
		};
	}
?>
			</div>
		</div>
	</article>
</section>
<?php
endwhile;
endif;
get_footer(); ?>