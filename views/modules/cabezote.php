<!--=====================================
 CABEZOTE             
======================================-->

<div id="cabezote" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		
		<ul>
			
			
		</ul>

	</div>

	<div id="time" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		

		<div class="text-center"><?php include "fecha.php"; ?></div>
		<div class="text-center"><?php include "hora.php" ; ?></div>

	</div>

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">
		
		<img src="views/images/photo.jpg" class="img-circle">
		
		<p id="member"><?php echo $_SESSION["usuario"];?> <span class="fa fa-chevron-down"></span>
			<br>
			<ol id="admin">
				<li><a href="perfil"><span class="fa fa-user"></span>Editar Perfil</a></li>
				<li><a href=""><span class="fa fa-file-text"></span>Términos y Condiciones</a></li>
				<li><a href="salir"><span class="fa fa-times"></span>Salir</a></li>
			</ol>

		</p>

	</div>

</div>
<script src="js/horacabezote.js"></script>
<script src="js/fecha.js"></script>
<!--====  Fin de CABEZOTE  ====-->