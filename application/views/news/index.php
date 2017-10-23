   
	
    <form name='formulario' method='post' action='principal.php'>
	<?php foreach ($news as $news_item): ?>
	    
		<fieldset>
        <legend>Articulo <?php echo $news_item['id']; ?></legend>
        <h3><?php echo $news_item['title']; ?></h3>
		Autor: <?php echo $news_item['autor']; ?><br><br>
		Fecha: <?php echo $news_item['fecha']; ?><br><br>
        <div class="main">
               Contenido: <?php echo $news_item['text']; ?>
        </div>
		
		
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">Ver Completo</a></p>
        </fieldset>
        <?php endforeach; ?>

    </form>

