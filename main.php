<?php
session_start();  
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Perfil de la empresa">
        <meta name="author" content="FacturacionWeb.site">
        <meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
        <title>AppPrincipado</title>

        <!-- favicon -->
        <link rel="shortcut icon" href="img/prince.ico">

        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="assets/css/modern-business.css" rel="stylesheet" type="text/css">

        <!-- Custom Fonts -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">

        <!-- Custom CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="assets/css/w3.css" rel="stylesheet" type="text/css">
        <link href="assets/css/estilos.css" rel="stylesheet" type="text/css">
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
        <!-- for-mobile-apps -->


    <script src="assets/js/push.min.js"></script>


        <script>
            // Pedir el permiso
Notification.requestPermission();

// Utilidad para lanzar la notificación
function spawnNotification(theBody,theIcon,theTitle) {
  var options = {
      body: theBody,
      icon: "img/prince.jpg"
  }
  var n = new Notification(theTitle,options);
  setTimeout(n.close.bind(n), 4000); 
}

// Lanzar la notificación
spawnNotification("Esto es un mensaje de prueba", undefined, "AppPrincipado");
        </script>
         
    </head>


    <body >

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home">
                        <img src="img/prince.ico" height="50">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    <!-- llamar al archivo "navbar-menu.php" para visualizar el menú-->
                    <?php include "navbar-menu.php" ?>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    
    <?php  
    if ($_GET['page']=='home') { ?>
        <!-- Header Carousel -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
    
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('img/almacenes.jpg');"></div>
                    <div class="carousel-caption">
                        <h2>ORIGINAL</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('img/Almacenes principado (1).jpg');"></div>
                    <div class="carousel-caption">
                        <h2>ÚNICA</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('img/slide-3.jpg');"></div>
                    <div class="carousel-caption">
                        <h2>CREATIVA</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('img/slide-4.jpg');"></div>
                    <div class="carousel-caption">
                        <h2>INSPIRADORA</h2>
						
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('img/slide-5.jpg');"></div>
                    <div class="carousel-caption">
                        <h2></h2>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>
    <?php
    } 
    elseif ($_GET['page']=='about') { ?>
        <!-- Header Carousel -->
        <header>
            <div class="top">
                <br><br>
                <a href="about">
                    Nosotros
                </a>
            </div>
        </header>
    <?php
    } 
    elseif ($_GET['page']=='damas') { ?>
        <!-- Header Carousel -->
        <header>
            <div class="top">
                <br><br>
                <a href="damas">
                    Damas
                </a>
            </div>
        </header>
    <?php
    } 
//

    


    elseif ($_GET['page']=='caballeros') { ?>
        <!-- Header Carousel -->
        <header>
            <div class="top">
                <br><br>
                <a href="caballeros">
                    Caballeros
                </a>
            </div>
        </header>
    <?php
    } 
    elseif ($_GET['page']=='niños') { ?>
        <!-- Header Carousel -->
        <header>
            <div class="top">
                <br><br>
                <a href="niños">
                    Niños
                </a>
            </div>
        </header>
    <?php
    } 

    elseif ($_GET['page']=='service') { ?>
        <!-- Header Carousel -->
        <header>
            <div class="top">
                <br><br>
                <a href="service">
                    Servicios
                </a>
            </div>
        </header>
    <?php
    }
    elseif ($_GET['page']=='portfolio') { ?>
        <!-- Header Carousel -->
        <header>
            <div class="top">
                <br><br>
                <a href="portfolio">
                    Portafolio
                </a>
            </div>
        </header>
    <?php
    }
    elseif ($_GET['page']=='contact') { ?>
        <!-- Header Carousel -->
        <header>
            <div style="margin-top:27px"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.153290229874!2d-89.24207306079559!3d13.709164152364105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb506b008d752500!2sCrowne+Plaza+San+Salvador!5e0!3m2!1ses-419!2ssv!4v1500519885305" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </header>
    <?php
    }
    ?>

        <!-- Page Content -->
        <div style="min-height:400px" class="container">
            
            <!-- llamar al archivo "content.php" para mostrar el contenido de cada página-->
            <?php include "content.php"; ?>

        </div>
        <!-- /.container -->
        <div>
            <!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5qapQEERwgAnk26EcPp15aWewAKItdVC";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
        </div>

        <!-- Footer -->
        <footer style="margin-bottom:0" style="color: #002140">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; 2018 - <a href="/">AppPrincipado</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script type="text/javascript" src="assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/owl.carousel.js" ></script>

        <!-- Script to Activate the Carousel -->
        <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })

        $(document).ready(function() {
              $("#owl-demo").owlCarousel({
                  navigation : true,
                  slideSpeed : 300,
                  paginationSpeed : 400,
                  singleItem : true,
                  autoPlay:true

              });
          });
        </script>



    </body>
</html>
