	<!-- Inicio de la barra lateral del menú -->
    <ul class="sidebar-menu">
        <li class="header" style="color: #fff"><h3 align="center">MENÚ</h3></li>

	<?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu home dipilih, menu home aktif
	if ($_GET["module"]=="home") { ?>
		<li class="active">
			<a href="?module=home"><img src="../img/house-outline.png"> INICIO </a>
	  	</li>
	<?php
	}
	// jika tidak, menu home tidak aktif
	else { ?>
		<li>
			<a href="?module=home"><img src="../img/house-outline.png"> INICIO </a>
	  	</li>
	<?php
	}

	// jika menu about dipilih, menu about aktif
	if ($_GET["module"]=="about") { ?>
		<li class="active">
			<a href="?module=about"><img src="../img/english-receptionist.png">NOSOTROS </a>
	  	</li>
	<?php
	}
	// jika tidak, menu about tidak aktif
	else { ?>
		<li>
			<a href="?module=about"><img src="../img/english-receptionist.png"> NOSOTROS </a>
	  	</li>
	<?php
	}

/*ESTO ES DEL CATALOGO DE ROPA PARA DAMA*/


	// jika menu portfolio dipilih, menu blusas aktif
	if ($_GET["module"]=="damas" || $_GET["module"]=="form_damas") { ?>
		<li class="active">
			<a href="?module=damas"><img src="../img/woman.png"> DAMAS</a>
	  	</li>
	<?php
	}
	// jika tidak, menu portfolio tidak aktif
	else { ?>
		<li>
			<a href="?module=damas"><img src="../img/woman.png"> DAMAS</a>
	  	</li>
	<?php
	}
/*ESTO ES DEL CATALOGO DE ROPA PARA CABALLEROS*/

	// jika menu portfolio dipilih, menu caballeros aktif
	if ($_GET["module"]=="caballeros" || $_GET["module"]=="form_caballeros") { ?>
		<li class="active">
			<a href="?module=caballeros"><img src="../img/man.png">CABALLEROS</a>
	  	</li>
	<?php
	}
	// jika tidak, menu portfolio tidak aktif
	else { ?>
		<li>
			<a href="?module=caballeros"><img src="../img/man.png">CABALLEROS</a>
	  	</li>
	<?php
	}

/*ESTO ES PARA EL CATALOGO DE NIÑOS*/

// jika menu portfolio dipilih, menu caballeros aktif
	if ($_GET["module"]=="ninos" || $_GET["module"]=="form_ninos") { ?>
		<li class="active">
			<a href="?module=ninos"><img src="../img/baby-head-outline-with-pacifier.png">NIÑOS</a>
	  	</li>
	<?php
	}
	// jika tidak, menu portfolio tidak aktif
	else { ?>
		<li>
			<a href="?module=ninos"><img src="../img/baby-head-outline-with-pacifier.png">NIÑOS</a>
	  	</li>
	<?php
	}

/*ESTO ES PARA EL CATALOGO DE NIÑAS*/

// jika menu portfolio dipilih, menu caballeros aktif
	if ($_GET["module"]=="ninas" || $_GET["module"]=="form_ninas") { ?>
		<li class="active">
			<a href="?module=ninas"><img src="../img/smiling-baby.png">NIÑAS</a>
	  	</li>
	<?php
	}
	// jika tidak, menu portfolio tidak aktif
	else { ?>
		<li>
			<a href="?module=ninas"><img src="../img/smiling-baby.png">NIÑAS</a>
	  	</li>
	<?php
	}
/*ESTO ES PARA PRESENTAR LOS DIFERENTES SERVICIOS QUE ACTUALMENTE TIENE Y PUEDE LLAGAR A OFRECER AL PUBLICO EN GENERAL*/

	// jika menu service dipilih, menu service aktif
	if ($_GET["module"]=="service") { ?>
		<li class="active">
			<a href="?module=service"><img src="../img/operator-avatar.png"> SERVICIOS </a>
	  	</li>
	<?php
	}
	// jika tidak, menu service tidak aktif
	else { ?>
		<li>
			<a href="?module=service"><img src="../img/operator-avatar.png"> SERVICIOS </a>
	  	</li>
	<?php
	}
/*ESTO ES PARA PRESENTAR LAS IMAGENES PERTENECIENTES A LAS INSTALACIONES DE LA TIENDA*/

	// jika menu service dipilih, menu service aktif
	if ($_GET["module"]=="galeria") { ?>
		<li class="active">
			<a href="?module=galeria"><img src="../img/gallery.png"> GALERIA </a>
	  	</li>
	<?php
	}
	// jika tidak, menu service tidak aktif
	else { ?>
		<li>
			<a href="?module=galeria"><img src="../img/gallery.png"> GALERIA </a>
	  	</li>
	<?php
	}




/*ESTE ES EL CATALOGO DE MENSAJES DONDE EL USUARIO PUEDE DEJAR SUS QUEJAS Y SUGERENCIAS RESPECTO A ALGUNA DUDA O PEDIDO QUE QUIERA REALIZAR Y POSTERIORMENTE EL ADMINISTRADOR LOS PUEDE VISUALIZAR*/

	// jika menu message dipilih, menu message aktif
	if ($_GET["module"]=="message" || $_GET["module"]=="form_message") { ?>
		<li class="active">
			<a href="?module=message"><img src="../img/letter.png"> MENSAJES </a>
	  	</li>
	<?php
	}
	// jika tidak, menu message tidak aktif
	else { ?>
		<li>
			<a href="?module=message"><img src="../img/letter.png"> MENSAJES </a>
	  	</li>
	<?php
	}
	?>
	</ul>

	<!--sidebar menu end-->