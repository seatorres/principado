
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-home icon-title"></i> Inicio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=beranda"><i class="fa fa-home"></i> Inicio</a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p style="font-size:15px">
            <i class="icon fa fa-user"></i> Bienvenido <strong><?php echo $_SESSION['fullname']; ?></strong>
          </p>        
        </div>
      </div>
    </div>
    <br><br>
    <div style="text-align: center" class="row">
      <div class="col-lg-12 col-xs-12">

        <img src="../img/prince.jpg" height="100">
        <br><br>
        <div style="margin-right: 150px; margin-left: 150px">
          <p>Esta es la página de inicio del sistema | Aquí podras encontrar la informacion necesaria para poder comenzar a utilizar este panel de administración.</p>
        </div>
        <div>
           <video src="../video/2018-07-29 15-44-04Trim.mp4" controls></video>
        </div>

        <br>
      </div>
    </div>
  </section><!-- /.content -->