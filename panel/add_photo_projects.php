

<?php

include_once "config/controlador.php";
include_once "config/vista.php";

$project_id = $_REQUEST['project_id'];

?>

<div class="modal-header">
    <h5 class="modal-title">Agregar foto | Proyecto:
        <b><?php echo getNameProject($project_id); ?></b></h5>
    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
</div>

<div class="modal-body">
                <form action="#" method="post" name="form_photo" id="form_photo" enctype="multipart/form-data">
                    <input type="hidden" name="project_id" id="project_id" value="<?php echo $project_id; ?>">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label>Cargar Foto *</label>
                            <input type="file" required class="form-control" name="image" id="image" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <small class="text-danger">Advertencia! Por favor, no cierre esta ventana mientras carga un archivo. Cuando termine de cargar será redirigido automáticamente.</small>
                        <div id="loadimg2" style="text-align:center;vertical-align: middle;margin-top: 10px;"><b>Subiendo favor espere...</b><img src="loading.gif" width="40px" alt=""></div>
                    </div>
</div>

<div class="modal-footer">
    <input type="submit" name="btnaddfoto" class="btn btn-rounded btn-success" id="btnaddfoto" value="Agregar Foto">
    </form>
    <a href="#" class="btn btn-rounded btn-dark" data-dismiss="modal">Cerrar</a>
</div>

<script>

    $(document).ready(function() {

        $("#btnaddfoto").on('click', function() {

        var imagen = $('#image').val();
        var id_project = $('#project_id').val();

        if(imagen == 0)
        {
              swal("¡Ups!", "Debes elegir un archivo", "error");
              return false;
        }
        else
        {

            // var formData = new FormData();
            // var files = $('#image')[0].files[0];
            // formData.append('file',files);

            //var frmData = new FormData;
            var frmData = new FormData;
            frmData.append("image",$("#image")[0].files[0]);
            frmData.append("project_id",id_project);
            $.ajax({
                    url: 'addPhoto.php',
                    type: 'post',
                    data: frmData,
                    contentType: false,
                    processData: false,
                    cache: false,
                    success: function(response) {
                        $("#respuesta").html(response);
                        $("#loadimg2").hide();
                    }
            });
            return false;

        }

        });

    });

    </script>

