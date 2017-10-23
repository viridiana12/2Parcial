
	<header>
      <h1><?= $nombre ?></h1>
	  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>estilo.css">
    </header>

	<nav>
		<ul>
		<li><a href='pagina1.php'>Inicio</a></li><br>
		<li><a href='pagina2.html'>Crear</a></li><br>
		</ul>
	</nav>
	
	<form name='formulario' method='post' action='principal.php'>
	<fieldset>
	<legend><?php echo $seccion1 ?></legend>
	<label>Articulo 1</label>
	</fieldset>
    <fieldset>
	    <legend><?php echo $seccion2 ?></legend>
		<label>Articulo 2</label>
	</fieldset>	
</form>
