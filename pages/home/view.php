
<br><br>

<div class="row">
    <div class="col-lg-12">
        <h1 style="padding-bottom: 20px" class="page-header center">
           BIENVENIDO(A)
        </h1>

        <br>
    </div>
   <!-- ESTO SE QUEDA PENDIENTE PADA DESPUES...-->
<!-- banner-bottom -->
  <div class="banner-bottom">
    <div class="container"> 
      <div class="agileits_banner_bottom">
        <h3><span>disfruta de fantásticas ofertas</span> Encuentra nuestra acogedora bienvenida
</h3>
      </div>
    
    </div>
  </div>
<!-- //banner-bottom -->

<div class="about-wthree" id="about">
      <div class="container">
           <div class="ab-w3l-spa">
                            <h3 class="title-w3-agileits title-black-wthree">Conocenos
</h3> 
               <p class="about-para-w3ls"> Almacenes Principado es una empresa dedicada a la venta de prendas de temporada para todo el publico
</p>
               <img src="img/page4-img2.jpg" width="1280px" height="500px" class="img-responsive" alt="Hair Salon">
                    <div class="w3l-slider-img">
                      <img src="img/IMG_20180608_124352.jpg" width="600px" height="420px" class="img-responsive" alt="Hair Salon">
                    </div>
                                       <div class="w3ls-info-about">
                        <h4>Te encantarán las nuevas tendencias
!</h4>
                      <p>esperamos que disfrutes de nuestra compañia. </p>
                    </div>
              </div>
        <div class="clearfix"> </div>
    </div>
</div>
<br>
 <div class="row">
    
    
    <div class="row">
        <?php
        // Funcion para mostrar 6 registro del portafolio
        $query = mysqli_query($mysqli, "SELECT * FROM is_galeria ORDER BY galeria_id DESC LIMIT 20")
                                        or die('Hubo un error en la consulta : '.mysqli_error($mysqli));

        while($data = mysqli_fetch_assoc($query)) {
        ?>
            <div class="col-md-4 col-md-4">
                <div class="thumbnail">
                    <a data-toggle="modal" class="open_modal" href="#" data-id="<?php echo $data['galeria_id']; ?>">
                        <img src="img/<?php echo $data['image']; ?>" alt="Portfolio">
                    </a>
                    <div class="caption">
                        
                    </div>
                </div>
            </div>
        <?php  
        }
        ?>
    </div>
    
</div>
<br>
<div align="center">
  <video src="video/videoTrim.mp4" width="50%" controls></video>
</div>
  


 <style>


/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('/w3images/parallax1.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("/w3images/parallax2.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("/w3images/parallax3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
 
  

    
</div>

<div id="modal-form" class="modal" tabindex="-1">

</div>

<script type="text/javascript" src="assets/js/jquery.js"></script>

<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("data-id");
           $.ajax({
                   url: "../pages/blusas/modal.php",
                   type: "GET",
                   data : {id: m,},
                   success: function (ajaxData){
                   $("#modal-form").html(ajaxData);
                   $("#modal-form").modal('show',{backdrop: 'true'});
               }
               });
        });
      });
</script>

<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>

<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("data-id");
           $.ajax({
                   url: "pages/galeria/modal.php",
                   type: "GET",
                   data : {id: m,},
                   success: function (ajaxData){
                   $("#modal-form").html(ajaxData);
                   $("#modal-form").modal('show',{backdrop: 'true'});
               }
               });
        });
      });
</script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

