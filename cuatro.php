<html>
<head>
  <!-- Include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include jQuery Mobile stylesheets -->
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <!-- Include the jQuery library -->
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <!-- Include the jQuery Mobile library -->
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
	<body>	
		<!--un data rol es un atributo personalizado compatible con html5, su sintaxis es "data-" y es lo que la hace
		platarforma de desarrollo,  -->
		<div data-role="page" >
			<!--Cabecera-->
			<div data-role="header" data-theme="b" data-position="fixed">
				<h1>Cabecera </h1>
				<div data-role="navbar">
					<ul>
						<li><a href="index.html" data-rel= "back" >1</a></li>
						<li><a href="segundo.php" data-rel= "back" >2</a></li>
						<li><a href="tres.php" data-rel= "back">3</a></li>
						<li><a href="">4</a></li>
						<li><a href="cinco.php" data-transition= "Slide" >5</a></li>
					</ul>
				</div>	
			</div>	
			<!--Contenido-->
			<div data-role="content" data-theme="b">
				<p>Estas en la pagina 4</p>

			</div>
			<!--Pie de pagina-->
			<div data-role="footer" data-theme="b" class="ui-bar" data-position="fixed" data-id='piefijo'>
				<div data-role="controlgroup" data-type="horizontal">
					<a href="#agregar" data-role="button" data-theme="a" data-transition= "turn" data-rel="" data-icon="plus">Agregar</a>
					<a href="#eliminar" data-role="button" data-theme="a" data-transition= "turn" data-rel="" data-icon="delete">Eliminar</a>									
				</div>				
			</div>
		</div>


	</body>
</html>