<?php

echo '<fieldset>';
        echo '<legend>Articulo '.$news_item['id'].'</legend><br>';
		echo'<h2>'.$news_item['title'].'</h2>';
		echo'Autor: '.$news_item['autor'].'<br><br>';
		echo'Fecha: '.$news_item['fecha'].'<br><br>';
		echo $news_item['text'].'<br>'; 
		
echo '</fieldset>';
