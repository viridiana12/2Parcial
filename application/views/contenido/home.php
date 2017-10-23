
	<header>
      <h1><?= $nombre ?></h1>
    </header>
	<form name='formulario' method='post' action='principal.php'>
	<fieldset>
	<img src= '<?= base_url() ?>ave.jpg'>
	</fieldset>
	<fieldset>
	<legend><?php echo $seccion1 ?></legend>
	<label>Selecciona el color</label>
	<input type="color" name="colorBody"><br>
	</fieldset>
    <fieldset>
	    <legend><?php echo $seccion2 ?></legend>
        Nombre del encabezado : <input type='text' name='nombre' >
		<label>Selecciona Color</label>
		<input type="color" name="colorHeader"><br><br>
		Seleccionar el tamaño de la letra  <select name='tamanoHeader'>
	    <option value='0'>chico</option><option value='1'>mediano</option><option value='2'>grande</option>
		</select><br><br>
        Seleccione la imagen: <input type="file" name="urlLogo" /><br><br>
		
	</fieldset>	
	
	<fieldset>
	    <legend>Segunda seccion 'Menu'</legend>
		<label>Selecciona Color del menu</label>
		<input type="color" name="colorMenu"><br><br>
		<label>Cuantos Modulos quiere en el menu: </label>
		<select name='Menu'>
		<option value='0'>1</option><option value='1'>2</option>
		<option value='2'>3</option><option value='3'>4</option>
		<option value='4'>5</option><option value='5'>6</option>
		</select><br><br>
	    Apartado 1: <input type='text' name='menu1'><br><br>
		Apartado 1: <input type='text' name='menu2'><br><br>
		Apartado 1: <input type='text' name='menu3'><br><br>
		Apartado 1: <input type='text' name='menu4'><br><br>
		<?php
		
		$num = ['Menu'];
		if($num == 0){
            echo "Apartado 1: <input type='text' name='menu1'><br><br>";
			
		}else if($num== 1){
		echo "hola";
		}
		else if($num== 2){
		echo "hol2";
		}
		echo "hol2";
		?>
		
    </fieldset>

	
    <fieldset>
	    <legend>Tercera seccion 'Contenido'</legend>
		Ingrese subtitulo: <input type='text' name='subtitulo'><br><br>
		Ingrese el informacion del primer parrafo: <input type='textarea' name='parrafo1'>
		Seleccionar el tamaño de la letra<select name='tamanoHeader'>
		<option value='0'>chico</option><option value='1'>mediano</option><option value='2'>grande</option>
		</select><br><br>
		
        Marca si decea imagen 
        <INPUT NAME="Accion" TYPE="checkbox" ONCLICK="Mostrar_Ocultar(this.checked);">
		<SPAN ID="contenido2" CLASS="hideable"> 
        Seleccione la imagen: <input type="file" name="imagenContenido" /><br><br>
		</SPAN>
		Marca si decea: 
		
		Video <INPUT NAME="Accion2"  TYPE="checkbox" ONCLICK="Mostrar_Ocultar4(this.checked);">
		Audio <INPUT NAME="Accion3"  TYPE="checkbox" ONCLICK="Mostrar_Ocultar5(this.checked);">
		Contanto <INPUT NAME="Accion4"  TYPE="checkbox" ONCLICK="Mostrar_Ocultar3(this.checked);">
		</fieldset>	
		
		<SPAN ID="contenido3" CLASS="hideable"> 
    <fieldset>	
        <legend>formulario para 'Contanto'</legend>
		Nombre como titulo: <input type='text' name='nombContacto'><br><br>
		Nombre del apartado 1: <input type='text' name='contenido1'><br><br>
		frase como ayuda: <input type='text' name='parteCont'><br><br>
	    Nombre del apartado 2: <input type='text' name='contenido2'><br><br>
		frase como ayuda del apartado 2: <input type='text' name='parteCont2'><br><br>
	    Nombre del apartado 3: <input type='text' name='contenido3'><br><br>
		frase como ayuda del apartado 3: <input type='text' name='parteCont3'><br><br>
	</fieldset>		
    </SPAN>

     <SPAN ID="contenido4" CLASS="hideable"> 
    <fieldset>	
        <legend>Video</legend>
		Titulo del video: <input type='text' name='nombreVideo'><br><br>
		Ubicacion: <input type='file' name='urlVideo'><br><br>
	</fieldset>		
	</SPAN>
	
	<SPAN ID="contenido5" CLASS="hideable"> 
    <fieldset>	
        <legend>Audio</legend>
		Titulo del Audio: <input type='text' name='nombreAudio'><br><br>
		Ubicacion: <input type='file' name='urlAudio'><br><br>
	</fieldset>		
	</SPAN>
	
	<fieldset>
        <legend>Quinta seccion 'Pie de pagina'</legend>	
		Leyenda de pie de pagina: <input type='text' name='piePagina'><br><br>
		<label>Selecciona Color del Pie de Pagina</label>
		<input type="color" name="colorPiePag"><br><br>
       
	</fieldset>	

<input type='submit' value='enviar'>
</form>
