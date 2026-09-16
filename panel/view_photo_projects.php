<?php

include_once "config/vista.php";

$project_id = $_REQUEST['project_id'];

?>

<div class="modal-header">
    <h5 class="modal-title">Galería Fotos | Proyecto:
        <b><?php echo getNameProject($project_id); ?></b></h5>
    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
</div>

<div class="modal-body">
    <?php viewGalleryProjects($project_id); ?>
</div>

<div class="modal-footer">
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

