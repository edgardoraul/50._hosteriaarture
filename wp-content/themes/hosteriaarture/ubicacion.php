<?php
/**
 * Template Name: Ubicación
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
				<h1 class="titular_estilo_mesa gradient"><i class="icon-map"> </i><?php the_title();?></h1>
			</div>
			<?php the_content();?>
		</article>
	</section>
<?php
endwhile;
endif;
get_footer();?>