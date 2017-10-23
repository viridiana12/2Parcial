

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
    <section>
	<fieldset>
    <label for="title">Titulo</label> <br><br>
    <input type="input" name="title" ><br><br>

	<label for="autor">Autor</label><br>
    <input type="input" name="autor" ><br><br>
	
	<label for="fecha">Fecha</label><br>
    <input type="date" name="fecha" ><br><br>
	
    <label for="text">Texto</label><br>
    <textarea name="text"></textarea><br><br>
	
	

    <input type="submit" name="submit" value="Crear articulo" />
    </fieldset>
	</section>
</form>