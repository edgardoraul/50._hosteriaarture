<?php
/**
 * Template Name: Contacto y Tarifas
 *
 * @package WordPress
 * @subpackage hosteriaarture
 * @since Hostería Arture 1.0
 */

// Funciones de comprobación del e-mail
if( isset($_POST['boton']) )
{
	if ( 
		$_POST['name'] == ''
		or $_POST['email'] == ''
		or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/", $_POST['email'])
		or $_POST['telefono'] == ''
		or $_POST['cantidad'] == ''
		or $_POST['ingreso'] == ''
		or $_POST['egreso'] == ''
		or $_POST['message'] == ''
		)
	{
		if( $_POST['name'] == '' )
		{
			$errors[1] = '<span class="error-contactform"> '._e('(Debes ingresar un nombre y apellido válido)', 'hosteriaarture').'</span>';
		}
		if( $_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email']) )
		{
			$errors[2] = '<span class="error-contactform"> '._e('(Debes ingresar email válido)', 'hosteriaarture').'</span>';
		}
		if( $_POST['telefono'] == '' )
		{
			$errors[3] = '<span class="error-contactform"> '._e('(Debes ingresar un teléfono válido)', 'hosteriaarture').'</span>';
		}
		if( $_POST['cantidad'] == '' )
		{
			$errors[4] = '<span class="error-contactform"> '._e('(Debes ingresar una cantidad de personas entre 0 y 99. Solo números)', 'hosteriaarture').'</span>';
		}
		if( $_POST['ingreso'] == '' )
		{
			$errors[5] = '<span class="error-contactform"> '._e('(Debes ingresar una fecha. Solo tienes que hacer click en el día elegido del calendario emergente)', 'hosteriaarture').'</span>';
		}
		if( $_POST['egreso'] == '' )
		{
			$errors[6] = '<span class="error-contactform"> '._e('(Debes ingresar una fecha. Solo tienes que hacer click en el día elegido del calendario emergente)', 'hosteriaarture').'</span>';
		}
		if( $_POST['message'] == '' )
		{
			$errors[7] = '<span class="error-contactform"> '._e('(Debes ingresar un mensaje, comentario o consulta)', 'hosteriaarture').'</span>';
		}
	}
	else
	{
		$dest = "info@webmoderna.com.ar";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$cantidad = $_POST['cantidad'];
		$ingreso = $_POST['ingreso'];
		$egreso = $_POST['egreso'];
		$subject = _e('Consulta vía web').' | '.bloginfo('name');
		$message = htmlspecialchars($_POST['message']);
		$headers = "From: $nombre <$email>\r\n";
		$headers .= "X-Mailer: PHP5\n";
		$headers .= 'MIME-Version: 1.0' . "\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$cuerpo.= '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hotel los Robles</title>
<link href="http://www.hotellosrobles.com.ar/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<style type="text/css">
*{font-family:Verdana, Geneva, sans-serif;font-size:16px;}
body {
  background-color: #C1B35B;
}
td {
  color: #FFF;
}
a:link {
  color: #ccc;
  text-decoration: none;
}
a:visited {
  color: #ccc;
  text-decoration: none;
}
a:hover {
  color: #ccc;
  text-decoration: none;
}
a:active {
  color: #ccc;
  text-decoration: none;
}
.destacado.centrador {
  color: #008040;
}
#wrapper {max-width:800px;}
a {
  font-size: 12px;
}
</style>
</head>
<body>
<table border="0" bgcolor="#3C4E26" align="center" cellpadding="0" cellspacing="0" id="wrapper" style:"font-family:verdana, sans-serif;">
  <tr>
    <td id="header" colspan="3">
      <table id="header-logo" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td id="logo"><img src="http://www.hotellosrobles.com.ar/mail/logo-5.jpg" width="100%" />
            </td>
            <td><img src="http://www.hotellosrobles.com.ar/mail/logo-6.jpg" width="100%" />
            </td>
        </tr>
        <tr>
        <td bgcolor="#3C4E26">&nbsp;</td>
        </tr>
      </table>
      </td>
  </tr>
  <tr>
    <td id="leftside" width="1%">
    </td>
    <td id="main">
      <!--Acá van la tabla con los contenidos y las fotos del mail-->
      <table id="content" border=0 bgcolor="#FFFFFF" cellpadding="6">
       <tr>
        <td width="98%" class="parrafo-comun" id="article" style="color:#000;">
          <h3 align="center" style="color:#3C4E26">Se ha recibido la siguiente consulta:</h3>
          <hr color="#C1B35B" width="95%" />';
		$cuerpo.='<br />';
		$cuerpo.='<strong>Tipo de Consulta:</strong>';
		$cuerpo.=' ';
		$cuerpo.= //$_POST["Requerimiento"];
		$cuerpo.='<br />';
		$cuerpo.='<strong>Apellido y Nombre:</strong>';
		$cuerpo.=' ';
		$cuerpo.=$_POST["name"];
		$cuerpo.='<br />';
		/*$cuerpo.='<strong>Ciudad:</strong>';
		$cuerpo.=' ';
		$cuerpo.=$_POST["ciudad"];
		$cuerpo.='<br />';
		$cuerpo.='<strong>Pa&iacute;s:</strong>';
		$cuerpo.=' ';
		$cuerpo.=$_POST["pais"];
		$cuerpo.='<br />';*/
		$cuerpo.='<strong>Teléfono:</strong>';
		$cuerpo.=' ';
		$cuerpo.=$_POST["telefono"];
		$cuerpo.='<br />';
		$cuerpo.='<strong>Email:</strong>';
		$cuerpo.=' ';
		$cuerpo.=$_POST["email"];
		$cuerpo.='<br />';
		/*$cuerpo.='<strong>Tipo de Habitaci&oacute;n:</strong>';
		$cuerpo.=' ';
		$cuerpo.='Habitaci&oacute;n '.$_POST["tipoHabitacion"];
		$cuerpo.=' ';
		$cuerpo.='<br />';*/
		$cuerpo.='<strong><u>Cantidad de Personas</u>:</strong>';
		$cuerpo.=' ';
		/*$cuerpo.='<br />';
		$cuerpo.='<strong>Adultos:</strong>';
		$cuerpo.=' ';*/
		$cuerpo.=$_POST["Cantidad"];
		$cuerpo.='<br />';
		/*$cuerpo.='<strong>Ni&ntilde;os:</strong>';
		$cuerpo.=' ';
		$cuerpo.=$_POST["CantidadN"];
		$cuerpo.='<br />';
		$cuerpo.='<strong>Beb&eacute;s:</strong>';
		$cuerpo.=' ';
		$cuerpo.=$_POST["CantidadB"];
		$cuerpo.='<br />';*/
		$cuerpo.='<strong>Fecha de Llegada:</strong>';
		$cuerpo.=' ';
		$cuerpo.= $_POST['ingreso'];
		$cuerpo.='<br />';
		$cuerpo.='<strong>Fecha de Partida:</strong>';
		$cuerpo.=' ';
		$cuerpo.= $_POST['egreso'];
		$cuerpo.='<br />';
		$cuerpo.='<strong>Mensaje:</strong>';
		$cuerpo.=' ';
		$cuerpo.= $_POST["message"];
    $cuerpo.='
          </td>
        </tr>
      </table>
    </td>
    <td id="rightside" width="1%">
    </td>
  </tr>
  <tr>
    <td id="footer" colspan="3">
      <table id="footer-bottom" border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td>
        <p align="center" style="font-size:12px; margin:10px 0"><a href="http://www.hotellosrobles.com.ar/servicios.html" target="_blank">Servicios</a> | <a href="http://www.hotellosrobles.com.ar/habitaciones.html" target="_blank">Habitaciones</a> | <a href="http://www.hotellosrobles.com.ar/tarifas.php" target="_blank">Reservas/Tarifas</a> | <a href="http://www.hotellosrobles.com.ar/servicios.html" target="_blank">Excursiones</a> | <a href="http://www.hotellosrobles.com.ar/ubicacion.html" target="_blank">Ubicacion</a> | <a href="http://www.hotellosrobles.com.ar/vacaciones.html" target="_blank">Sus Vacaciones</a> | <a href="http://www.hotellosrobles.com.ar/tarifas.php" target="_blank">Contactenos</a></p>
        <hr color="#C1B35B" width="95%" />
        </td>
        </tr>
        <tr>
          <td id="bottom-fondo">
              <p align="center" style="margin-top:10px;text-align:center;margin-left:10px;margin-right:10px;">Av. Belgrano 854 | Villa Cura Brochero | CP 5891 | Traslasierra | Cordoba | Teléfono: 03544-470042.<br />
              <a href="http://www.hotellosrobles.com.ar">www.hotellosrobles.com.ar</a> | <a href="mailto:info@hotellosrobles.com.ar">info@hotellosrobles.com.ar</a>
              </p>
              <p align="center" class="right" style="font-size:10px;">Powered by <a href="http://www.webmoderna.com.ar" class="webmoderna" style="font-size:10px;">WebModerna</a><a href="http://www.webmoderna.com.ar" class="webmoderna"></a>
              </p>
            </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
		';

		if( mail($dest, $subject, $message, $headers, $cuerpo) )
		{
			$result = '<div class="result_ok">'._e('Tu mensaje se envió correctamente :-)', 'hosteriaarture').'</div>';
			$_POST['name'] = '';
			$_POST['email'] = '';
			$_POST['subject'] = '';
			$_POST['message'] = '';
		}
		else
		{
			$result = '<div class="result_fail"'._e('Oh! Ocurrió un error. Intentá de nuevo :-(', 'hosteriaarture').'</div>';
		}
	}
};

get_header();

if (have_posts()) : while (have_posts()) : the_post();


?>
	<section>
		<article class="formulario">
			<div class="contenido perspectiva">
				<h3 class="titular_estilo_mesa gradient"><i class="icon-blog"> </i><?php _e('Hacé una consulta acá', 'hosteriaarture');?></h3>
			</div>
			<form method="post" action="<?php echo get_permalink($post->ID);?>">
				<div class="input-group">
					<span class="input-group-addon"><i class="icon-user"></i></span>
					<?php echo $errors[1];?>
					<input type="text" name="name" id="name" class="input" placeholder="Apellido y Nombre"  value="<?php echo $_POST['name'];?>" />
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="icon-mail"></i></span>
					<?php echo $errors[2];?>
					<input type="email" name="email" id="email" class="input" placeholder="E-Mail"  value="<?php echo $_POST['email'];?>" />
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="icon-mobile"></i></span>
					<?php echo $errors[3];?>
					<input type="tel" name="telefono" id="telefono" class="input" placeholder="Teléfono"  value="<?php echo $_POST['telefono'];?>" />
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="icon-users"></i></span>
					<?php echo $errors[4];?>
					<input type="number" name="cantidad" id="cantidad" min="0" max="99" class="input" placeholder="Cantidad de Personas"  value="<?php echo $_POST['cantidad'];?>" />
				</div>
				<div class="input-group">
					<span class="input-group-addon" title="Día de ingreso">
						<i class="icon-redo2"> </i>
						<i class="icon-calendar"> </i>
					</span>
					<?php echo $errors[5];?>
					<input title="Día de ingreso" id="ingreso" name="ingreso" type="date" class="datepicker input" placeholder="Ingreso"  value="<?php echo $_POST['ingreso'];?>" />
				</div>
				<div class="input-group">
					<span class="input-group-addon" title="Día de egreso">
						<i class="icon-undo2"> </i>
						<i class="icon-calendar"></i>
					</span>
					<?php echo $errors[6];?>
					<input title="Día de egreso" id="egreso" name="egreso" type="date" class="datepicker input" placeholder="Egreso"  value="<?php echo $_POST['egreso'];?>" />
				</div>
				<?php echo $errors[7];?>
				<textarea rows="5" name="message" id="message" placeholder="Mensaje"  ><?php echo $_POST['message'];?></textarea>
				<p>
					<button type="submit" name="boton" class="boton green large"><i class="icon-checkmark"> </i>Enviar</button>
					<button type="reset" class="boton orange large"><i class="icon-close"> </i>Limpiar</button>
				</p>
				<?php echo $result;?>
			</form>
			<?php //echo do_shortcode('[contact-form-7 id="4" title="Formulario de contacto"]');?>
		</article>
		<article class="tarifas">
			<div class="contenido perspectiva">
				<h3 class="titular_estilo_mesa gradient"><i class="icon-coin"> </i><?php _e('Consultá acá las Tarifas', 'hosteriaarture');?></h3>
			</div>
			<?php the_content();?>
		</article>
<?php endwhile; endif;?>
	</section>
<?php get_footer();?>