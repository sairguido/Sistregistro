<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:ingreso");

	exit();

}

include "views/modules/botonera.php";
include "views/modules/cabezote.php";

?>

<!--=====================================
INICIO       
======================================-->

<div id="inicio" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
 
	<div class="jumbotron">
	    <h1>Bienvenido <?php echo $_SESSION["usuario"];?></h1>
	    <p>Al sistema web de almacen.</p>
	</div>

		<hr>
	
	<ul>

		<li class="botonesInicio">
		


		</li>

		<li class="botonesInicio">
		
			<a href="almacen">
			<div style="background:#040404">
			<span class=""><p>Almacen</p></span>
			
			</div>
			</a>

		</li>

		<li class="botonesInicio">
		
			<a href="egreso">
			<div style="background:#040404">
			<span class=""></span>
			<p>Ingreso</p>
			</div>
			</a>

		</li>

		<li class="botonesInicio">
		
			<a href="salida">
			<div style="background:#040404"> 
			<span class=""></span>
			<p>Salida</p>
			</div>
			</a>

		</li>

		<li class="botonesInicio">
		
			

		</li>

		</li>

	</ul>

</div>


<!--====  Fin de INICIO  ====-->