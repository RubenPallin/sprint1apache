<html>
	<body>
		<h1>Jubilación</h1>
		<?php	
	  	   if (($_GET["edad"]+10) > 65 ) {
			$annos_jub= ($_GET["edad"]+10) - 65;
			echo "En 10 años tendrás " .$annos_jub. " de jubilación";
                   } else {
			echo "¡Disfruta de tu tiempo!";
		   }
		?>
	</body>
</html>
