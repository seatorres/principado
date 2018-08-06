<!-- header -->

 
<ul class="nav navbar-nav navbar-right">
<?php   
// función para comprobar el menú activo
// Si se selecciona el menú principal, si el menú principal está activo
if ($_GET["page"]=="home") { ?>
	<li class="active">
	    <a href="home"> Inicio </a>
	</li>
<?php
}
// si no, el menú de inicio está inactivo
else { ?>
	<li>
        <a href="home"> Inicio </a>
    </li>
<?php
}

// si el menú esta seleccionado, el menú nosotros activo
if ($_GET["page"]=="about") { ?>
  <li class="active">
      <a href="about"> Nosotros </a>
  </li>
<?php
}
// si no, el menú de nosotros está inactivo
else { ?>
  <li>
        <a href="about"> Nosotros </a>
    </li>
<?php
}
// esto es lo de damas

//



// si el menú  damas esta  activo
if ($_GET["page"]=="damas") { ?>
  <li class="active">
        <a href="damas"> Damas </a>
    </li>
<?php
}

// si no, el menú de damas está inactivo
else { ?>
  <li>
        <a href="damas"> Damas </a>
    </li>
<?php
}   








// esto es de caballeros
// si el menú  niños esta  activo
if ($_GET["page"]=="caballeros") { ?>
  <li class="active">
        <a href="caballeros"> Caballeros </a>
    </li>
<?php
}
// si no, el menú de caballeros está inactivo
else { ?>
  <li>
        <a href="caballeros"> Caballeros </a>
    </li>
<?php
}   

//esto es de niños

// si el menú  niños esta  activo
if ($_GET["page"]=="ninos") { ?>
  <li class="active">
        <a href="ninos"> Niños </a>
    </li>
<?php
}
// si no, el menú de niños está inactivo
else { ?>
  <li>
        <a href="ninos"> Niños </a>
    </li>
<?php
}   
 // niñas
//esto es de niños

// si el menú  niños esta  activo
if ($_GET["page"]=="ninas") { ?>
  <li class="active">
        <a href="ninas"> Niñas </a>
    </li>
<?php
}
// si no, el menú de niños está inactivo
else { ?>
  <li>
        <a href="ninas"> Niñas </a>
    </li>
<?php
}   


// si el menú esta seleccionado, el servicios  activo
if ($_GET["page"]=="service") { ?>
  <li class="active">
        <a href="service"> Servicios </a>
    </li>
<?php
}
// si no, el menú de servicios está inactivo
else { ?>
  <li>
        <a href="service"> Sevicios </a>
    </li>
<?php
}


 

// si el menú  contacto esta  activo
if ($_GET["page"]=="contact") { ?>
	<li class="active">
        <a href="contact"> Contacto </a>
    </li>
<?php
}
// si no, el menú de contacto está inactivo
else { ?>
	<li>
        <a href="contact"> Contacto </a>
    </li>
<?php
}                      
?>
</ul>