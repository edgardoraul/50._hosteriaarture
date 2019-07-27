<?php
/**
 * Template Name: Contacto y Tarifas 2
 *
 * @package WordPress
 * @subpackage hosteriaarture
 * @since Hostería Arture 1.0
 */

get_header();

if (have_posts()) : while (have_posts()) : the_post();


?>
	<section>
		<article class="formulario">
			<div class="contenido perspectiva">
				<h3 class="titular_estilo_mesa gradient"><i class="icon-blog"> </i><?php _e('Envianos tu consulta', 'hosteriaarture');?></h3>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="4" title="Formulario de contacto"]');?>
		</article>
		<article class="tarifas">
			<div class="contenido perspectiva">
				<h3 class="titular_estilo_mesa gradient"><i class="icon-coin"> </i><?php _e('Tarifas', 'hosteriaarture');?></h3>
			</div>
			<?php the_content();?>
		</article>
<?php endwhile; endif;?>
	</section>
<?php get_footer();?>