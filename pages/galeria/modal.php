
	<div style="width:510px" class="modal-dialog">
		<div class="modal-content">

			<div class="modal-body">
				<div class="row">
		            <?php
		            require_once "../../config/database.php";

		            $galeria_id = $_GET['id'];

		            // Funcion para mostrar el damas
		            $query = mysqli_query($mysqli, "SELECT * FROM is_galeria WHERE galeria_id='$galeria_id'")
		                                            or die('Hubo un error en la consulta : '.mysqli_error($mysqli));

		            $data = mysqli_fetch_assoc($query);
		            ?>
	                <div class="col-sm-12 col-md-12">
	                	<br>
	                    <div class="thumbnail">
	                        <img src="img/<?php echo $data['image']; ?>" alt="galeria">
	                        <div class="caption">
	                           
	                        </div>

	                    </div>
	                </div>
	       		</div>
			</div>

			<div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		    </div>
		</div>
	</div>