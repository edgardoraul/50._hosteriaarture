<?php  
	$nombre=htmlspecialchars("$_POST[nombre]");
	$mail=htmlspecialchars("$_POST[mail]");
	$consulta=htmlspecialchars("$_POST[consulta]");				
	$direccionemail="cesar@vasconisturm.com.ar";
	$datos = "Email desde la página web de $nombre";
	$mensaje= "$nombre ha realizado la siguiente consulta: $consulta. Contestación a $mail.";
	$headers = "From: $nombre <$mail>";
	mail($direccionemail,$datos,$mensaje,$headers);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="generator" content="Web Page Maker">

<style type="text/css">
/*----------Text Styles----------*/
.ws6 {font-size: 8px;}
.ws7 {font-size: 9.3px;}
.ws8 {font-size: 11px;}
.ws9 {font-size: 12px;}
.ws10 {font-size: 13px;}
.ws11 {font-size: 15px;}
.ws12 {font-size: 16px;}
.ws14 {font-size: 19px;}
.ws16 {font-size: 21px;}
.ws18 {font-size: 24px;}
.ws20 {font-size: 27px;}
.ws22 {font-size: 29px;}
.ws24 {font-size: 32px;}
.ws26 {font-size: 35px;}
.ws28 {font-size: 37px;}
.ws36 {font-size: 48px;}
.ws48 {font-size: 64px;}
.ws72 {font-size: 96px;}
.wpmd {font-size: 13px;font-family: 'Arial';font-style: normal;font-weight: normal;}
/*----------Para Styles----------*/
DIV,UL,OL /* Left */
{
	margin-top: 0px;
	margin-bottom: 0px;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFF;
}
</style>

<style type="text/css">
div#container
{
	position:relative;
	width: 1101px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body {
	text-align:center;
	margin:0;
	margin-top: 20px;
	margin-bottom: 20px;
}
a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}
a:hover {
	text-decoration: none;
	color: #FF0;
}
a:active {
	text-decoration: none;
}
#form1 table tr .wpmd {
	color: #FFF;
}
#form1 table tr .reservas {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFF;
}
.reservas {
	font-size: 14px;
}
</style>


<script language="JavaScript1.4" type="text/javascript">
<!--
function jsPlay(soundobj) {
 var thissound= eval("document."+soundobj);
 try {
     thissound.Play();
 }
 catch (e) {
     thissound.DoPlay();
 }
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_displayStatusMsg(msgStr) { //v1.0
  status=msgStr;
  document.MM_returnValue = true;
}
//-->
</script>
<title>Hoster&iacute;a Arture - Tranquilo y familiar</title></head>

<body bgColor="#362B23" onLoad="MM_preloadImages('images/nav69523122i.gif','images/nav69523121i.gif','images/nav69523120i.gif')" onmouseover="MM_displayStatusMsg('Hoster&iacute;a Arture - Tranquilo y familiar');return document.MM_returnValue">
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="760" border="0" cellpadding="0" cellspacing="0" background="images/background.jpg">
      <tr>
        <td background="images/banner-sup.jpg"><table width="760" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/transparente.gif" width="10" height="15"></td>
          </tr>
          <tr>
            <td><table width="760" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/transparente.gif" width="50" height="140"></td>
                <td valign="top"><a href="index.html"><img src="images/img818162.jpg" width="160" height="135" border="0"></a></td>
                <td><img src="images/transparente.gif" width="550" height="10"></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="760" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/transparente.gif" width="190" height="15"></td>
                <td><a href="fotos.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','images/nav69523120i.gif',1)"><img src="images/nav69523120a.gif" name="Image10" width="180" height="26" border="0"></a></td>
                <td><img src="images/transparente.gif" width="10" height="15"></td>
                <td><a href="traslasierra.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','images/nav69523121i.gif',1)"><img src="images/nav69523121a.gif" name="Image9" width="180" height="26" border="0"></a></td>
                <td><img src="images/transparente.gif" width="10" height="15"></td>
                <td><a href="mapa.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','images/nav69523122i.gif',1)"><img src="images/nav69523122a.gif" name="Image8" width="180" height="26" border="0"></a></td>
                <td><img src="images/transparente.gif" width="10" height="15"></td>
              </tr>
            </table></td>
          </tr>
          
        </table></td>
      </tr>
      <tr>
        <td><table width="740" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td>&nbsp;</td>
            </tr>
          <tr>
            <td><div align="center">
              <p class="reservas"><span class="reservas">Su consulta ha sido enviada, en breve nos pondremos en comunicaci&oacute;n con usted.</span></p>
              <p class="reservas"><span class="reservas">Gracias.</span></p>
            </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          
          
        </table></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="740" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="160"><img src="images/img818209.jpg" width="157" height="41"></td>
            <td width="566"><p align="center" class="ws11"><font face="Tahoma" class="ws11 ">F. Altamirano 98 (Costanera Norte) - Villa Cura Brochero - C&oacute;rdoba</font><br>
                <font class="ws12" face="Tahoma">Cont&aacute;ctenos por tel&eacute;fono / fax al:</font> <font class="ws12" face="Tahoma">03544- 470651 / msj +54 3544 549184</font></p>              </td>
            <td width="14">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="images/transparente.gif" width="10" height="10"></td>
      </tr>
      <tr>
        <td bgcolor="#FF6600"><table width="740" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="images/transparente.gif" width="10" height="30"></td>
            <td><div align="center"><a href="contacto.html"><font color="#FFFFFF" face="Tahoma" class="ws12"><strong>hosteriaarture@hotmail.com</strong></font></a></div></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
