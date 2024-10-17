<footer>
		<div class="copyright">
			<?php
			$telfijo_web =  of_get_option('telfijo_web', '');
			$celular_web = of_get_option('celular_web', '');
			$direccion_web = of_get_option('direccion_web', '');
			;?>
			<p>
				<?php
				if( $direccion_web != null ) { echo $direccion_web;};
				if($telfijo_web != null) { ?> - <i class="icon-phone"> </i><?php echo $telfijo_web;?> <?php }; if($celular_web != null) { ?> - <i class="icon-mobile2"></i><?php echo $celular_web;};?>
			</p>
			<p>
				&copy; <?php echo date("Y");?> Todos los derechos reservados | <?php bloginfo( 'name' );?><?php $email_contact = of_get_option('email_contact','');
				if( $email_contact != null ) { echo ' | '.$email_contact; };?>
			</p>

			<div class="redessociales">
			<?php
				$facebook_contact = of_get_option('facebook_contact','');
				$twitter_contact = of_get_option('twitter_contact','');
				if($facebook_contact != null)
				{
					echo '<a title="Facebook" target="_blank" href="//' . $facebook_contact . '"><i class="boton blue icon-facebook"></i></a>';
				}
				if($twitter_contact != null)
				{
					echo ' <a title="Twitter" target="_blank" href="//' . $twitter_contact . '"><i class="boton skyblue icon-twitter"></i></a>';
				}
				?>
				<a href="<?php bloginfo('url');?>/contacto-tarifas/" title="Contacto">
					<i class="boton red icon-mail"></i>
				</a>
					<i class="boton">
						<img width="33" src="<?php bloginfo('stylesheet_directory');?>/img/wifi-2-icon.png" />
					</i>
			</div>


			<div class="creditos">
				<div class="logo_brochero">
					<figure>
						<img src="<?php bloginfo('stylesheet_directory');?>/img/logo-cura-brochero.png" alt="Cura Brochero" />
					</figure>
				</div>
				<p>
					Desarrollado por <a href="http://www.webmoderna.com.ar" target="_blank">WebModerna</a>
				</p>
			</div>
		</div>

	<?php if(wp_is_mobile()) { ?>
		<a href="#" title="<?php _e('ir arriba', 'hosteriaarture');?>" id="ir_arriba_phone">
	<?php } else { ?>
		<a href="#" title="<?php _e('ir arriba', 'hosteriaarture');?>" id="ir_arriba">
	<?php };?>
			<img alt="ir arriba" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAACPUlEQVR42mL8//8/w0ACgABiYhhgABBAA+4AgAAacAcABNCAOwAggAbcAQABNOAOAAigAXcAQACR7YAsIZ4aIK6k1AEAAcREpuW1QKoZiNsodQRAADGRYXkDkGpCEmqDOogsABBAjKQUxUCLWoFUFQ7p5mnvvtSR6gCAACLKAUCLGYFUOxCXE1DaBnRENSkOAAgggg4AWg6Kpm4gLiLSTJDacqBDiApagADC6wCg5cxAqh+Ic7FI/8OTjiYAcTHQEf8IOQAggJjwWM4CpCbjsPwyEIcCcSQQX8MiXwDEE6EewAsAAghrCAA1sgGpqUCcgib1CIh7gXgu0HdfoWp5gVQa1FIZNPUzQR4Aqv2NywEAAYThAKCB7EBqOhAnIgm/h4pNBBr2CkeIiYOCHeoYfiSpOUCcDdT3C5s+gABCcQDQEE4gNQuIY6BCIE0LgbgTaMBdIrOqGpCqgJrBChUGmZEBNOMHunqAAII7AKiRC0jNA+JwIAYJbobm7TNklpbmQApULniC7AHiZaAoBZr3HVkdQACBHQBUzANV4AvEx0ElHVDhDmpUNkCzvYFUPRCbAvEGUMjA0g8IAAQQY6YgtzCQXg3E6kAMKteX40s0ZDqCDRoloMLsIhBHAO14B5IDCCCQAxZBUzconj/TsuoFOoQfmj4kQUU60L5nAAHEAHSANiga6ImBduoCsRuIDRBAjAPdLwAIoAFvEQEE0IA7ACCABtwBAAE04A4ACKABdwBAAA24AwACaMAdABBgAJVW9XmhEin3AAAAAElFTkSuQmCC" />
		</a>
	</footer>

<?php if( is_home() ) { ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/slideshow.js"></script>
<?php };?>

	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/scripts.js" ></script>

<?php if(is_page( 'contacto-tarifas' )) { //Solo se cargará en la página del formulario ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory');?>/js/datepicker-completo.js"></script>
<?php };
	$google_analitycs = of_get_option('google_analitycs', '');
	if ( $google_analitycs != null )
	{
		echo '<script type="text/javascript">'.$google_analitycs.'</script>';
	}

wp_footer();
?>
</body>
</html>