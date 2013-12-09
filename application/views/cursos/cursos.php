<ul>
<?php 
/*
 * 
 * http://desarrollo.local/php/ci-cf/index.php/cursos/index/10
 * Se muestra un solo registro, el cual tiene la id 10
 * 
 * http://desarrollo.local/php/ci-cf/index.php/cursos/index/
 * http://desarrollo.local/php/ci-cf/index.php/cursos/
 * Se muestra el listado completo de registros de la tabla Cursos*/
if ($cursos) {

	foreach ($cursos->result() as $curso) {
?>
		<li><a href="<?php echo $curso->idCurso; ?>"><?php echo $curso->nombreCurso; ?></a></li>
<?php 
	}
} else {
	echo 'Error en la aplicacion';
}
?>
	</ul>
</body>
</html>